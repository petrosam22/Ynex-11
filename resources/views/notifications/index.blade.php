

@extends('layouts.dashboard');


@section('content');





<div class="content">
    <div class="main-content">


          <!-- Page Header -->
          <div class="block justify-between page-header md:flex">
              <div>
                  <h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold"> Notifications</h3>
              </div>
              <ol class="flex items-center whitespace-nowrap min-w-0">
                  <li class="text-[0.813rem] ps-[0.5rem]">
                    <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                      Pages
                      <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                    </a>
                  </li>
                  <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 " aria-current="page">
                      Notifications
                  </li>
              </ol>
          </div>
          <!-- Page Header Close -->

          <div class="container">

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-6 !mx-auto">
                <div class="xxl:col-span-2 col-span-12"></div>
                <div class="xxl:col-span-8 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                    <ul class="list-none mb-0 notification-container">
                  @foreach ( $notifications as $notification )

                        <li>
                            <div class="box un-read">
                                <div class="box-body !p-4">
                                    <a href="">
                                        <div class="flex items-start mt-0 flex-wrap">
                                            <div class="leading-top">
                                                <span class="avatar avatar-md online me-4 avatar-rounded">
                                                    @if($notification->data['icon'])
                                                        <div class="pe-2">
                                                            <span
                                                            class="inline-flex text-primary justify-center items-center !w-[2.5rem] !h-[2.5rem] !leading-[2.5rem] !text-[0.8rem] !bg-primary/10 !rounded-[50%]">
                                                            <i  class="{{ $notification->data['icon'] }}"></i>
                                                        </span>
                 
                                                        </div>
 
                                                     
                                                    @endif
                                                </span>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="sm:flex items-center">
                                                    <div class="sm:mt-0 mt-2">
                                                        <p class="mb-0 text-[.875rem] font-semibold">{{ $notification->data['message'] }}</p>
                                                        <p class="mb-0 text-[#8c9097] dark:text-white/50">{{ $notification->data['description']	?? '' }}
                                                        <span class="mb-0 block text-[#8c9097] dark:text-white/50 text-[0.75rem]">{{ $notification->created_at->format('H:i') }}</span>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="ltr:float-right rtl:float-left badge bg-light text-[#8c9097] dark:text-white/50 whitespace-nowrap">
                                                           
                                                            {{ $notification->created_at->format('Y.M,D') }}

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                    <div class="!text-center mb-4">
                    <button type="button" class="ti-btn ti-btn-info ti-btn-loader">Loading
                        <span class="ti-spinner !h-4 !w-4" role="status"></span>
                    </button>
                    </div>
                </div>
                <div class="xxl:col-span-2 col-span-12"></div>
            </div>
            <!--End::row-1 -->

          </div>


    </div>
</div>

<!-- END MAIN-CONTENT -->

@endsection
