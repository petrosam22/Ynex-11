@extends('layouts.dashboard');


@section('content');
<div class="content">
    <div class="main-content">

        
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold"> Skills Create </h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                      <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                      Skills
                        <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                      </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 " aria-current="page">
                    Skills Create
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-6">
                <div class="xl:col-span-12 col-span-12">
                    <form action="{{route('skills.store')}}" method="post">
                    @csrf
                    <div class="box custom-box">
                        <div class="box-header">
                            <div class="box-title">
                                Create Skills
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="grid grid-cols-12 gap-4">
                                <div class="xl:col-span-4 col-span-12">
                                    <label for="input-label" class="form-label">Skills Name :</label>
                                    <input type="text" class="form-control" name="name" id="input-label" placeholder="Enter Skills Name">
                                    @error('name') <span class="text-danger">{{$message}}</span> @enderror

                                </div>
 
                                <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}" id="input-label" >

                               
                                
                            
                                
                                 
                          
                            

                             

                        </div>
                        <div class="box-footer">
                            <button type="submit" class="ti-btn ti-btn-primary btn-wave ms-auto float-right">Create Skills</button>
                        </div>
                    </div>
                </div>

</form>
            </div>
            <!--End::row-1 -->


    </div>
</div>

<!-- END MAIN-CONTENT -->





@endsection