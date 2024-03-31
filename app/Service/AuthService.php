<?php


namespace App\Service;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use App\Interfaces\AuthRepositoryInterface;
use NextApps\VerificationCode\VerificationCode;

class AuthService
{

    private AuthRepositoryInterface $authRepositories ;
    private RoleService $roleService ;
    private UploadImageService $uploadImageService ;
    private VerificationCodeService $verificationCodeService ;


    public function __construct(
    AuthRepositoryInterface $authRepositories ,
    RoleService $roleService,
    UploadImageService $uploadImageService,
    VerificationCodeService $verificationCodeService
    ){
        $this->authRepositories = $authRepositories;
        $this->roleService = $roleService;
        $this->uploadImageService = $uploadImageService;
        $this->verificationCodeService = $verificationCodeService;
    }

    public function register(AuthRequest $request) {

        $data = $request->validated();
        $data['photo'] =  $this->uploadImageService->uploadPhoto($request);

        // Register the user
        $user = $this->authRepositories->register($data);

        // Assign Role
        $this->roleService->assignRole($user);

        // Send Verification Code
        $this->verificationCodeService->sendVerificationCode($request);

        return $user ;
        }



        



    public function Login(Request $request )
    {
        $credentials = [
            'password'=>$request->password,
            'email'=>$request->email,
        ];
        $user = User::where('email',$request->email)->first();

        if( $this->authRepositories->Login($credentials)){

        return   $user->is_verify == true ?   redirect()->route('user.profile') :
            redirect()->route('user.verifyForm');

         }
        return redirect()->route('user.loginForm');

    }

    public function verify(Request $request){
        $user =User::where('id',Auth::user()->id)->first();
        $code = $request->codeOne . $request->codeTow . $request->codeThree . $request->codeFour . $request->codeFive . $request->codeSix;

        if ($user instanceof User && $this->authRepositories->verify($user, $code)) {
            $user->is_verify=true;
            $user->save();
            return redirect()->route('user.profile');
        } else {
            VerificationCode::send($user->email);
        }
    }

    public function logout(){
      return  $this->authRepositories->logout();
    }
}
