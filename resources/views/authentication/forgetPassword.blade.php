<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" class="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">


    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

        <!-- META DATA -->
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="Description" content="Ynex">
        <meta name="keywords" content="admin template, admin dashboard, php admin panel, admin, tailwind css dashboard, php admin dashboard, tailwind admin template, tailwind template, php dashboard, dashboard, tailwind, tailwind dashboard, tailwind css, tailwind css template">

        <!-- TITLE -->
		<title> Ynex </title>

        <!-- FAVICON -->
        <link rel="icon" href="https://php.spruko.com/tailwind/ynex/ynex/assets/images/brand-logos/favicon.ico" type="image/x-icon">
        <!-- ICONS CSS -->
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">

        <!-- STYLE CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

        <!-- MAIN JS -->
        <script src="{{asset('assets/js/authentication-main.js')}}"></script>


        <!-- SWIPER CSS -->
        <link rel="stylesheet" href="{{asset('assets/libs/swiper/swiper-bundle.min.css')}}">


	</head>

    <body class="bg-white dark:!bg-bodybg text-defaulttextcolor dark:text-defaulttextcolor/70 text-defaultsize">
        @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif


        <div class="grid grid-cols-12 authentication mx-0">

          <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-12 col-span-12">
            <div class="grid grid-cols-12 items-center h-full ">
              <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-2"></div>
              <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-8 col-span-12">
                <div class="p-[3rem]">
                  <div class="mb-4">
                    <a aria-label="anchor" href="/">
                      <img src="{{ asset('assets/images/brand-logos/desktop-logo.png') }}" alt=""
                        class="authentication-brand desktop-logo">
                      <img src="{{ asset('assets/images/brand-logos/desktop-dark.png') }}" alt=""
                        class="authentication-brand desktop-dark">
                    </a>
                  </div>
                  <p class="h5 font-semibold mb-2">Create Password</p>
                  <p class="mb-4 text-[#8c9097] dark:text-white/50 opacity-[0.7] font-normal">Hello {{ auth()->user()->name ?? ''}} !</p>
                  <div class="btn-list">
                    <button type="button" class="ti-btn ti-btn-lg ti-btn-light !font-medium me-[0.365rem] dark:border-defaultborder/10"><svg
                        class="google-svg" xmlns="http://www.w3.org/2000/svg" width="2443" height="2500"
                        preserveAspectRatio="xMidYMid" viewBox="0 0 256 262">
                        <path fill="#4285F4"
                          d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" />
                        <path fill="#34A853"
                          d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" />
                        <path fill="#FBBC05"
                          d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" />
                        <path fill="#EB4335"
                          d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" />
                      </svg>Sign In with google</button>
                    <button aria-label="button" type="button" class="ti-btn ti-btn-icon ti-btn-primary me-[0.365rem]"><i class="ri-facebook-fill"></i></button>
                    <button aria-label="button" type="button" class="ti-btn ti-btn-icon ti-btn-info"><i class="ri-twitter-fill"></i></button>
                  </div>
                  <div class="text-center my-[3rem] authentication-barrier">
                    <span>OR</span>
                  </div>

                  <form  action="{{route('user.forgetPassword')}}" method="POST">
                    @csrf
                  <div class="grid grid-cols-12 gap-y-4">
                    <div class="xl:col-span-12 col-span-12 mt-0">
                      <label for="create-password" class="form-label text-default">Email</label>
                      <div class="flex">
                        <input type="email"
                          class="form-control form-control-lg  !w-full !rounded-e-none"
                          id="create-password" placeholder="email" required name="email">
                        <button onclick="createpassword('create-password',this)"
                          class="ti-btn ti-btn-light !mb-0 !rounded-s-none dark:border-white/10 !border-s-0"
                          aria-label="button" type="button"><i class="ri-eye-off-line align-middle"></i></button>
                      </div>
                    </div>


                    <div class="xl:col-span-12 col-span-12 grid mt-2">
                      <button   type="submit" class="ti-btn ti-btn-lg bg-primary text-white !font-medium dark:border-defaultborder/10">
                        Continue
                    </button>
                    </div>
                  </div>
                </form>


                  <div class="text-center">
                    <p class="text-[0.75rem] text-[#8c9097] dark:text-white/50 mt-4">Back to home ? <a href="index.html"
                        class="text-primary">Click Here</a></p>
                  </div>
                </div>
              </div>
              <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-2"></div>
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
                            <img src="{{ asset('assets/images/authentication/2.png') }}" class="authentication-image" alt="">
                          </div>
                          <h6 class="font-semibold text-[1rem]">Create Password</h6>
                          <p class="font-normal text-[0.875rem] opacity-[0.7]"> Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Ipsa eligendi expedita aliquam quaerat nulla voluptas facilis. Porro rem
                            voluptates possimus, ad, autem quae culpa architecto, quam labore blanditiis at ratione.</p>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="text-white text-center p-[3rem] flex items-center justify-center">
                        <div>
                          <div class="mb-[3rem]">
                            <img src="{{ asset('assets/images/authentication/3.png') }}" class="authentication-image" alt="">
                          </div>
                          <h6 class="font-semibold text-[1rem]">Create Password</h6>
                          <p class="font-normal text-[0.875rem] opacity-[0.7]"> Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Ipsa eligendi expedita aliquam quaerat nulla voluptas facilis. Porro rem
                            voluptates possimus, ad, autem quae culpa architecto, quam labore blanditiis at ratione.</p>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="text-white text-center p-[3rem] flex items-center justify-center">
                        <div>
                          <div class="mb-[3rem]">
                            <img src="{{ asset('assets/images/authentication/2.png') }}" class="authentication-image" alt="">
                          </div>
                          <h6 class="font-semibold text-[1rem]">Create Password</h6>
                          <p class="font-normal text-[0.875rem] opacity-[0.7]"> Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Ipsa eligendi expedita aliquam quaerat nulla voluptas facilis. Porro rem
                            voluptates possimus, ad, autem quae culpa architecto, quam labore blanditiis at ratione.</p>
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
