
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
                  <div class="grid grid-cols-12  items-center h-full">
                    <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-2"></div>
                      <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-8 col-span-12">
                          <div class="p-[3rem]">
                              <div class="mb-4">
                                  <a aria-label="anchor" href="index.html">
                                      <img src="../assets/images/brand-logos/desktop-logo.png" alt="" class="authentication-brand desktop-logo">
                                      <img src="../assets/images/brand-logos/desktop-dark.png" alt="" class="authentication-brand desktop-dark">
                                  </a>
                              </div>
                              <p class="font-semibold mb-2 text-xl">Verify Your Account</p>
                              <p class="mb-4 text-[#8c9097] dark:text-white/50 opacity-[0.7] font-normal">Enter the 4 digit code sent to the registered email Id.</p>
                             <form method="post" action="{{ route('user.verify') }}">
                                @csrf
                              <div class="grid grid-cols-12 gap-4">
                                  <div class="xl:col-span-12 col-span-12 mb-3">
                                      <div class="grid grid-cols-12 gap-4">
                                          <div class="col-span-2 px-1">
                                              <input type="text" name="codeOne" class="!px-0 form-control form-control-lg w-full !rounded-md !text-[1rem] text-center" id="one" maxlength="1" onkeyup="clickEvent(this,'two')">
                                          </div>
                                          <div class="col-span-2 px-1">
                                              <input type="text" name="codeTow" class="!px-0 form-control form-control-lg w-full !rounded-md !text-[1rem] text-center" id="two" maxlength="1" onkeyup="clickEvent(this,'three')">
                                          </div>
                                          <div class="col-span-2 px-1">
                                              <input type="text" name="codeThree" class="!px-0 form-control form-control-lg w-full !rounded-md !text-[1rem] text-center" id="three" maxlength="1" onkeyup="clickEvent(this,'four')">
                                          </div>
                                          <div class="col-span-2 px-1">
                                              <input type="text" name="codeFour" class="!px-0 form-control form-control-lg w-full !rounded-md !text-[1rem] text-center" id="four" maxlength="1">
                                          </div>
                                          <div class="col-span-2 px-1">
                                            <input type="text" name="codeFive" class="!px-0 form-control form-control-lg w-full !rounded-md !text-[1rem] text-center" id="five" maxlength="1">
                                        </div>
                                        <div class="col-span-2 px-1">
                                            <input type="text" name="codeSix" class="!px-0 form-control form-control-lg w-full !rounded-md !text-[1rem] text-center" id="six" maxlength="1">
                                        </div>
                                      </div>
                                      <div class="form-check mt-3 mb-0 !ps-0 !inline-flex">
                                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                          <label class="form-check-label" for="defaultCheck1">
                                              Did not recieve a code ?<a href="mail.html" class="text-primary ms-2 inline-block">Resend</a>
                                          </label>
                                      </div>
                                  </div>
                                  <div class="xl:col-span-12 col-span-12 grid">
                                      {{--  <a href="index.html" class="ti-btn ti-btn-lg bg-primary text-white !font-medium dark:border-defaultborder/10">Verify</a>  --}}

                                      <button type="submit" class="ti-btn ti-btn-lg bg-primary text-white !font-medium dark:border-defaultborder/10">Verify</button>

                                    </div>
                              </div>
                            </form>
                              <div class="text-center">
                                  <p class="text-[0.75rem] text-danger mt-4"><sup><i class="ri-asterisk"></i></sup>Don t share the verification code with anyone !</p>
                              </div>
                          </div>
                      </div>
                      <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-2 "></div>
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
                                              <h6 class="font-semibold text-[1rem]">Verify Your Account</h6>
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
                                              <h6 class="font-semibold text-[1rem]">Verify Your Account</h6>
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
                                              <h6 class="font-semibold text-[1rem]">Verify Your Account</h6>
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

        <!-- Internal Two Step Verification JS -->
        <script src="{{ asset('assets/js/two-step-verification.js') }}"></script>

        <!-- Internal Sing-Up JS -->
        <script src="{{ asset('assets/js/authentication.js') }}"></script>


        <!-- END SCRIPTS -->

	</body>
</html>
<!-- This code use for render base file -->
