@extends('layouts.dashboard');


@section('content');

<div class="content">
    <div class="main-content">

         
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold"> Workspaces List</h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                      <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                        Workspaces
                        <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                      </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 " aria-current="page">
                        Workspaces List
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-6">
                <div class="xl:col-span-12 col-span-12">
                    <div class="box custom-box">
                        <div class="box-body p-4">
                            <div class="flex items-center justify-between flex-wrap gap-4">
                                <div class="flex flex-wrap gap-1 newproject">
                                    <a href="projects-create.html" class="ti-btn ti-btn-primary-full me-2 !mb-0"><i class="ri-add-line me-1 font-semibold align-middle"></i>New Workspace</a>
                                    <select class="form-control !w-auto" data-trigger name="choices-single-default" id="choices-single-default">
                                        <option value="">Sort By</option>
                                        <option value="Newest">Newest</option>
                                        <option value="Date Added">Date Added</option>
                                        <option value="Type">Type</option>
                                        <option value="A - Z">A - Z</option>
                                    </select>
                                </div>
                                <div class="avatar-list-stacked">
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../assets/images/faces/1.jpg" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../assets/images/faces/2.jpg" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../assets/images/faces/8.jpg" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../assets/images/faces/12.jpg" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../assets/images/faces/10.jpg" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../assets/images/faces/4.jpg" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../assets/images/faces/5.jpg" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../assets/images/faces/13.jpg" alt="img">
                                    </span>
                                    <a class="avatar avatar-sm bg-primary avatar-rounded text-white" href="javascript:void(0);">
                                        +8
                                    </a>
                                </div>
                                <div class="flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search Workspaces" aria-label="Search">
                                    <button class="ti-btn ti-btn-light !mb-0" type="submit">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-1 -->

            <!-- Start::row-2 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="xxl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12">
                    <div class="box custom-box">
                        <div class="box-header items-center !justify-start flex-wrap !flex">
                            <div class="me-2">
                                <span class="avatar avatar-rounded p-1 bg-danger/10 text-danger">
                                    <img src="../assets/images/company-logos/1.png" alt="">
                                </span>
                            </div>
                            <div class="flex-grow">
                                <a href="javascript:void(0);" class="font-semibold text-[.875rem] block text-truncate project-list-title">Manage Day</a>
                                <span class="text-[#8c9097] dark:text-white/50 block text-[0.75rem]">Total <strong class="text-defaulttextcolor">20</strong> Boards</span>
                            </div>
                            <div class="hs-dropdown ti-dropdown">
                                <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light !mb-0" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                    <li><a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-eye-line align-middle me-1 inline-flex"></i>View</a></li>
                                    <li><a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-edit-line align-middle me-1 inline-flex"></i>Edit</a></li>
                                    <li><a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-1 align-middle inline-flex"></i>Delete</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="flex items-center justify-between mb-3">
                                <div>
                                    <div class="font-semibold mb-1">Team :</div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="../assets/images/faces/8.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="../assets/images/faces/10.jpg" alt="img">
                                        </span>
                                        <a class="avatar avatar-sm bg-primary avatar-rounded text-white" href="javascript:void(0);">
                                            +2
                                        </a>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <div class="font-semibold mb-1">Status :</div>
                                    <span class="badge bg-success/10 text-success">Private</span>
                                </div>
                            </div>
                            <div class="font-semibold mb-1">Description :</div>
                            <p class="text-[#8c9097] dark:text-white/50 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi maiores similique tempore.</p>
                             
                        </div>
                        <div class="box-footer flex items-center justify-between">
                            <div>
                                <span class="text-[#8c9097] dark:text-white/50 text-[0.6875rem] block">Created Date :</span>
                                <span class="font-semibold block">24,May 2023</span>
                            </div>
                            
                        </div>
                    </div>
                </div>
                 
               
            </div>
            <!--End::row-2 -->
            
            <nav aria-label="Page navigation">
                <ul class="ti-pagination ltr:float-right rtl:float-left mb-4">
                    <li class="page-item disabled"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Previous</a></li>
                    <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">1</a></li>
                    <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">2</a></li>
                    <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a></li>
                </ul>
            </nav>


    </div>
</div>

<!-- END MAIN-CONTENT -->



@endsection