

@extends('layouts.dashboard');


@section('content');



<!-- MAIN-CONTENT -->
<div class="content">
    <div class="main-content">

        
      <div class="container">

        <!-- Page Header -->
        <div class="block justify-between page-header md:flex">
            <div>
                <h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">Mail Settings</h3>
            </div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-[0.813rem] ps-[0.5rem]">
                  <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                    EMail
                    <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                  </a>
                </li>
                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 " aria-current="page">
                   Mail Settings
                </li>
            </ol>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="grid grid-cols-12 gap-6 mb-[3rem]">
            <div class="xl:col-span-12 col-span-12">
               
            <form method="post" action="{{route('user.update',['id'=>$user->id])}}" enctype="multipart/form-data" >
                        @csrf
            <div class="box">
                    <div class="box-header sm:flex block !justify-start">
                        <nav aria-label="Tabs" class="md:flex block !justify-start whitespace-nowrap">
                            <a class="m-1 block w-full hs-tab-active:bg-primary/10 hs-tab-active:text-primary cursor-pointer text-defaulttextcolor dark:text-defaulttextcolor/70 py-2 px-3 flex-grow  text-[0.75rem] font-medium rounded-md hover:text-primary active" id="Personal-item" data-hs-tab="#personal-info" aria-controls="personal-info">
                                Personal Information
                            </a>
                             
                        </nav>
                    </div>
                 

                     <div class="box-body">
                        <div class="tab-content">
                            <div class="tab-pane show active dark:border-defaultborder/10" id="personal-info" aria-labelledby="Personal-item" >
                                <div class="sm:p-4 p-0">
                                    <h6 class="font-semibold mb-4 text-[1rem]">
                                        Photo :
                                    </h6>
                                    <div class="mb-6 sm:flex items-center">
                                        <div class="mb-0 me-[3rem]">
                                            <span class="avatar avatar-xxl avatar-rounded">
                                                <img src="{{asset('image/user/' . $user->photo)}}" name="photo" alt="" id="profile-img">
                                                <a aria-label="anchor" href="javascript:void(0);" class="badge rounded-full bg-primary avatar-badge">
                                                    <input type="file" name="photo" class="absolute w-full h-full opacity-0" id="profile-image">
                                                    <i class="fe fe-camera !text-[0.65rem]"></i>
                                                </a>
                                            </span>
                                        </div>
                                        <div class="inline-flex">
                                            <button type="button" class="ti-btn bg-primary text-white !rounded-e-none !font-medium ">Change</button>
                                            <button type="button" class="ti-btn ti-btn-light !font-medium !rounded-s-none">Remove</button>
                                        </div>
                                    </div>
                                    <h6 class="font-semibold mb-4 text-[1rem]">
                                        Profile :
                                    </h6>
                                    <div class="sm:grid grid-cols-12 gap-6 mb-6">
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="first-name" class="form-label">First Name</label>
                                            <input type="text" value="{{$user->name}}" name="name" class="form-control w-full !rounded-md" id="first-name" placeholder="Firt Name">
                                        </div>
                                       
                                        
                                    </div>
                                    <h6 class="font-semibold mb-4 text-[1rem]">
                                        Personal information :
                                    </h6>
                                    <div class="sm:grid grid-cols-12 gap-6 mb-6">
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="email-address" class="form-label">Email Address :</label>
                                            <input type="text" value="{{$user->email}}" name="email" class="form-control w-full !rounded-md" id="email-address" placeholder="xyz@gmail.com">
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="Contact-Details" class="form-label">Contact Details :</label>
                                            <input type="text" value="{{$user->phone}}" name="phone" class="form-control w-full !rounded-md" id="Contact-Details" placeholder="contact details">
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="Contact-Details" class="form-label">Position :</label>
                                            <input type="text" value="{{$user->position}}" name="position" class="form-control w-full !rounded-md" id="Contact-Details" placeholder="Position">
                                        </div>
                                        
                                         
                                        

                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="bio" class="form-label">Bio :</label>
                                            <textarea class="form-control w-full !rounded-md dark:!text-defaulttextcolor/70" name="bio" id="bio" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. At sit impedit, officiis non minima saepe voluptates a magnam enim sequi porro veniam ea suscipit dolorum vel mollitia voluptate iste nemo!</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
      
                            
                        
                          
                    <div class="box-footer">
                            
                            <button type="submit" class="ti-btn bg-primary text-white m-1">
                                Save Changes
                            </button>
                     </div>
                </div>

            </div>
            </form>

        </div>

        <!--End::row-1 -->

      </div>


    </div>
</div>

<!-- END MAIN-CONTENT -->


@endsection