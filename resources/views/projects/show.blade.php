@extends('layouts.dashboard');


@section('content');
<div class="content">
    <div class="main-content">

                
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold"> Projects Overview</h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                      <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                        Projects
                        <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                      </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 " aria-current="page">
                        Projects Overview
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-6">
                <div class="xl:col-span-9 col-span-12">
                    <div class="box custom-box">
                        <div class="box-header justify-between flex">
                            <div class="box-title">
                                Project Details
                            </div>
                            <div>
                                <a href="projects-create.html" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-secondary btn-wave"><i class="ri-add-line align-middle me-1 font-semibold"></i>Create Project</a>
                            </div>
                        </div>
                        <div class="box-body">
                            <h5 class="font-semibold mb-4 task-title">
                                Ynex new angular project.
                            </h5>
                            <div class="text-[.9375rem] font-semibold mb-2">Project Description :</div>
                            <p class="text-[#8c9097] dark:text-white/50 task-description">The current website design needs a refresh to improve user experience and enhance visual appeal. The goal is to create a modern and responsive design that aligns with the latest web design trends. The updated design should ensure seamless navigation, easy readability, and a cohesive visual identity.</p>
                            <div class="text-[.9375rem] font-semibold mb-2">Key tasks :</div>
                            <div class="mb-3">
                                <ul class="task-details-key-tasks ps-[2rem] mb-0">
                                    <li>Conducting a comprehensive analysis of the existing website design.</li>
                                    <li>Collaborating with the UI/UX team to develop wireframes and mockups.</li>
                                    <li>Iteratively refining the design based on feedback.</li>
                                    <li>Implementing the finalized design changes using HTML, CSS, and JavaScript.</li>
                                    <li>Testing the website across different devices and browsers.</li>
                                    <li>Conducting a final review to ensure all design elements are consistent and visually appealing.</li>
                                </ul>
                            </div>
                            <div class="text-[.9375rem] font-semibold mb-2">Skills :</div>
                            <div>
                                <span class="badge bg-light text-default">UI/Ux</span>
                                <span class="badge bg-light text-default">JavaScript</span>
                                <span class="badge bg-light text-default">Responsive Design</span>
                                <span class="badge bg-light text-default">Web Accessibility</span>
                                <span class="badge bg-light text-default">Front-End Build Tools</span>
                                <span class="badge bg-light text-default">RESTful APIs</span>
                                <span class="badge bg-light text-default">Performance Testing</span>
                                <span class="badge bg-light text-default">Angular</span>
                                <span class="badge bg-light text-default">Vue.js</span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="flex items-center justify-between gap-2 flex-wrap">
                                <div>
                                    <span class="block text-[#8c9097] dark:text-white/50 text-[0.75rem]">Project Manager</span>
                                    <div class="flex items-center">
                                        <div class="me-2 leading-none">
                                            <span class="avatar avatar-xs !rounded-full">
                                                <img src="../assets/images/faces/13.jpg" alt="">
                                            </span>
                                        </div>
                                        <span class="block text-[.875rem] font-semibold">S.K.Jacob</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="block text-[#8c9097] dark:text-white/50 text-[0.75rem]">Start Date</span>
                                    <span class="block text-[.875rem] font-semibold">22,June 2023</span>
                                </div>
                                <div>
                                    <span class="block text-[#8c9097] dark:text-white/50 text-[0.75rem]">End Date</span>
                                    <span class="block text-[.875rem] font-semibold">10,July 2023</span>
                                </div>
                                <div>
                                    <span class="block text-[#8c9097] dark:text-white/50 text-[0.75rem]">Assigned To</span>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm !rounded-full">
                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm !rounded-full">
                                            <img src="../assets/images/faces/8.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm !rounded-full">
                                            <img src="../assets/images/faces/5.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm !rounded-full">
                                            <img src="../assets/images/faces/10.jpg" alt="img">
                                        </span>
                                    </div>
                                </div>
                                <div>
                                    <span class="block text-[#8c9097] dark:text-white/50 text-[0.75rem]">Status</span>
                                    <span class="block"><span class="badge bg-primary/10 text-primary">In Progress</span></span>
                                </div>
                                <div>
                                    <span class="block text-[#8c9097] dark:text-white/50 text-[0.75rem]">Priority</span>
                                    <span class="block text-[.875rem] font-semibold"><span class="badge bg-success/10 text-success">Low</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box custom-box">
                        <div class="box-header">
                            <div class="box-title">Project Discussions</div>
                        </div>
                        <div class="box-body">
                            <ul class="list-unstyled profile-timeline">
                                <li>
                                    <div>
                                        <span class="avatar avatar-sm bg-primary/10 !text-primary !rounded-full profile-timeline-avatar">
                                            E
                                        </span>
                                        <p class="mb-2">
                                            <b>You</b> Commented on <b>Work Process</b> in this project <a class="text-secondary" href="javascript:void(0);"><u>#New Project</u></a>.<span class="float-end text-[0.6875rem] text-[#8c9097] dark:text-white/50">24,Dec 2023 - 14:34</span>
                                        </p>
                                        <p class="text-[#8c9097] dark:text-white/50 mb-0">
                                            Project is important and need to be completed on time to meet company work flow.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span class="avatar avatar-sm  profile-timeline-avatar">
                                            <img src="../assets/images/faces/11.jpg" alt="" class="!rounded-full">
                                        </span>
                                        <p class="text-[#8c9097] dark:text-white/50 mb-2">
                                            <span class="text-default"><b>Json Smith</b> reacted to the project 👍</span>.<span class="float-end text-[0.6875rem] text-[#8c9097] dark:text-white/50">18,Dec 2023 - 12:16</span>
                                        </p>
                                        <p class="text-[#8c9097] dark:text-white/50 mb-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, repellendus rem rerum excepturi aperiam ipsam temporibus inventore ullam tempora eligendi libero sequi dignissimos cumque, et a sint tenetur consequatur omnis!
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span class="avatar avatar-sm  profile-timeline-avatar">
                                            <img src="../assets/images/faces/4.jpg" alt="" class="!rounded-full">
                                        </span>
                                        <p class="text-[#8c9097] dark:text-white/50 mb-2">
                                            <span class="text-default"><b>Alicia Keys</b> shared a document with <b>you</b></span>.<span class="float-end text-[0.6875rem] text-[#8c9097] dark:text-white/50">21,Dec 2023 - 15:32</span>
                                        </p>
                                        <p class="profile-activity-media flex items-center mb-0">
                                            <a aria-label="anchor" href="javascript:void(0);">
                                                <img src="../assets/images/media/file-manager/3.png" alt="">
                                            </a>
                                                <span class="text-[.6875rem] text-[#8c9097] dark:text-white/50">432.87KB</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span class="avatar avatar-sm bg-success/10 !text-success !rounded-full profile-timeline-avatar">
                                            P
                                        </span>
                                        <p class="text-[#8c9097] dark:text-white/50 mb-2 text-truncate">
                                            <span class="text-default"><b>You</b> shared a post with 4 people <b>Simon,Sasha,Anagha,Hishen</b></span>.<span class="float-end text-[0.6875rem] text-[#8c9097] dark:text-white/50">28,Dec 2023 - 18:46</span>
                                        </p>
                                        <p class="profile-activity-media mb-2">
                                            <a aria-label="anchor" href="javascript:void(0);">
                                                <img src="../assets/images/media/media-18.jpg" alt="">
                                            </a>
                                        </p>
                                        <div>
                                            <div class="avatar-list-stacked">
                                                <span class="avatar avatar-sm !rounded-full">
                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                </span>
                                                <span class="avatar avatar-sm !rounded-full">
                                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                                </span>
                                                <span class="avatar avatar-sm !rounded-full">
                                                    <img src="../assets/images/faces/5.jpg" alt="img">
                                                </span>
                                                <span class="avatar avatar-sm !rounded-full">
                                                    <img src="../assets/images/faces/10.jpg" alt="img">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span class="avatar avatar-sm profile-timeline-avatar">
                                            <img src="../assets/images/media/media-39.jpg" alt="" class="!rounded-full">
                                        </span>
                                        <p class="mb-1">
                                            <b>Json</b> Commented on Project <a class="text-secondary" href="javascript:void(0);"><u>#UI Technologies</u></a>.<span class="float-end text-[0.6875rem] text-[#8c9097] dark:text-white/50">24,Dec 2023 - 14:34</span>
                                        </p>
                                        <p class="text-[#8c9097] dark:text-white/50">Technology id developing rapidly keep up your work 👌</p>
                                        <p class="profile-activity-media flex items-center mb-0">
                                            <a aria-label="anchor" href="javascript:void(0);">
                                                <img src="../assets/images/media/media-26.jpg" alt="">
                                            </a>
                                            <a aria-label="anchor" href="javascript:void(0);">
                                                <img src="../assets/images/media/media-29.jpg" alt="">
                                            </a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="box-footer">
                            <div class="list-group-item">
                                <div class="sm:flex items-center leading-none">
                                    <div class="me-4">
                                        <span class="avatar avatar-md ">
                                            <img src="../assets/images/faces/9.jpg" alt="" class="!rounded-full">
                                        </span>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="inline-flex !w-full">
                                            <input type="text" class="form-control !w-full !rounded-e-none" placeholder="Post Anything" aria-label="Recipient's username with two button addons">
                                            <button aria-label="button" type="button" class="!hidden sm:!flex ti-btn ti-btn-light !rounded-none !mb-0"><i class="bi bi-emoji-smile"></i></button>
                                            <button aria-label="button" type="button" class="!hidden sm:!flex ti-btn ti-btn-light !rounded-none !mb-0"><i class="bi bi-paperclip"></i></button>
                                            <button aria-label="button" type="button" class="!hidden sm:!flex ti-btn ti-btn-light !rounded-none !mb-0"><i class="bi bi-camera"></i></button>
                                            <button class="ti-btn bg-primary text-white !mb-0 !rounded-s-none" type="button">Post</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



  


                <div class="xl:col-span-3 col-span-12">
                    <div class="box custom-box">
                        <div class="box-header justify-between">
                            <div class="box-title">
                                Project Team
                            </div>
                            <div>
                                <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary !text-[0.75rem] !py-1 !px-2" data-hs-overlay="#hs-vertically-centered-modal"><i class="ri-add-line align-middle me-1 font-semibold"></i>Add Member</button>
                        </div>

                            
                            
                            </div>
                        <div class="box-body !p-0">
                            <div class="table-responsive rounded-b-lg">
                                <table class="table whitespace-nowrap min-w-full">
                                    <thead>
                                        <tr>
                                            <th scope="row" class="text-start">Name</th>
                                            <th scope="row" class="text-start">Designation</th>
                                            <th scope="row" class="text-start">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-y border-defaultborder">
                                            <td>
                                                <div class="flex items-center">
                                                    <div class="me-2 leading-none">
                                                        <span class="avatar avatar-sm ">
                                                            <img src="../assets/images/faces/2.jpg" alt="" class="!rounded-full">
                                                        </span>
                                                    </div>
                                                    <div class="font-semibold">Simon Conway</div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-primary/10 text-primary">UI Developer</span>
                                            </td>
                                            <td>
                                                <div class="inline-flex">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-info me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-y border-defaultborder">
                                            <td>
                                                <div class="flex items-center">
                                                    <div class="me-2 leading-none">
                                                        <span class="avatar avatar-sm !rounded-full">
                                                            <img src="../assets/images/faces/8.jpg" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="font-semibold">Sasha Banks</div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-pink/10 text-pink">Ui Designer</span>
                                            </td>
                                            <td>
                                                <div class="inline-flex">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-info me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-y border-defaultborder">
                                            <td>
                                                <div class="flex items-center">
                                                    <div class="me-2 leading-none">
                                                        <span class="avatar avatar-sm !rounded-full">
                                                            <img src="../assets/images/faces/5.jpg" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="font-semibold">Anagha May</div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-warning/10 text-warning">UI Tester</span>
                                            </td>
                                            <td>
                                                <div class="inline-flex">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-info me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-defaultborder">
                                            <td>
                                                <div class="flex items-center">
                                                    <div class="me-2 leading-none">
                                                        <span class="avatar avatar-sm !rounded-full">
                                                            <img src="../assets/images/faces/10.jpg" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="font-semibold">Hishen Stuart</div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-success/10 text-success">Angular Developer</span>
                                            </td>
                                            <td>
                                                <div class="inline-flex">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-info me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="box custom-box">
                        <div class="box-header justify-between">
                            <div class="box-title">Project Goals</div>
                            <div class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-light btn-wave"><i class="ri-add-line align-middle me-1 font-semibold"></i>Add Goal</div>
                        </div>
                        <div class="box-body">
                            <ul class="list-group ">
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="me-2"><input class="form-check-input form-checked-success" type="checkbox" value="" id="successChecked1" checked></div>
                                        <div class="font-semibold">Increase Efficiency</div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="me-2"><input class="form-check-input form-checked-success" type="checkbox" value="" id="successChecked2"></div>
                                        <div class="font-semibold">Enhance Customer Satisfaction</div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="me-2"><input class="form-check-input form-checked-success" type="checkbox" value="" id="successChecked3"></div>
                                        <div class="font-semibold">Expand Market Reach</div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="me-2"><input class="form-check-input form-checked-success" type="checkbox" value="" id="successChecked4"></div>
                                        <div class="font-semibold">Improve Profitability</div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="me-2"><input class="form-check-input form-checked-success" type="checkbox" value="" id="successChecked5" checked></div>
                                        <div class="font-semibold">Enhance Product/Service Quality</div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="me-2"><input class="form-check-input form-checked-success" type="checkbox" value="" id="successChecked6" checked></div>
                                        <div class="font-semibold">Develop Innovative Solutions</div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="me-2"><input class="form-check-input form-checked-success" type="checkbox" value="" id="successChecked7" checked></div>
                                        <div class="font-semibold">Increase Employee Engagement</div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="me-2"><input class="form-check-input form-checked-success" type="checkbox" value="" id="successChecked8"></div>
                                        <div class="font-semibold">Enhance Brand Reputation</div>
                                    </div>
                                </li>
                            </ul>
                            <div class="mt-4 text-center">
                                <button type="button" class="ti-btn ti-btn-success-full btn-wave">View All</button>
                            </div>
                        </div>
                    </div>
                    <div class="box custom-box overflow-hidden">
                        <div class="box-header">
                            <div class="box-title">
                                Project Documents
                            </div>
                        </div>
                        <div class="box-body !p-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item !border-0">
                                    <div class="flex items-center">
                                        <div class="me-2">
                                            <span class="avatar !rounded-full p-2 bg-light">
                                                <img src="../assets/images/media/file-manager/1.png" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-grow">
                                            <a href="javascript:void(0);"><span class="block font-semibold">Full Project</span></a>
                                            <span class="block text-[#8c9097] dark:text-white/50 text-[0.75rem] font-normal">0.45MB</span>
                                        </div>
                                        <div class="inline-flex">
                                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-info me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-danger"><i class="ri-delete-bin-line"></i></button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item !border-x-0">
                                    <div class="flex items-center">
                                        <div class="me-2 leading-none">
                                            <span class="avatar !rounded-full bg-light">
                                                <img src="../assets/images/media/file-manager/3.png" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-grow">
                                            <a href="javascript:void(0);"><span class="block font-semibold">assets.zip</span></a>
                                            <span class="block text-[#8c9097] dark:text-white/50 text-[0.75rem] font-normal">0.99MB</span>
                                        </div>
                                        <div class="inline-flex">
                                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-info me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-danger"><i class="ri-delete-bin-line"></i></button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item !border-x-0">
                                    <div class="flex items-center">
                                        <div class="me-2 leading-none">
                                            <span class="avatar !rounded-full p-2 bg-light">
                                                <img src="../assets/images/media/file-manager/1.png" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-grow">
                                            <a href="javascript:void(0);"><span class="block font-semibold">image-1.png</span></a>
                                            <span class="block text-[#8c9097] dark:text-white/50 text-[0.75rem] font-normal">245KB</span>
                                        </div>
                                        <div class="inline-flex">
                                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-info me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-danger"><i class="ri-delete-bin-line"></i></button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item !border-x-0">
                                    <div class="flex items-center">
                                        <div class="me-2 leading-none">
                                            <span class="avatar !rounded-full bg-light">
                                                <img src="../assets/images/media/file-manager/3.png" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-grow">
                                            <a href="javascript:void(0);"><span class="block font-semibold">doc.zip</span></a>
                                            <span class="block text-[#8c9097] dark:text-white/50 text-[0.75rem] font-normal">2MB</span>
                                        </div>
                                        <div class="inline-flex">
                                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-info me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-danger"><i class="ri-delete-bin-line"></i></button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item !border-x-0 !border-b-0">
                                    <div class="flex items-center">
                                        <div class="me-2 leading-none">
                                            <span class="avatar !rounded-full bg-light">
                                                <img src="../assets/images/media/file-manager/3.png" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-grow">
                                            <a href="javascript:void(0);"><span class="block font-semibold">landing.zip</span></a>
                                            <span class="block text-[#8c9097] dark:text-white/50 text-[0.75rem] font-normal">3.46MB</span>
                                        </div>
                                        <div class="inline-flex">
                                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-info me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-danger"><i class="ri-delete-bin-line"></i></button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End::row-1 -->


    </div>


    <div id="hs-vertically-centered-modal" class="hs-overlay hidden ti-modal">
                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">
                                                  <div class="ti-modal-content w-full">
                                                    <div class="ti-modal-header">
                                                        <h6 class="modal-title" id="staticBackdropLabel2">Create Team
                                                        </h6>
                                                      <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-vertically-centered-modal">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                        </svg>
                                                      </button>
                                                    </div>
                                             
                                                    <form method="GET" >
                                                    <div class="ti-modal-body px-4">
                                                        <div class="gridgrid-cols-12 gap-4">
                                                            <div class="xl:col-span-12 col-span-12">
                                                                <label for="team-name" class="form-label">Member Name</label>
                                                                <input type="text" class="form-control" id="team-name" placeholder="Enter Name">
                                                            </div>
                                                            <div class="xl:col-span-12 col-span-12 mt-2">
                                                                <label class="form-label">Role</label>
                                                                <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                                                    <option value="10" selected>Member</option>
                                                                    <option value="20">Project manager</option>
                                                                    <option value="30">Client</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ti-modal-footer">
                                                      <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-light" data-hs-overlay="#hs-vertically-centered-modal">
                                                    Cancel
                                                      </button>
                                                      <a class="ti-btn ti-btn-primary-full" href="javascript:void(0);">
                                                      create
                                                      </a>
                                                    </div>
                                                    </form>
                                                    </div>




</div>

<!-- END MAIN-CONTENT -->

  


@endsection

                                   
                                         