<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" class="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">


    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

        <!-- META DATA -->
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="Description" content="Ynex - PHP Tailwind CSS Admin & Dashboard Template">
        <meta name="keywords" content="admin template, admin dashboard, php admin panel, admin, tailwind css dashboard, php admin dashboard, tailwind admin template, tailwind template, php dashboard, dashboard, tailwind, tailwind dashboard, tailwind css, tailwind css template">

        <!-- TITLE -->
		<title> Ynex - PHP Tailwind CSS Admin & Dashboard Template </title>

        <!-- FAVICON -->
        <link rel="icon" href="https://php.spruko.com/tailwind/ynex/ynex/assets/images/brand-logos/favicon.ico" type="image/x-icon">

        <!-- ICONS CSS -->
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

        <!-- STYLE CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <!-- MAIN JS -->
        <script src="{{ asset('assets/js/authentication-main.js') }}"></script>


        <!-- SWIPER CSS -->
        <link rel="stylesheet" href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}">


	</head>






    <body class="bg-white dark:!bg-bodybg">




            <div class="grid grid-cols-12 authentication mx-0 text-defaulttextcolor text-defaultsize">

                <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-12 col-span-12">
                    <div class="flex justify-center items-center h-full">
                    <div class="p-[3rem]">
                        <div class="mb-4">
                            <a aria-label="anchor" href="index.html">
                                <img src="../assets/images/brand-logos/desktop-logo.png" alt="" class="authentication-brand desktop-logo">
                                <img src="../assets/images/brand-logos/desktop-dark.png" alt="" class="authentication-brand desktop-dark">
                            </a>
                        </div>
                        <p class="h5 font-semibold mb-2">Sign Up</p>




                        <p class="mb-4 text-[#8c9097] dark:text-white/50 opacity-[0.7] font-normal">Welcome &amp; Join us by creating a free account !</p>
                        <div class="btn-list">
                            <button aria-label="button" type="button" class="ti-btn ti-btn-lg ti-btn-light !font-medium me-[0.365rem] dark:border-defaultborder/10"><svg class="google-svg" xmlns="http://www.w3.org/2000/svg" width="2443" height="2500" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262"><path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"/><path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"/><path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"/><path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"/></svg>Sign In with google</button>
                            <button aria-label="button" type="button" class="ti-btn ti-btn-icon ti-btn-light me-[0.365rem]"><i class="ri-facebook-fill"></i></button>
                            <button aria-label="button" type="button" class="ti-btn ti-btn-icon ti-btn-light"><i class="ri-twitter-fill"></i></button>
                        </div>





                        <div class="text-center my-[3rem] authentication-barrier">

                            <span>OR</span>


  @if(session()->has('msg'))
                                    <div class="ti-toast bg-primary/10 text-sm text-primary m-3" role="alert">
                                            <div class="flex p-4">
 {{session()->get('msg')}}
                                                <div class="ms-auto">
                                                    <button type="button"
                                                        class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-primary  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white/10 focus:ring-gray-600 transition-all text-sm dark:focus:ring-offset-white/10 dark:focus:ring-white/10">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="w-3.5 h-3.5" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>


@endif


                        </div>
                        <form method="post" action="{{route('user.register')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="grid grid-cols-12 gap-y-4">
                            <div class="xl:col-span-12 col-span-12 mt-0">
                                <label for="signup-firstname"  class="form-label text-default"> Name</label>
                                <input type="text" name="name" class="form-control form-control-lg w-full !rounded-md" id="signup-firstname" placeholder="Name">
                                @error('name') <span class="text-danger">{{$message}}</span> @enderror

                            </div>

                            <div class="xl:col-span-12 col-span-12">

                                <label for="signup-lastname" class="form-label text-default">Email</label>
                                <input type="text" name="email" class="form-control form-control-lg w-full !rounded-md" id="signup-lastname" placeholder="Email">
                                 @error('email') <span class="text-danger">{{$message}}</span> @enderror

                            </div>

                            <div class="xl:col-span-12 col-span-12">
                                <label for="signup-password" class="form-label text-default">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control form-control-lg !rounded-e-none" id="signup-password" placeholder="password">
                                    <button aria-label="button" class="ti-btn ti-btn-light !rounded-s-none !mb-0" onclick="createpassword('signup-password',this)" type="button" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button>
                                </div>
                                @error('password') <span class="text-danger">{{$message}}</span> @enderror

                            </div>

                            <div class="xl:col-span-12 col-span-12">
                                <label for="signup-password" class="form-label text-default">Phone</label>
                                <div class="input-group">
                                    <input type="text" name="phone"  class="form-control form-control-lg !rounded-e-none" id="signup-password" placeholder="phone +20">
                                 </div>
                                 @error('phone') <span class="text-danger">{{$message}}</span> @enderror

                            </div>


                            <div class="xl:col-span-12 col-span-12">

                            <label for="signup-confirmpassword" class="form-label text-default">Position</label>
                            <div class="input-group">
                                <input type="text" name="position" class="form-control form-control-lg !rounded-e-none" id="signup-confirmpassword" placeholder="position">
                             </div>
                             @error('position') <span class="text-danger">{{$message}}</span> @enderror
                            </div>



                            <div class="xl:col-span-12 col-span-12">
                                <label for="signup-password" class="form-label text-default">Photo</label>
                                <div class="input-group">
                                    <input type="file" name="photo" class="form-control form-control-lg !rounded-e-none" id="signup-password" placeholder="phone">

                                </div>
                                @error('photo') <span class="text-danger">{{$message}}</span> @enderror

                            </div>


                           <div class="xl:col-span-12 col-span-12 mb-4">


                                <div class="form-check mt-4 !ps-0 !inline-flex">
                                    <input class="form-check-input align-middle" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label text-[#8c9097] dark:text-white/50 font-normal inline-block" for="defaultCheck1">
                                        By creating a account you agree to our <a href="terms.html" class="text-success"><u>&nbsp;Terms &amp; Conditions</u></a>&nbsp; and&nbsp; <a href="terms.html" class="text-success"><u>Privacy Policy</u></a>
                                    </label>
                                </div>
                            </div>
                            <div class="  xl:col-span-12 col-span-12 grid mt-2">
                                <button type="submit" class="ti-btn ti-btn-lg bg-primary text-white !font-medium dark:border-defaultborder/10">Create Account</button>
                            </div>
                        </div>
</form>
                        <div class="text-center">
                            <p class="text-[0.75rem] text-[#8c9097] dark:text-white/50 mt-4">Already have an account?
                                <a href="{{ route('user.loginForm') }}" class="text-primary">Sign In</a></p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 col-span-12 xl:block hidden px-0">
                    <div class="authentication-cover">
                        <div class="aunthentication-cover-content rounded">
                            <div class="swiper keyboard-control">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="text-white text-center p-[3rem] flex items-center justify-center">
                                            <div>
                                                <div class="mb-[3rem]">
                                                    <img src="../assets/images/authentication/2.png" class="authentication-image" alt="">
                                                </div>
                                                <h6 class="font-semibold text-[1rem]">Sign Up</h6>
                                                <p class="font-normal text-[.875rem] opacity-[0.7]"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa eligendi expedita aliquam quaerat nulla voluptas facilis. Porro rem voluptates possimus, ad, autem quae culpa architecto, quam labore blanditiis at ratione.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="text-white text-center p-[3rem] flex items-center justify-center">
                                            <div>
                                                <div class="mb-[3rem]">
                                                    <img src="../assets/images/authentication/3.png" class="authentication-image" alt="">
                                                </div>
                                                <h6 class="font-semibold text-[1rem]">Sign Up</h6>
                                                <p class="font-normal text-[.875rem] opacity-[0.7]"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa eligendi expedita aliquam quaerat nulla voluptas facilis. Porro rem voluptates possimus, ad, autem quae culpa architecto, quam labore blanditiis at ratione.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="text-white text-center p-[3rem] flex items-center justify-center">
                                            <div>
                                                <div class="mb-[3rem]">
                                                    <img src="../assets/images/authentication/2.png" class="authentication-image" alt="">
                                                </div>
                                                <h6 class="font-semibold text-[1rem]">Sign Up</h6>
                                                <p class="font-normal text-[.875rem] opacity-[0.7]"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa eligendi expedita aliquam quaerat nulla voluptas facilis. Porro rem voluptates possimus, ad, autem quae culpa architecto, quam labore blanditiis at ratione.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        <!-- SCRIPTS -->


        <!-- Swiper JS -->
        <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

        <!-- Internal Sing-Up JS -->
        <script src="{{ asset('assets/js/authentication.js') }}"></script>

        <!-- Show Password JS -->
        <script src="{{ asset('assets/js/show-password.js') }}"></script>


        <!-- END SCRIPTS -->

	</body>
</html>
<!-- This code use for render base file -->
