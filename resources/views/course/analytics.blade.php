@extends('layouts.dashboard');


@section('content');

<!-- MAIN-CONTENT -->
<div class="content">
    <div class="main-content">


        <!-- Page Header -->
        <div class="block justify-between page-header md:flex">
            <div>
                <h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold"> Course</h3>
            </div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-[0.813rem] ps-[0.5rem]">
                  <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                    Dashboards
                    <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                  </a>
                </li>
                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 " aria-current="page">
                    Course
                </li>
            </ol>
        </div>
        <!-- Page Header Close -->

        <div class="grid grid-cols-12 gap-x-6">
            <div class="xxl:col-span-5 xl:col-span-12 col-span-12">
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box hrm-main-card primary">
                            <div class="box-body">
                                <div class="flex items-start">
                                    <div class="me-4">
                                        <span class="avatar bg-danger  !text-white">
                                            <i class="ti ti-gift text-[1.25rem]"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow">
                                        <span class="font-semibold text-[#8c9097] dark:text-white/50 block mb-1">Total
                                            Courses</span>
                                        <h5 class="font-semibold mb-1 text-[1.25rem]">22,124</h5>
                                        <p class="mb-0">
                                            <span class="badge bg-primary/10 text-primary">This Year</span>
                                        </p>
                                    </div>
                                    <div>
                                        <span class="text-[0.875rem] font-semibold text-success">+1.03%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box hrm-main-card secondary">
                            <div class="box-body">
                                <div class="flex items-start">
                                    <div class="me-4">
                                        <span class="avatar bg-secondary !text-white">
                                            <i class="ri-user-unfollow-line text-[1.125rem]"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow">
                                        <span class="font-semibold text-[#8c9097] dark:text-white/50 block mb-1">Courses In
                                            Progress</span>
                                        <h5 class="font-semibold mb-1 text-[1.25rem]">528</h5>
                                        <p class="mb-0">
                                            <span class="badge bg-secondary/10 text-secondary">This Month</span>
                                        </p>
                                    </div>
                                    <div>
                                        <span class="text-[0.875rem] font-semibold text-success">+0.36%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box  hrm-main-card warning">
                            <div class="box-body">
                                <div class="flex items-start">
                                    <div class="me-4">
                                        <span class="avatar bg-warning !text-white">
                                            <i class="ri-service-line text-[1.125rem]"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow">
                                        <span class="font-semibold text-[#8c9097] dark:text-white/50 block mb-1">Upcoming
                                            Courses</span>
                                        <h5 class="font-semibold mb-1 text-[1.25rem]">8,289</h5>
                                        <p class="mb-0">
                                            <span class="badge bg-warning/10 text-warning">This Year</span>
                                        </p>
                                    </div>
                                    <div>
                                        <span class="text-[0.875rem] font-semibold text-danger">-1.28%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box hrm-main-card danger">
                            <div class="box-body">
                                <div class="flex items-start">
                                    <div class="me-4">
                                        <span class="avatar bg-danger !text-white">
                                            <i class="ri-contacts-line text-[1.125rem]"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow">
                                        <span class="font-semibold text-[#8c9097] dark:text-white/50 block mb-1">Watch Time</span>
                                        <h5 class="font-semibold mb-1 text-[1.25rem]">1,453</h5>
                                        <p class="mb-0">
                                            <span class="badge bg-danger/10 text-danger">This Month</span>
                                        </p>
                                    </div>
                                    <div>
                                        <span class="text-[0.875rem] font-semibold text-success">+4.25%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">Courses Summary</div>
                            </div>
                            <div class="box-body">
                                <div class="sm:grid grid-cols-12 md:gap-y-0 gap-y-3">
                                    <div
                                        class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12">
                                        <div class="flex items-start">
                                            <div class="me-3">
                                                <span class="avatar avatar-rounded bg-light !text-primary">
                                                    <i class="ti ti-files text-[1.125rem]"></i>
                                                </span>
                                            </div>
                                            <div>
                                                <span class="block mb-1 text-[#8c9097] dark:text-white/50">Course Name</span>
                                                <h6 class="font-semibold mb-0 text-[1rem]">PHP</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12">
                                        <div class="flex items-start">
                                            <div class="me-3">
                                                <span class="avatar avatar-rounded bg-light !text-secondary">
                                                    <i class="ti ti-file-check text-[1.125rem]"></i>
                                                </span>
                                            </div>
                                            <div>
                                                <span class="block mb-1 text-[#8c9097] dark:text-white/50">Time Watch</span>
                                                <h6 class="font-semibold mb-0 text-[1rem]">20</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12">
                                        <div class="flex items-start">
                                            <div class="me-3">
                                                <span class="avatar avatar-rounded bg-light !text-warning">
                                                    <i class="ti ti-file-dislike text-[1.125rem]"></i>
                                                </span>
                                            </div>
                                            <div>
                                                <span class="block mb-1 text-[#8c9097] dark:text-white/50"> Course Lessons </span>
                                                <h6 class="font-semibold mb-0 text-[1rem]">203</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xxl:col-span-7 xl:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-header justify-between items-center sm:flex block">
                        <div class="box-title sm:mb-0 mb-2">
                         Courses   Performance
                        </div>
                        <div class="inline-flex rounded-md shadow-sm" role="group" aria-label="Basic example">
                            <button type="button"
                                class="ti-btn-group !border-0 !text-xs !py-2 !px-3 ti-btn-primary">1W</button>
                            <button type="button"
                                class="ti-btn-group !border-0 !text-xs !py-2 !px-3 ti-btn-primary">1M</button>
                            <button type="button"
                                class="ti-btn-group !border-0 !text-xs !py-2 !px-3 ti-btn-primary">6M</button>
                                <button type="button"
                                class="ti-btn-group !border-0 !text-xs !py-2 !px-3 ti-btn-primary-full !rounded-s-none !text-white">1Y</button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div id="performanceReport"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-x-6 col-span-12">
            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">
                            Course Summary
                        </div>
                    </div>
                    <div class="box-body !p-6">
                        <div id="jobs-summary"></div>
                    </div>
                    <div class="box-footer !py-6 !px-4 !mt-2">
                        <div class="grid xxxl:grid-cols-4 grid-cols-4">
                            <div class="col p-0">
                                <div class="text-center">
                                    <span class="text-[#8c9097] dark:text-white/50 text-[0.75rem] mb-1 hrm-jobs-legend published inline-block ms-2">InProgress
                                    </span>
                                    <div><span class="text-[1rem] font-semibold">1,624</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col p-0">
                                <div class="text-center">
                                    <span class="text-[#8c9097] dark:text-white/50 text-[0.75rem] mb-1 hrm-jobs-legend private inline-block ms-2">UpComing
                                    </span>
                                    <div><span class="text-[1rem] font-semibold">1,267</span></div>
                                </div>
                            </div>
                            <div class="col p-0">
                                <div class="text-center">
                                    <span class="text-[#8c9097] dark:text-white/50 text-[0.75rem] mb-1 hrm-jobs-legend closed inline-block ms-2">Closed
                                    </span>
                                    <div><span class="text-[1rem] font-semibold">1,153</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col p-0">
                                <div class="text-center">
                                    <span class="text-[#8c9097] dark:text-white/50 text-[0.75rem] mb-1 hrm-jobs-legend onhold inline-block ms-2">On Hold
                                    </span>
                                    <div><span class="text-[1rem] font-semibold">1,153</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">UpComing Lessons</div>
                    </div>
                    <div class="box-body">
                        <ul class="list-none timeline-widget mb-0 my-5">
                            <li class="timeline-widget-list">
                                <div class="flex items-start">
                                    <div class="me-[3rem] text-center">
                                        <span class="block text-[1.25rem] font-semibold text-primary">02</span>
                                        <span class="block text-[0.75rem] text-[#8c9097] dark:text-white/50">Mon</span>
                                    </div>
                                    <div class="flex flex-wrap flex-grow items-start justify-between">
                                        <div>
                                            <p class="mb-1 sm:text-truncate timeline-widget-content text-wrap">PHP For Biggner Part One</p>
                                            <p class="mb-0 text-[0.75rem] leading-none text-[#8c9097] dark:text-white/50">10:00AM<span class="badge bg-primary/10 text-primary ms-2">Announcement</span></p>
                                        </div>
                                        <div>
                                            <div class="hs-dropdown ti-dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);" class="text-[1rem] text-[#8c9097] dark:text-white/50">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                        href="javascript:void(0);">Week</a></li>
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                        href="javascript:void(0);">Month</a></li>
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                        href="javascript:void(0);">Year</a></li>
                                                  </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-widget-list">
                                <div class="flex items-start">
                                    <div class="me-[3rem] text-center">
                                        <span class="block text-[1.25rem] font-semibold text-primary">15</span>
                                        <span class="block text-[0.75rem] text-[#8c9097] dark:text-white/50">Sun</span>
                                    </div>
                                    <div class="flex flex-wrap flex-grow items-start justify-between">
                                        <div>
                                            <p class="mb-1 sm:text-truncate timeline-widget-content text-wrap">PHP For Biggner Part Tow</p>
                                            <p class="mb-0 text-[0.75rem] leading-none text-[#8c9097] dark:text-white/50"><span class="badge text-warning bg-warning/10">Holiday</span></p>
                                        </div>
                                        <div>
                                            <div class="hs-dropdown ti-dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);" class="text-[1rem] text-[#8c9097] dark:text-white/50">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                        href="javascript:void(0);">Week</a></li>
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                        href="javascript:void(0);">Month</a></li>
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                        href="javascript:void(0);">Year</a></li>
                                                  </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-widget-list">
                                <div class="flex items-start">
                                    <div class="me-[3rem] text-center">
                                        <span class="block text-[1.25rem] font-semibold text-primary">23</span>
                                        <span class="block text-[0.75rem] text-[#8c9097] dark:text-white/50">Mon</span>
                                    </div>
                                    <div class="flex flex-wrap flex-grow items-start justify-between">
                                        <div>
                                            <p class="mb-1 sm:text-truncate timeline-widget-content text-wrap">PHP For Biggner Part Three</p>
                                            <p class="mb-4 text-[0.75rem] leading-none text-[#8c9097] dark:text-white/50">09:00AM<span class="badge text-success bg-success/10 ms-2">Birthday</span></p>
                                            <p class="mb-1 sm:text-truncate timeline-widget-content text-wrap">PHP For Biggner Part Four</p>
                                            <p class="mb-0 text-[0.75rem] leading-none text-[#8c9097] dark:text-white/50">04:00PM<span class="badge text-primary bg-primary/10 ms-2">Announcement</span></p>
                                        </div>
                                        <div>
                                            <div class="hs-dropdown ti-dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);" class="text-[1rem] text-[#8c9097] dark:text-white/50">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                        href="javascript:void(0);">Week</a></li>
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                        href="javascript:void(0);">Month</a></li>
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                        href="javascript:void(0);">Year</a></li>
                                                  </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-widget-list">
                                <div class="flex items-start">
                                    <div class="me-[3rem] text-center">
                                        <span class="block text-[1.25rem] font-semibold text-primary">31</span>
                                        <span class="block text-[0.75rem] text-[#8c9097] dark:text-white/50">Tue</span>
                                    </div>
                                    <div class="flex flex-wrap flex-grow items-start justify-between">
                                        <div>
                                            <p class="mb-1 sm:text-truncate timeline-widget-content text-wrap">PHP For Biggner Part Five</p>
                                            <p class="mb-0 text-[0.75rem] leading-none text-[#8c9097] dark:text-white/50"><span class="badge text-warning bg-warning/10">Holiday</span></p>
                                        </div>
                                        <div>
                                            <div class="hs-dropdown ti-dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);" class="text-[1rem] text-[#8c9097] dark:text-white/50">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                        href="javascript:void(0);">Week</a></li>
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                        href="javascript:void(0);">Month</a></li>
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                        href="javascript:void(0);">Year</a></li>
                                                  </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="xxl:col-span-5 xl:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-header justify-between flex-wrap">
                        <div class="box-title">
                          Lessons Summary
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <div class="me-3">
                                <input class="ti-form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                            </div>
                            <div class="hs-dropdown ti-dropdown">
                                <a href="javascript:void(0);"
                                  class="ti-btn ti-btn-primary !bg-primary !text-white !py-1 !px-2 !text-[0.75rem] !m-0 !gap-0 !font-medium"
                                  aria-expanded="false">
                                  Sort By<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                </a>
                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden" role="menu">
                                  <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                      href="javascript:void(0);">New</a></li>
                                  <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                      href="javascript:void(0);">Popular</a></li>
                                  <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                      href="javascript:void(0);">Relevant</a></li>
                                </ul>
                              </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-hover whitespace-nowrap table-bordered min-w-full">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-start">S.No</th>
                                        <th scope="col" class="text-start">Lesson</th>
                                        <th scope="col" class="text-start">Course</th>
                                        <th scope="col" class="text-start">Due Date</th>
                                        <th scope="col" class="text-start">Status</th>
                                        {{--  <th scope="col" class="text-start">Amount</th>  --}}
                                        <th scope="col" class="text-start">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border border-inherit border-solid hover:bg-gray-100 dark:border-defaultborder/10 dark:hover:bg-light">
                                        <td>1</td>
                                        <td>Write Your First PHP Code: Display a Message in Your Web Browser

                                        </td>
                                        <td>
                                            <div class="flex items-center leading-none">
                                                <div class="me-2">
                                                    <span class="avatar avatar-md avatar-rounded">
                                                        <img src="{{asset('assets/images/faces/1.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="block font-semibold mb-1">PHP</span>
                                                    <span class="text-[#8c9097] dark:text-white/50 text-[0.75rem]">
                                                        Tim Buchalka s
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            14-05-2023
                                        </td>
                                        <td>
                                            <span class="badge bg-success text-white">Upcoming</span>
                                        </td>

                                        <td>
                                            <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-info/10 text-info hover:bg-info hover:text-white hover:border-info"><i
                                                  class="ri-pencil-line"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                  class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border border-inherit border-solid hover:bg-gray-100 dark:border-defaultborder/10 dark:hover:bg-light">
                                        <td>2</td>
                                        <td>Variables in PHP: What They are, How to Create Them, and How to Name Them</td>
                                        <td>
                                            <div class="flex items-center leading-none">
                                                <div class="me-2">
                                                    <span class="avatar avatar-md avatar-rounded">
                                                        <img src="{{asset('assets/images/faces/4.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="block font-semibold mb-1">C# </span>
                                                    <span class="text-[#8c9097] dark:text-white/50 text-[0.75rem]">
                                                        Tim Buchalka s
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            14-05-2023
                                        </td>
                                        <td>
                                            <span class="badge bg-warning text-white">Pending</span>
                                        </td>

                                        <td>
                                            <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-info/10 text-info hover:bg-info hover:text-white hover:border-info"><i
                                                  class="ri-pencil-line"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                  class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border border-inherit border-solid hover:bg-gray-100 dark:border-defaultborder/10 dark:hover:bg-light">
                                        <td>3</td>
                                        <td>Perform Operations on Variables: Operators</td>
                                        <td>
                                            <div class="flex items-center leading-none">
                                                <div class="me-2">
                                                    <span class="avatar avatar-md avatar-rounded">
                                                        <img src="{{asset('assets/images/faces/6.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="block font-semibold mb-1">Javascript</span>
                                                    <span class="text-[#8c9097] dark:text-white/50 text-[0.75rem]">Tim Buchalka s</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            14-05-2023

                                        </td>
                                         <td>
                                            <span class="badge bg-primary text-white">Overdue</span>
                                        </td>

                                        <td>
                                            <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-info/10 text-info hover:bg-info hover:text-white hover:border-info"><i
                                                  class="ri-pencil-line"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                  class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border border-inherit border-solid hover:bg-gray-100 dark:border-defaultborder/10 dark:hover:bg-light">
                                        <td>4</td>
                                        <td>Basic Variable Types: Strings and Numbers
                                        </td>
                                        <td>
                                            <div class="flex items-center leading-none">
                                                <div class="me-2">
                                                    <span class="avatar avatar-md avatar-rounded">
                                                        <img src="{{asset('assets/images/faces/12.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="block font-semibold mb-1">BackEnd Development</span>
                                                    <span class="text-[#8c9097] dark:text-white/50 text-[0.75rem]">Tim Buchalka s</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            21-05-2023
                                        </td>
                                        <td>
                                            <span class="badge bg-success text-white">Paid</span>
                                        </td>
                                         <td>
                                            <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-info/10 text-info hover:bg-info hover:text-white hover:border-info"><i
                                                  class="ri-pencil-line"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                  class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border border-inherit border-solid hover:bg-gray-100 dark:border-defaultborder/10 dark:hover:bg-light">
                                        <td>5</td>
                                        <td>PHP concepts, variables and operators
                                        </td>
                                        <td>
                                            <div class="flex items-center leading-none">
                                                <div class="me-2">
                                                    <span class="avatar avatar-md avatar-rounded">
                                                        <img src="{{asset('assets/images/faces/3.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="block font-semibold mb-1">C# Design Pattern</span>
                                                    <span class="text-[#8c9097] dark:text-white/50 text-[0.75rem]">Tim Buchalka s</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            18-05-2023
                                        </td>
                                        <td>
                                            <span class="badge bg-primary text-white">Overdue</span>
                                        </td>
                                         <td>
                                            <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-info/10 text-info hover:bg-info hover:text-white hover:border-info"><i
                                                  class="ri-pencil-line"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                  class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border border-inherit border-solid hover:bg-gray-100 dark:border-defaultborder/10 dark:hover:bg-light">
                                        <td>6</td>
                                        <td>Basic Variable Types: Boolean and Null</td>
                                        <td>
                                            <div class="flex items-center leading-none">
                                                <div class="me-2">
                                                    <span class="avatar avatar-md avatar-rounded">
                                                        <img src="{{asset('assets/images/faces/5.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="block font-semibold mb-1">Laravel Orm</span>
                                                    <span class="text-[#8c9097] dark:text-white/50 text-[0.75rem]">Tim Buchalka s</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            20-05-2023
                                        </td>
                                        <td>
                                            <span class="badge bg-warning text-white">Pending</span>
                                        </td>
                                         <td>
                                            <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-info/10 text-info hover:bg-info hover:text-white hover:border-info"><i
                                                  class="ri-pencil-line"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                  class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="sm:flex items-center">
                          <div class="text-defaulttextcolor/70">
                            Showing 5 Entries <i class="bi bi-arrow-right ms-2 font-semibold"></i>
                          </div>
                          <div class="ms-auto">
                            <nav aria-label="Page navigation" class="pagination-style-4">
                                <ul class="ti-pagination mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="javascript:void(0);">
                                            Prev
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item">
                                        <a class="page-link !text-primary" href="javascript:void(0);">
                                            next
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-x-6">
            <div class="xl:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-header justify-between">
                        <div class="box-title">
                            Course List
                        </div>
                        <div class="flex items-center flex-wrap">
                            <div class="me-3 my-1">
                                <input class="ti-form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                            </div>
                            <div class="hs-dropdown ti-dropdown py-1">
                                <a href="javascript:void(0);"
                                class="ti-btn ti-btn-primary-full !py-1 !px-2 !text-[0.75rem] !m-0 !gap-0 !font-medium"
                                aria-expanded="false">
                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                              </a>
                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden" role="menu">
                                  <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                      href="javascript:void(0);">New</a></li>
                                  <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                      href="javascript:void(0);">Popular</a></li>
                                  <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                      href="javascript:void(0);">Relevant</a></li>
                                </ul>
                              </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table whitespace-nowrap table-bordered min-w-full">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-start">S.No</th>
                                        <th scope="col" class="text-start">Course</th>
                                        <th scope="col" class="text-start">Duration</th>
                                        <th scope="col" class="text-start">Category</th>
                                        <th scope="col" class="text-start">Type</th>
                                        <th scope="col" class="text-start">Status</th>
                                        <th scope="col" class="text-start">Started</th>
                                        <th scope="col" class="text-start">Ended</th>
                                        <th scope="col" class="text-start">Progress</th>
                                        <th scope="col" class="text-start">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-t border-defaultborder dark:border-defaultborder/10">
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <div class="flex items-center leading-none">
                                                <div class="me-2">
                                                    <span class="avatar avatar-xs ">
                                                        <img src="../assets/images/nft-images/1.png" alt="" class="!rounded-md">
                                                    </span>
                                                </div>
                                                <div>PHP For Biggner To Hero</div>
                                            </div>
                                        </td>
                                        <td>
                                            30 Hours

                                        </td>
                                        <td>
                                            Science
                                        </td>
                                        <td><span class="badge bg-outline-primary">Full Time</span></td>

                                        <td><span class="badge bg-outline-primary">In Progress</span></td>


                                        <td>
                                            24-02-2024
                                        </td>
                                        <td>
                                            24-03-2024  
                                        </td>
                                        <td>
                                            cc
                                        </td>
                                      
                                        
                                        <td>
                                            <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn  ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-info/10 text-info hover:bg-info hover:text-white hover:border-info"><i
                                                  class="ri-pencil-line"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn  ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                  class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                     
                                    <tr class="border-t border-defaultborder dark:border-defaultborder/10">
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <div class="flex items-center leading-none">
                                                <div class="me-2">
                                                    <span class="avatar avatar-xs ">
                                                        <img src="../assets/images/nft-images/2.png" alt="" class="!rounded-md">
                                                    </span>
                                                </div>
                                                <div>C# For Biggner To Hero</div>
                                            </div>
                                        </td>
                                        <td>
                                            30 Hours

                                        </td>
                                        <td>
                                            Science
                                        </td>
                                        <td><span class="badge bg-outline-primary">Full Time</span></td>
                                        <td><span class="badge bg-outline-warning">Pending</span></td>

                                        <td>
                                            24-02-2024
                                        </td>
                                        <td>
                                            24-03-2024  
                                        </td>
                                        <td>
                                            <div class="flex items-center">
                                                <div class="progress progress-xs course-status-progress progress-animate me-2" >
                                                    <div class="progress-bar progress-bar-striped !bg-warning w-[38%]"></div>
                                                </div>
                                                <div>38%</div>
                                            </div>
                                        </td>
                                      
                                        
                                        <td>
                                            <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn  ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-info/10 text-info hover:bg-info hover:text-white hover:border-info"><i
                                                  class="ri-pencil-line"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn  ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                  class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    <tr class="border-t border-defaultborder dark:border-defaultborder/10">
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <div class="flex items-center leading-none">
                                                <div class="me-2">
                                                    <span class="avatar avatar-xs ">
                                                        <img src="../assets/images/nft-images/3.png" alt="" class="!rounded-md">
                                                    </span>
                                                </div>
                                                <div>Js For Biggner To Hero</div>
                                            </div>
                                        </td>
                                        <td>
                                            30 Hours

                                        </td>
                                        <td>
                                            Science
                                        </td>
                                        <td><span class="badge bg-outline-primary">Full Time</span></td>
                                        <td><span class="badge bg-outline-danger">Up Coming</span></td>

                                        <td>
                                            24-02-2024
                                        </td>
                                        <td>
                                            24-03-2024  
                                        </td>
                                        <td>
                                            <div class="flex items-center">
                                                <div class="progress progress-xs course-status-progress progress-animate me-2" >
                                                    <div class="progress-bar progress-bar-striped !bg-info w-3/4"></div>
                                                </div>
                                                <div>75%</div>
                                            </div>
                                        </td>
                                      
                                        
                                        <td>
                                            <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn  ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-info/10 text-info hover:bg-info hover:text-white hover:border-info"><i
                                                  class="ri-pencil-line"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn  ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                  class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    <tr class="border-t border-defaultborder dark:border-defaultborder/10">
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <div class="flex items-center leading-none">
                                                <div class="me-2">
                                                    <span class="avatar avatar-xs ">
                                                        <img src="../assets/images/nft-images/4.png" alt="" class="!rounded-md">
                                                    </span>
                                                </div>
                                                <div>Design Pattern For Biggner To Hero</div>
                                            </div>
                                        </td>
                                        <td>
                                            30 Hours

                                        </td>
                                        <td>
                                            Science
                                        </td>
                                        <td><span class="badge bg-outline-primary">Full Time</span></td>
                                        <td><span class="badge bg-outline-primary">In Progress</span></td>

                                        <td>
                                            24-02-2024
                                        </td>
                                        <td>
                                            24-03-2024  
                                        </td>
                                        <td>
                                            <div class="flex items-center">
                                                <div class="progress progress-xs course-status-progress progress-animate me-2" >
                                                    <div class="progress-bar progress-bar-striped !bg-primary w-[55%]"></div>
                                                </div>
                                                <div>55%</div>
                                            </div>
                                        </td>
                                      
                                        
                                        <td>
                                            <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn  ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-info/10 text-info hover:bg-info hover:text-white hover:border-info"><i
                                                  class="ri-pencil-line"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);"
                                                class="ti-btn  ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                  class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="sm:flex items-center">
                          <div class="text-defaulttextcolor dark:text-defaulttextcolor/70">
                            Showing 5 Entries <i class="bi bi-arrow-right ms-2 font-semibold"></i>
                          </div>
                          <div class="ms-auto">
                            <nav aria-label="Page navigation" class="pagination-style-4">
                                <ul class="ti-pagination mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="javascript:void(0);">
                                            Prev
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item">
                                        <a class="page-link !text-primary" href="javascript:void(0);">
                                            next
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>


    </div>
</div>

<!-- END MAIN-CONTENT -->




@endsection
