@extends('layouts.dashboard');


@section('content');

<div class="content">
    <div class="main-content">


            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold"> Status Edit </h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                      <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                        Status
                        <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                      </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 " aria-current="page">
                        Status Edit
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
                                Edit Status
                            </div>
                        </div>
                        <form action="{{ route('status.update',['id'=>$status->id]) }}" method="POST">
                            @method('PUT')
                            @csrf
                        <div class="box-body">
                            <div class="py-3 grid grid-cols-12 gap-4 ">
                                <div class="xl:col-span-6 col-span-12">
                                    <label for="input-label" class="form-label">Status Name :</label>
                                    <input type="text" name="name" value="{{ $status->name }}" class="form-control" id="input-label" placeholder="Enter Project Name">
                                </div>




                                <div class="xl:col-span-6 col-span-12">
                                    <label for="input-label1" class="form-label">Model :</label>
                                    <input type="text" name="model" value="{{ $status->model }}" class="form-control" placeholder="Enter Progress">
                                </div>

                        </div>
                        <div class="box-footer">
                            <button type="submit" class="ti-btn ti-btn-primary btn-wave ms-auto float-right">Create Status</button>
                        </div>
                    </div>

                </form>
                </div>
            </div>
            <!--End::row-1 -->


    </div>
</div>

@endsection
