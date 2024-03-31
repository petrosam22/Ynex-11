@extends('layouts.dashboard');

@section('content');


<div class="content">
                <div class="main-content">
            
                    
                        <!-- Page Header -->
                        <div class="block justify-between page-header md:flex">
                            <div>
                                <h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold"> Wallet Create </h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[0.813rem] ps-[0.5rem]">
                                  <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                  Wallets
                                    <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                  </a>
                                </li>
                                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 " aria-current="page">
                                Wallets Create
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
                                            Create Wallet
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="grid grid-cols-12 gap-4">
                                             
                                         

                                            <div class="xl:col-span-6 col-span-12">
                                                <label class="form-label">Wallet Name :</label>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-text text-muted !border-e-0"> 
                                                            <i class="ri-wallet-3-line"></i> </div>
                                                        <input type="text" class="form-control" id="startDate" placeholder="Choose Wallet Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label class="form-label">Date :</label>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-text text-muted !border-e-0"> <i class="ri-calendar-line"></i> </div>
                                                        <input type="text" class="form-control" id="endDate" placeholder="Choose date and time">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label class="form-label">Coin :</label>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-text text-muted !border-e-0"> 
                                                            
                                                        <i class="ri-coins-fill"></i> 
                                                    
                                                    </div>
                                                        <input type="text" class="form-control" id="endDate" placeholder="Choose Coin">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="xl:col-span-6 col-span-12">
                                                <label class="form-label">Balance :</label>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-text text-muted !border-e-0"> 
                                                            <i class="ri-coins-fill"></i> </div>
                                                        <input type="text" class="form-control" id="endDate" placeholder="Choose Balance">
                                                    </div>
                                                </div>
                                            </div>


                                            
                                             
                                             
                                            <div class="xl:col-span-12 col-span-12">
                                                <label class="form-label">Attachments</label>
                                                <input type="file" class="multiple-filepond" name="filepond" id="file-input" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="button" class="ti-btn ti-btn-primary btn-wave ms-auto float-right">Create Wallet</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::row-1 -->


                </div>
            </div>

            <!-- END MAIN-CONTENT -->


 

 
@endsection