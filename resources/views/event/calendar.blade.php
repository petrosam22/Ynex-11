@extends('layouts.dashboard');


@section('content');

            <!-- MAIN-CONTENT -->
            <div class="content">
                <div class="main-content">
            
                     
                  <!-- Page Header -->
                  <div class="block justify-between page-header md:flex">
                      <div>
                          <h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold"> Full Calendar</h3>
                      </div>
                      <ol class="flex items-center whitespace-nowrap min-w-0">
                          <li class="text-[0.813rem] ps-[0.5rem]">
                            <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                              Apps
                              <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                            </a>
                          </li>
                          <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 " aria-current="page">
                              Full Calendar
                          </li>
                      </ol>
                  </div>
                  <!-- Page Header Close -->

                  <!-- Start::row-1 -->
                  <div class="grid grid-cols-12 gap-6">
                      <div class="xl:col-span-3 col-span-12">
                          <div class="box custom-box">
                              <div class="py-4 px-[1.25rem] border-b dark:border-defaultborder/10  !grid">
                                  <button type="button" class="ti-btn ti-btn-primary" data-hs-overlay="#create-task">
                                    <i class="ri-add-line align-middle me-1 font-semibold inline-block"></i>Create New Event</button>
                              </div>
                              <div id="create-task" class="hs-overlay hidden ti-modal">
                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">
                                  <div class="ti-modal-content">
                                    <div class="ti-modal-header">
                                        <h6 class="modal-title" id="staticBackdropLabel2">Add Task
                                        </h6>
                                      <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#create-task">
                                        <span class="sr-only">Close</span>
                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                        </svg>
                                      </button>
                                    </div>
                                    <div class="ti-modal-body">
                                        <div class="grid grid-cols-12 gap-2">
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="task-name" class="form-label">Task Name</label>
                                                <input type="text" class="form-control" id="task-name" placeholder="Task Name">
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="task-id" class="form-label">Task ID</label>
                                                <input type="text" class="form-control" id="task-id" placeholder="Task ID">
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label class="form-label">Assigned Date</label>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                        <input type="text" class="form-control" id="assignedDate" placeholder="Choose date and time">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label class="form-label">Due Date</label>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                        <input type="text" class="form-control" id="dueDate" placeholder="Choose date and time">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label class="form-label">Status</label>
                                                <select class="form-control" data-trigger id="choices-single-default">
                                                    <option value="New">New</option>
                                                    <option value="Completed">Completed</option>
                                                    <option value="Inprogress">Inprogress</option>
                                                    <option value="Pending">Pending</option>
                                                </select>
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label class="form-label">Priority</label>
                                                <select class="form-control" data-trigger id="choices-single-default1">
                                                    <option value="High">High</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="Low">Low</option>
                                                </select>
                                            </div>
                                            <div class="xl:col-span-12 col-span-12">
                                                <label class="form-label">Assigned To</label>
                                                <select class="form-control" name="choices-multiple-remove-button1" id="choices-multiple-remove-button1" multiple>
                                                    <option value="Choice 1">Angelina May</option>
                                                    <option value="Choice 2">Kiara advain</option>
                                                    <option value="Choice 3">Hercules Jhon</option>
                                                    <option value="Choice 4">Mayor Kim</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ti-modal-footer">
                                      <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-light" data-hs-overlay="#create-task">
                                        Cancel
                                      </button>
                                      <a class="ti-btn ti-btn-primary-full" href="javascript:void(0);">
                                        Add Task
                                      </a>
                                    </div>
                                  </div>
                                </div>
                            </div>

                              <div class="box-body !p-0">
                                  <div id="external-events" class="border-b dark:border-defaultborder/10 p-4">
                                      <div
                                        class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event !bg-primary border !border-primary">
                                        <div class="fc-event-main">Calendar Events</div>
                                      </div>
                                      <div
                                        class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event !bg-secondary border !border-secondary"
                                        data-class="bg-secondary">
                                        <div class="fc-event-main">Birthday EVents</div>
                                      </div>
                                      <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event !bg-success border !border-success"
                                        data-class="bg-success">
                                        <div class="fc-event-main">Holiday Calendar</div>
                                      </div>
                                      <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event !bg-info border !border-info"
                                        data-class="bg-info">
                                        <div class="fc-event-main">Office Events</div>
                                      </div>
                                      <div
                                        class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event !bg-warning border !border-warning"
                                        data-class="bg-warning">
                                        <div class="fc-event-main">Other Events</div>
                                      </div>
                                      <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event !bg-danger border !border-danger"
                                        data-class="bg-danger">
                                        <div class="fc-event-main">Festival Events</div>
                                      </div>
                                      <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event !bg-teal border !border-teal"
                                        data-class="bg-danger">
                                        <div class="fc-event-main">Timeline Events</div>
                                      </div>
                                  </div>
                                  <div class="p-4 border-b dark:border-defaultborder/10 ">
                                    <div class="flex items-center mb-4 justify-between">
                                      <h6 class="font-semibold">
                                        Activity :
                                      </h6>
                                      <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary btn-wave">View All</button>
                                    </div>
                                    <ul class="list-none mb-0 fullcalendar-events-activity" id="full-calendar-activity">
                                      <li>
                                        <div class="flex items-center justify-between flex-wrap">
                                          <p class="mb-1 font-semibold">
                                            Monday, Jan 1,2023
                                          </p>
                                          <span class="badge bg-light text-default mb-1">12:00PM - 1:00PM</span>
                                        </div>
                                        <p class="mb-0 text-mutedtext-[0.75rem]">
                                          Meeting with a client about new project requirement.
                                        </p>
                                      </li>
                                      <li>
                                        <div class="flex items-center justify-between flex-wrap">
                                          <p class="mb-1 font-semibold">
                                            Thursday, Dec 29,2022
                                          </p>
                                          <span class="badge bg-success text-white mb-1">Completed</span>
                                        </div>
                                        <p class="mb-0 text-muted text-[0.75rem]">
                                          Birthday party of niha suka
                                        </p>
                                      </li>
                                      <li>
                                        <div class="flex items-center justify-between flex-wrap">
                                          <p class="mb-1 font-semibold">
                                            Wednesday, Jan 3,2023
                                          </p>
                                          <span class="badge bg-warning/10 text-warning mb-1">Reminder</span>
                                        </div>
                                        <p class="mb-0 text-mutedtext-[0.75rem]">
                                          WOrk taget for new project is completing
                                        </p>
                                      </li>
                                      <li>
                                        <div class="flex items-center justify-between flex-wrap">
                                          <p class="mb-1 font-semibold">
                                            Friday, Jan 20,2023
                                          </p>
                                          <span class="badge bg-light text-default mb-1">06:00PM - 09:00PM</span>
                                        </div>
                                        <p class="mb-0 text-mutedtext-[0.75rem]">
                                          Watch new movie with family
                                        </p>
                                      </li>
                                      <li>
                                        <div class="flex items-center justify-between flex-wrap">
                                          <p class="mb-1 font-semibold">
                                            Saturday, Jan 07,2023
                                          </p>
                                          <span class="badge bg-danger/10 text-danger mb-1">Due Date</span>
                                        </div>
                                        <p class="mb-0 text-muted text-[0.75rem]">
                                          Last day to pay the electricity bill and water bill.need to check the bank details.
                                        </p>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="p-4">
                                    <img src="https://php.spruko.com/tailwind/ynex/ynex/assets/images/media/media-83.svg" alt="">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="xl:col-span-9 col-span-12">
                          <div class="box custom-box">
                              <div class="box-header">
                                  <div class="box-title">Full Calendar</div>
                              </div>
                              <div class="box-body">
                                  <div id="calendar2"></div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--End::row-1 -->


                </div>
            </div>

            <!-- END MAIN-CONTENT -->

@endsection