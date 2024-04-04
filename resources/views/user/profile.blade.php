 @extends('layouts.dashboard');


@section('content');


 <!-- MAIN-CONTENT -->
 <div class="content">
                <div class="main-content">


                    <!-- Page Header -->
                    <div class="block justify-between page-header md:flex">
                        <div>
                            <h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold"> Profile</h3>
                        </div>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[0.813rem] ps-[0.5rem]">
                            <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                Pages
                                <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                            </a>
                            </li>
                            <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 " aria-current="page">
                                Profile
                            </li>
                        </ol>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-4 xl:col-span-12 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-body !p-0">
                                    <div class="sm:flex items-start p-6      main-profile-cover">
                                        <div>
                                            <span class="avatar avatar-xxl avatar-rounded online me-4">
                                                <img src="{{asset( 'image/user/' . auth()->user()->photo)}}" alt="">
                                                
                                            </span>
                                        </div>
                                        <div class="flex-grow main-profile-info">
                                            <div class="flex items-center !justify-between">
                                                <h6 class="font-semibold mb-1 text-white text-[1rem]">{{ auth()->user()->name }}</h6>
                                                <button type="button" class="ti-btn ti-btn-light !font-medium !gap-0">
                                                <a href="{{ route('user.setting') }}">
                                                    Edit
                                                </a>    
                                                
                                                </button>
                                            </div>
                                            <p class="mb-1 !text-white  opacity-[0.7]">{{ auth()->user()->position }}</p>
                                            <p class="text-[0.75rem] text-white mb-6 opacity-[0.5]">
                                                <span class="me-4 inline-flex"><i class="ri-building-line me-1 align-middle"></i>
                                                {{ auth()->user()->phone }}
                                             </p>
                                            <div class="flex mb-0">
                                                <div class="me-6">
                                                    <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">113</p>
                                                    <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Projects</p>
                                                </div>
                                                <div class="me-6">
                                                    <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">12.2k</p>
                                                    <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Courses</p>
                                                </div>
                                                <div class="me-6">
                                                    <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">128</p>
                                                    <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Tasks</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-6 border-b border-dashed dark:border-defaultborder/10">
                                        <div class="mb-6">
                                            <p class="text-[.9375rem] mb-2 font-semibold">Professional Bio :</p>
                                            <p class="text-[0.75rem] text-[#8c9097] dark:text-white/50 opacity-[0.7] mb-0">
                                                I am <b class="text-defaulttextcolor">Sonya Taylor,</b> here by conclude that,i am the founder and managing director of the prestigeous company name laugh at all and acts as the cheif executieve officer of the company.
                                            </p>
                                        </div>
                                        <div class="mb-0">
                                            <p class="text-[.9375rem] mb-2 font-semibold">Links :</p>
                                            <div class="mb-0">
                                                <p class="mb-1">
                                                    <a href="https://www.linkedin.com/in/peter-samir-051403234//" class="text-primary"> 

                                                    linkedin 
                                                </a>
                                                </p>
                                                <p class="mb-0">
                                                    <a href="https://github.com/petrosam22?tab=repositories" class="text-primary"> github </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-6 border-b border-dashed dark:border-defaultborder/10">
                                        <p class="text-[.9375rem] mb-2 me-6 font-semibold">Contact Information :</p>
                                        <div class="text-[#8c9097] dark:text-white/50">
                                            <p class="mb-2">
                                                <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-[#8c9097] dark:text-white/50">
                                                    <i class="ri-mail-line align-middle text-[.875rem] text-[#8c9097] dark:text-white/50"></i>
                                                </span>
                                                {{auth()->user()->email}}
                                            </p>
                                            <p class="mb-2">
                                                <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-[#8c9097] dark:text-white/50">
                                                    <i class="ri-phone-line align-middle text-[.875rem] text-[#8c9097] dark:text-white/50"></i>
                                                </span>
                                             {{auth()->user()->phone}}
                                            </p>
                                            
                                        </div>
                                    </div>
                                 
                                    
                                    <div class="p-6 border-b dark:border-defaultborder/10 border-dashed">
                               <div class="flex justify-between">
                                    <div class="">

                                        <p class="text-[.9375rem] mb-2 me-6 font-semibold">Skills :</p>
                                    </div>

                                    <div>
                                    <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full !py-1 !px-2 !text-[0.75rem]" data-hs-overlay="#create-task">
                                  <a href="{{route('skills.create')}}">
                                    <i class="ri-add-line font-semibold align-middle"></i>
                                    </a>          
                                </button>


 
                                    </div>

                                    </div>

                                        <div>
                                        @foreach($skills as $skill)

                                             <a href="{{route('skills.editForm',['id'=>$skill->id])}}">

                                                <span class="badge bg-light text-[#8c9097] dark:text-white/50 m-1">
                                                    {{$skill->name}}                          
                                                <form action="{{route('skills.delete',['id'=>$skill->id])}}" method="post" class="m-0">
                                               @method('DELETE')
                                                @csrf 
                                                <button type="submit" class="hs-dropdown-toggle  ms-2 " >

                                                <i class="ri-delete-bin-3-line"></i>
                                                 </button>
                                                 </form>
                                             </span>

                                            </a>
                                            @endforeach

                                        </div>

                                    </div>
                                    
                                    <div class="p-6">
                                        <p class="text-[.9375rem] mb-2 me-6 font-semibold">Followers :</p>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <div class="sm:flex items-start">
                                                    <span class="avatar avatar-sm">
                                                        <img src="../assets/images/faces/1.jpg" alt="img" class="rounded-md">
                                                    </span>
                                                    <div class="sm:ms-2 ms-0 sm:mt-0 mt-1 font-semibold flex-grow">
                                                        <p class="mb-0 leading-none">Alicia Sierra</p>
                                                        <span class="text-[.6875rem] text-[#8c9097] dark:text-white/50 opacity-[0.7]">aliciasierra389@gmail.com</span>
                                                    </div>
                                                    <button type="button" class="ti-btn ti-btn-light !py-1 !px-2 !text-[0.75rem]">Follow</button>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="sm:flex items-start">
                                                    <span class="avatar avatar-sm">
                                                        <img src="../assets/images/faces/3.jpg" alt="img" class="rounded-md">
                                                    </span>
                                                    <div class="sm:ms-2 ms-0 sm:mt-0 mt-1 font-semibold flex-grow">
                                                        <p class="mb-0 leading-none">Samantha Mery</p>
                                                        <span class="text-[.6875rem] text-[#8c9097] dark:text-white/50 opacity-[0.7]">samanthamery@gmail.com</span>
                                                    </div>
                                                    <button type="button" class="ti-btn ti-btn-light !py-1 !px-2 !text-[0.75rem]">Follow</button>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="sm:flex items-start">
                                                    <span class="avatar avatar-sm">
                                                        <img src="../assets/images/faces/6.jpg" alt="img" class="rounded-md">
                                                    </span>
                                                    <div class="sm:ms-2 ms-0 sm:mt-0 mt-1 font-semibold flex-grow">
                                                        <p class="mb-0 leading-none">Juliana Pena</p>
                                                        <span class="text-[.6875rem] text-[#8c9097] dark:text-white/50 opacity-[0.7]">juliapena555@gmail.com</span>
                                                    </div>
                                                    <button type="button" class="ti-btn ti-btn-light !py-1 !px-2 !text-[0.75rem]">Follow</button>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="sm:flex items-start">
                                                    <span class="avatar avatar-sm">
                                                        <img src="../assets/images/faces/15.jpg" alt="img" class="rounded-md">
                                                    </span>
                                                    <div class="sm:ms-2 ms-0 sm:mt-0 mt-1 font-semibold flex-grow">
                                                        <p class="mb-0 leading-none">Adam Smith</p>
                                                        <span class="text-[.6875rem] text-[#8c9097] dark:text-white/50 opacity-[0.7]">adamsmith99@gmail.com</span>
                                                    </div>
                                                    <button type="button" class="ti-btn ti-btn-light !py-1 !px-2 !text-[0.75rem]">Follow</button>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="sm:flex items-start">
                                                    <span class="avatar avatar-sm">
                                                        <img src="../assets/images/faces/13.jpg" alt="img" class="rounded-md">
                                                    </span>
                                                    <div class="sm:ms-2 ms-0 sm:mt-0 mt-1 font-semibold flex-grow">
                                                        <p class="mb-0 leading-none">Farhaan Amhed</p>
                                                        <span class="text-[.6875rem] text-[#8c9097] dark:text-white/50 opacity-[0.7]">farhaanahmed989@gmail.com</span>
                                                    </div>
                                                    <button type="button" class="ti-btn ti-btn-light !py-1 !px-2 !text-[0.75rem]">Follow</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-8 xl:col-span-12 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                              
                                <div class="xl:col-span-4 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Personal Info
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <div class="flex flex-wrap items-center">
                                                        <div class="me-2 font-semibold">
                                                            Name :
                                                        </div>
                                                        <span class="text-[0.75rem] text-[#8c9097] dark:text-white/50">Sonya Taylor</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="flex flex-wrap items-center">
                                                        <div class="me-2 font-semibold">
                                                            Email :
                                                        </div>
                                                        <span class="text-[0.75rem] text-[#8c9097] dark:text-white/50">sonyataylor231@gmail.com</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="flex flex-wrap items-center">
                                                        <div class="me-2 font-semibold">
                                                            Phone :
                                                        </div>
                                                        <span class="text-[0.75rem] text-[#8c9097] dark:text-white/50">+(555) 555-1234</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="flex flex-wrap items-center">
                                                        <div class="me-2 font-semibold">
                                                            Designation :
                                                        </div>
                                                        <span class="text-[0.75rem] text-[#8c9097] dark:text-white/50">C.E.O</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="flex flex-wrap items-center">
                                                        <div class="me-2 font-semibold">
                                                            Age :
                                                        </div>
                                                        <span class="text-[0.75rem] text-[#8c9097] dark:text-white/50">28</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="flex flex-wrap items-center">
                                                        <div class="me-2 font-semibold">
                                                            Experience :
                                                        </div>
                                                        <span class="text-[0.75rem] text-[#8c9097] dark:text-white/50">10 Years</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-4 col-span-12">
                                    <div class="box">
                                        <div class="box-header flex justify-between">
                                            <div class="box-title">
                                                Recent Projects
                                            </div>
                                            <div>
                                                <span class="badge bg-primary/10 text-primary">Today</span>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex flex-wrap items-center">
                                                            <span class="avatar avatar-md me-4 !mb-0">
                                                                <img src="../assets/images/media/media-39.jpg" class="img-fluid !rounded-md" alt="..." >
                                                            </span>
                                                            <div class="flex-grow">
                                                                <p class="font-semibold mb-0">Animals</p>
                                                                <p class="mb-0 text-[0.75rem] profile-recent-posts text-truncate text-[#8c9097] dark:text-white/50">
                                                                    There are many variations of passages of Lorem Ipsum available
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex flex-wrap items-center">
                                                            <span class="avatar avatar-md me-4 !mb-0">
                                                                <img src="../assets/images/media/media-56.jpg" class="img-fluid !rounded-md" alt="..." >
                                                            </span>
                                                            <div class="flex-grow">
                                                                <p class="font-semibold mb-0">Travel</p>
                                                                <p class="mb-0 text-[0.75rem] profile-recent-posts text-truncate text-[#8c9097] dark:text-white/50">
                                                                    Latin words, combined with a handful of model sentence
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex flex-wrap items-center">
                                                            <span class="avatar avatar-md me-4 !mb-0">
                                                                <img src="../assets/images/media/media-54.jpg" class="img-fluid !rounded-md" alt="..." >
                                                            </span>
                                                            <div class="flex-grow">
                                                                <p class="font-semibold mb-0">Interior</p>
                                                                <p class="mb-0 text-[0.75rem] profile-recent-posts text-truncate text-[#8c9097] dark:text-white/50">
                                                                    Contrary to popular belief, Lorem Ipsum is not simply random
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex flex-wrap items-center">
                                                            <span class="avatar avatar-md me-4 !mb-0">
                                                                <img src="../assets/images/media/media-64.jpg" class="img-fluid !rounded-md" alt="..." >
                                                            </span>
                                                            <div class="flex-grow">
                                                                <p class="font-semibold mb-0">Nature</p>
                                                                <p class="mb-0 text-[0.75rem] profile-recent-posts text-truncate text-[#8c9097] dark:text-white/50">
                                                                    It is a long established fact that a reader will be distracted by the readable content
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-4 col-span-12">
                                    <div class="box">
                                        <div class="box-header flex justify-between">
                                            <div class="box-title">
                                                Courses
                                            </div>
                                            <div>
                                                <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] !font-medium ti-btn-success">View All</button>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <div class="flex items-center justify-between">
                                                        <div class="font-semibold flex items-center">
                                                            <span class="avatar avatar-xs me-2">
                                                                <img src="../assets/images/faces/15.jpg" alt="">
                                                            </span>Alister
                                                        </div>
                                                        <div>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-primary !mb-0">
                                                                <i class="ri-add-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="flex items-center justify-between">
                                                        <div class="font-semibold flex items-center">
                                                            <span class="avatar avatar-xs me-2">
                                                                <img src="../assets/images/faces/4.jpg" alt="">
                                                            </span>Samantha Sams
                                                        </div>
                                                        <div>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-primary !mb-0">
                                                                <i class="ri-add-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="flex items-center justify-between">
                                                        <div class="font-semibold flex items-center">
                                                            <span class="avatar avatar-xs me-2">
                                                                <img src="../assets/images/faces/11.jpg" alt="">
                                                            </span>Jason Mama
                                                        </div>
                                                        <div>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-primary !mb-0">
                                                                <i class="ri-add-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="flex items-center justify-between">
                                                        <div class="font-semibold flex items-center">
                                                            <span class="avatar avatar-xs me-2">
                                                                <img src="../assets/images/faces/5.jpg" alt="">
                                                            </span>Alicia Sierra
                                                        </div>
                                                        <div>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-primary !mb-0">
                                                                <i class="ri-add-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="flex items-center justify-between">
                                                        <div class="font-semibold flex items-center">
                                                            <span class="avatar avatar-xs me-2">
                                                                <img src="../assets/images/faces/7.jpg" alt="">
                                                            </span>Kiara Advain
                                                        </div>
                                                        <div>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-primary !mb-0">
                                                                <i class="ri-add-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->


                </div>
            </div>

            <!-- END MAIN-CONTENT -->


            @endsection
