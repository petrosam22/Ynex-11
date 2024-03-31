@extends('layouts.dashboard');


@section('content');
<div class="content">
    <div class="main-content">

        
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold"> Teams Create </h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                      <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                        Teams
                        <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                      </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 " aria-current="page">
                     Teams Create
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-6">
                <div class="xl:col-span-12 col-span-12">
                    <div class="box custom-box">
                        <div class="box-header">
                            <div class="box-title">
                                Create Team
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="grid grid-cols-12 gap-4">
                                <div class="xl:col-span-6 col-span-12">
                                    <label for="input-label" class="form-label">Team Name :</label>
                                    <input type="text" class="form-control" id="input-label" placeholder="Enter Project Name">
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <label class="form-label">Status :</label>
                                    <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                        <option value="Inprogress">Inprogress</option>
                                        <option value="On-hold">On-hold</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div>


                                <div class="xl:col-span-12 col-span-12 mb-4">
                                    <label class="form-label">Team Description :</label>
                                    <div  id="project-descriptioin-editor">
                                        <p>lorem Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33.</p>
                                        <p><br></p>
                                        <ol>
                                            <li class="ql-size-normal">Conducting a comprehensive analysis of the existing website design.</li>
                                            <li class="">Collaborating with the UI/UX team to develop wireframes and mockups.</li>
                                            <li class="">Iteratively refining the design based on feedback..</li>
                                            <li class="">Implementing the finalized design changes using HTML, CSS, and JavaScript.</li>
                                            <li class="">Testing the website across different devices and browsers.</li>
                                        </ol>
                                    </div>
                                </div>

                                <div class="xl:col-span-6 col-span-12">
                                    <label class="form-label">Start Date :</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-muted !border-e-0"> <i class="ri-calendar-line"></i> </div>
                                            <input type="text" class="form-control" id="startDate" placeholder="Choose date and time">
                                        </div>
                                    </div>
                                </div>
                                 
                               
                                <div class="xl:col-span-6 col-span-12">
                                    <label class="form-label">Limit :</label>
                                    <select class="form-control" data-trigger name="choices-single-default2" id="assigned-team-members">
                                        <option value="High">10</option>
                                        <option value="Medium">20</option>
                                        <option value="Low">30</option>
                                    </select>
                                </div>
                                
                                 
                               
                                
                            
                           

                            <div class="xl:col-span-6 col-span-12">
                                <label for="input-label1" class="form-label">Attachments :</label>
                                <input type="file" class="form-control" placeholder="Uplad Attachments">
                            </div>


                        </div>
                        <div class="box-footer">
                            <button type="button" class="ti-btn ti-btn-primary btn-wave ms-auto float-right">Create Team</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--End::row-1 -->


    </div>
</div>

<!-- END MAIN-CONTENT -->





@endsection