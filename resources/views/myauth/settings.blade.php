@extends('mylayouts.main')

{{-- @push('css')
    <style>
        .pp-preview{
            height: 9rem;
            object-fit: cover;
        }
    </style>
@endpush

@section('content')
<div class="d-flex justify-content-between mb-3 align-items-center">
    <h4><strong>Profil</strong></h4>
    <a href="{{ route('profil.ubah-password') }}" class="btn btn-primary">Ubah Password</a>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-2">
                <div class="d-flex justify-content-center">
                    <img src="{{ Auth::user()->profil != '/img/profil.png' ? asset('storage/' . Auth::user()->profil) : asset('/img/profil.png') }}"
                        alt="user-avatar" class="d-block rounded w-100 pp-preview" id="uploadedAvatar" />
                </div>
            </div>
            <div class="col-md">
                <form method="POST" enctype="multipart/form-data" action="{{ route('profil.update') }}">
                    @csrf
                    @method('patch')
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input class="form-control" type="text" id="name" name="name"
                                value="{{ Auth::user()->profile_user->name }}"
                                autofocus />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" type="text" name="email" id="email"
                                value="{{ Auth::user()->email }}" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="foto" class="form-label">Foto Profil</label>
                            <input class="form-control input-pp" type="file" name="profil" id="foto"
                                accept="image/*" onchange="previewImageUpdate();" />
                        </div>
                        <div class="col-md-6 d-flex justify-content-end gap-2 align-items-center">
                            <button type="submit" class="btn btn-primary" style="height: fit-content;">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    function previewImageUpdate() {
        const pp_preview = document.querySelector('.pp-preview');
        const input = document.querySelector('.input-pp');

        pp_preview.style.display = 'block';

        var oFReader = new FileReader();
        oFReader.readAsDataURL(input.files[0]);

        oFReader.onload = function(oFREvent) {
            pp_preview.src = oFREvent.target.result;
        };
    };
</script>
@endpush --}}
@section('content')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Profile
    </h2>
</div>
<!-- BEGIN: Profile Info -->
<div class="intro-y box px-5 pt-5 mt-5">
    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
        <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
            <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ Auth::user()->profil != '/img/profil.png' ? asset('storage/' . Auth::user()->profil) : asset('/img/profil.png') }}">
           
            </div>
            
            <div class="ml-5">
                <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ Auth::user()->name }}</div>
                <div class="text-slate-500">Masukin Role Disini </div>
                <a href="{{ route('profil.edit') }}">
                    <button class="btn btn-primary w-24 mr-1 mt-2">Edit Profile</button> 
                </a>
             
            </div>
        </div>
        <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
            <div class="font-medium text-center lg:text-left lg:mt-3">Contact Details</div>
            <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                <div class="truncate sm:whitespace-normal flex items-center"> <i data-lucide="mail" class="w-4 h-4 mr-2"></i> {{ Auth::user()->email }} </div>

            </div>
        </div>
        
        
    </div>
  
    <ul class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist" >
        <li id="dashboard-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4 active" data-tw-target="#dashboard" aria-controls="dashboard" aria-selected="true" role="tab" > Dashboard </a> </li>

    </ul>
</div>
<!-- END: Profile Info -->
<div class="intro-y tab-content mt-5">
    <div id="dashboard" class="tab-pane active" role="tabpanel" aria-labelledby="dashboard-tab">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: Top Categories -->
            <div class="intro-y box col-span-12 lg:col-span-6">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Top Categories
                    </h2>
                    <div class="dropdown ml-auto">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                        <div class="dropdown-menu w-40">
                            <ul class="dropdown-content">
                                <li>
                                    <a href="" class="dropdown-item"> <i data-lucide="plus" class="w-4 h-4 mr-2"></i> Add Category </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Settings </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex flex-col sm:flex-row">
                        <div class="mr-auto">
                            <a href="" class="font-medium">Wordpress Template</a> 
                            <div class="text-slate-500 mt-1">HTML, PHP, Mysql</div>
                        </div>
                        <div class="flex">
                            <div class="w-32 -ml-2 sm:ml-0 mt-5 mr-auto sm:mr-5">
                                <div class="h-[30px]">
                                    <canvas class="simple-line-chart-1" data-random="true"></canvas>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="font-medium">6.5k</div>
                                <div class="bg-success/20 text-success rounded px-2 mt-1.5">+150</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row mt-5">
                        <div class="mr-auto">
                            <a href="" class="font-medium">Bootstrap HTML Template</a> 
                            <div class="text-slate-500 mt-1">HTML, PHP, Mysql</div>
                        </div>
                        <div class="flex">
                            <div class="w-32 -ml-2 sm:ml-0 mt-5 mr-auto sm:mr-5">
                                <div class="h-[30px]">
                                    <canvas class="simple-line-chart-1" data-random="true"></canvas>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="font-medium">2.5k</div>
                                <div class="bg-pending/10 text-pending rounded px-2 mt-1.5">+150</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row mt-5">
                        <div class="mr-auto">
                            <a href="" class="font-medium">Tailwind HTML Template</a> 
                            <div class="text-slate-500 mt-1">HTML, PHP, Mysql</div>
                        </div>
                        <div class="flex">
                            <div class="w-32 -ml-2 sm:ml-0 mt-5 mr-auto sm:mr-5">
                                <div class="h-[30px]">
                                    <canvas class="simple-line-chart-1" data-random="true"></canvas>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="font-medium">3.4k</div>
                                <div class="bg-primary/10 text-primary rounded px-2 mt-1.5">+150</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Top Categories -->
            <!-- BEGIN: Work In Progress -->
            <div class="intro-y box col-span-12 lg:col-span-6">
                <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Work In Progress
                    </h2>
                    <div class="dropdown ml-auto sm:hidden">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                        <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                            <ul class="dropdown-content">
                                <li> <a id="work-in-progress-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-new" class="dropdown-item" role="tab" aria-controls="work-in-progress-new" aria-selected="true">New</a> </li>
                                <li> <a id="work-in-progress-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a> </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="nav nav-link-tabs w-auto ml-auto hidden sm:flex" role="tablist" >
                        <li id="work-in-progress-new-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-5 active" data-tw-target="#work-in-progress-new" aria-controls="work-in-progress-new" aria-selected="true" role="tab" > New </a> </li>
                        <li id="work-in-progress-last-week-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-5" data-tw-target="#work-in-progress-last-week" aria-selected="false" role="tab" > Last Week </a> </li>
                    </ul>
                </div>
                <div class="p-5">
                    <div class="tab-content">
                        <div id="work-in-progress-new" class="tab-pane active" role="tabpanel" aria-labelledby="work-in-progress-new-tab">
                            <div>
                                <div class="flex">
                                    <div class="mr-auto">Pending Tasks</div>
                                    <div>20%</div>
                                </div>
                                <div class="progress h-1 mt-2">
                                    <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="flex">
                                    <div class="mr-auto">Completed Tasks</div>
                                    <div>2 / 20</div>
                                </div>
                                <div class="progress h-1 mt-2">
                                    <div class="progress-bar w-1/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="flex">
                                    <div class="mr-auto">Tasks In Progress</div>
                                    <div>42</div>
                                </div>
                                <div class="progress h-1 mt-2">
                                    <div class="progress-bar w-3/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <a href="" class="btn btn-secondary block w-40 mx-auto mt-5">View More Details</a> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Work In Progress -->
            <!-- BEGIN: Daily Sales -->
            <div class="intro-y box col-span-12 lg:col-span-6">
                <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Daily Sales
                    </h2>
                    <div class="dropdown ml-auto sm:hidden">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                        <div class="dropdown-menu w-40">
                            <ul class="dropdown-content">
                                <li>
                                    <a href="javascript:;" class="dropdown-item"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download Excel </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <button class="btn btn-outline-secondary hidden sm:flex"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download Excel </button>
                </div>
                <div class="p-5">
                    <div class="relative flex items-center">
                        <div class="w-12 h-12 flex-none image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-3.jpg">
                        </div>
                        <div class="ml-4 mr-auto">
                            <a href="" class="font-medium">{{ Auth::user()->name }}</a> 
                            <div class="text-slate-500 mr-5 sm:mr-5">Bootstrap 4 HTML Admin Template</div>
                        </div>
                        <div class="font-medium text-slate-600 dark:text-slate-500">+$19</div>
                    </div>
                    <div class="relative flex items-center mt-5">
                        <div class="w-12 h-12 flex-none image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                        </div>
                        <div class="ml-4 mr-auto">
                            <a href="" class="font-medium">John Travolta</a> 
                            <div class="text-slate-500 mr-5 sm:mr-5">Tailwind HTML Admin Template</div>
                        </div>
                        <div class="font-medium text-slate-600 dark:text-slate-500">+$25</div>
                    </div>
                    <div class="relative flex items-center mt-5">
                        <div class="w-12 h-12 flex-none image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-11.jpg">
                        </div>
                        <div class="ml-4 mr-auto">
                            <a href="" class="font-medium">Johnny Depp</a> 
                            <div class="text-slate-500 mr-5 sm:mr-5">Vuejs HTML Admin Template</div>
                        </div>
                        <div class="font-medium text-slate-600 dark:text-slate-500">+$21</div>
                    </div>
                </div>
            </div>
            <!-- END: Daily Sales -->
            <!-- BEGIN: Latest Tasks -->
            <div class="intro-y box col-span-12 lg:col-span-6">
                <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Latest Tasks
                    </h2>
                    <div class="dropdown ml-auto sm:hidden">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                        <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                            <ul class="dropdown-content">
                                <li> <a id="latest-tasks-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-new" class="dropdown-item" role="tab" aria-controls="latest-tasks-new" aria-selected="true">New</a> </li>
                                <li> <a id="latest-tasks-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a> </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="nav nav-link-tabs w-auto ml-auto hidden sm:flex" role="tablist" >
                        <li id="latest-tasks-new-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-5 active" data-tw-target="#latest-tasks-new" aria-controls="latest-tasks-new" aria-selected="true" role="tab" > New </a> </li>
                        <li id="latest-tasks-last-week-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-5" data-tw-target="#latest-tasks-last-week" aria-selected="false" role="tab" > Last Week </a> </li>
                    </ul>
                </div>
                <div class="p-5">
                    <div class="tab-content">
                        <div id="latest-tasks-new" class="tab-pane active" role="tabpanel" aria-labelledby="latest-tasks-new-tab">
                            <div class="flex items-center">
                                <div class="border-l-2 border-primary dark:border-primary pl-4">
                                    <a href="" class="font-medium">Create New Campaign</a> 
                                    <div class="text-slate-500">10:00 AM</div>
                                </div>
                                <div class="form-check form-switch ml-auto">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </div>
                            <div class="flex items-center mt-5">
                                <div class="border-l-2 border-primary dark:border-primary pl-4">
                                    <a href="" class="font-medium">Meeting With Client</a> 
                                    <div class="text-slate-500">02:00 PM</div>
                                </div>
                                <div class="form-check form-switch ml-auto">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </div>
                            <div class="flex items-center mt-5">
                                <div class="border-l-2 border-primary dark:border-primary pl-4">
                                    <a href="" class="font-medium">Create New Repository</a> 
                                    <div class="text-slate-500">04:00 PM</div>
                                </div>
                                <div class="form-check form-switch ml-auto">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Latest Tasks -->
            <!-- BEGIN: General Statistic -->
            <div class="intro-y box col-span-12">
                <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        General Statistics
                    </h2>
                    <div class="dropdown ml-auto sm:hidden">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                        <div class="dropdown-menu w-40">
                            <ul class="dropdown-content">
                                <li>
                                    <a href="javascript:;" class="dropdown-item"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download XML </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <button class="btn btn-outline-secondary hidden sm:flex"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download XML </button>
                </div>
                <div class="grid grid-cols-1 2xl:grid-cols-7 gap-6 p-5">
                    <div class="2xl:col-span-2">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="col-span-2 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500 p-5">
                                <div class="font-medium">Net Worth</div>
                                <div class="flex items-center mt-1 sm:mt-0">
                                    <div class="mr-4 w-20 flex"> USP: <span class="ml-3 font-medium text-success">+23%</span> </div>
                                    <div class="w-5/6 overflow-auto">
                                        <div class="h-[51px]">
                                            <canvas class="simple-line-chart-1" data-random="true"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500 p-5">
                                <div class="font-medium">Sales</div>
                                <div class="flex items-center mt-1 sm:mt-0">
                                    <div class="mr-4 w-20 flex"> USP: <span class="ml-3 font-medium text-danger">-5%</span> </div>
                                    <div class="w-5/6 overflow-auto">
                                        <div class="h-[51px]">
                                            <canvas class="simple-line-chart-1" data-random="true"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500 p-5">
                                <div class="font-medium">Profit</div>
                                <div class="flex items-center mt-1 sm:mt-0">
                                    <div class="mr-4 w-20 flex"> USP: <span class="ml-3 font-medium text-danger">-10%</span> </div>
                                    <div class="w-5/6 overflow-auto">
                                        <div class="h-[51px]">
                                            <canvas class="simple-line-chart-1" data-random="true"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500 p-5">
                                <div class="font-medium">Products</div>
                                <div class="flex items-center mt-1 sm:mt-0">
                                    <div class="mr-4 w-20 flex"> USP: <span class="ml-3 font-medium text-success">+55%</span> </div>
                                    <div class="w-5/6 overflow-auto">
                                        <div class="h-[51px]">
                                            <canvas class="simple-line-chart-1" data-random="true"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="2xl:col-span-5 w-full">
                        <div class="flex justify-center mt-8">
                            <div class="flex items-center mr-5">
                                <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                <span>Product Profit</span> 
                            </div>
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-slate-300 rounded-full mr-3"></div>
                                <span>Author Sales</span> 
                            </div>
                        </div>
                        <div class="mt-8">
                            <div class="h-[420px]">
                                <canvas id="stacked-bar-chart-1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: General Statistic -->
        </div>
    </div>
</div>
@endsection