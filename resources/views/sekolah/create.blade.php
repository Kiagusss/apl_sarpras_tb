@extends('mylayouts.main')
    @push('css')
        <style>
              .hidden {
            display: none;
        }
        </style>
    @endpush
@section('content')
<div class="card">
    <div class="card-body">
        <div class="grid gap-6">
            <!-- END: Profile Menu -->
            <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
                <!-- BEGIN: Personal Information -->
                <div class="intro-y box mt-5">
                    <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Tambah Sekolah
                        </h2>
                    </div>
                    <form class="p-5" action="{{ isset($sekolah) ? route('sekolah.update', $sekolah->id) : route('sekolah.store') }}" id="regForm" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @if (isset($sekolah))
                            @method('patch')
                        @endif
                        <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 xl:col-span-6">
                                <h5 class="text-lg font-normal mr-auto">Data Sekolah:</h5>
                                <div>
                                    <h2 class="font-normal text-xs mr-auto mt-3">Nama Sekolah:</h2>
                                    <input type="text"
                                        class="form-control @error('nama_sekolah') is-invalid @enderror  "
                                        placeholder="Nama Sekolah" name="nama_sekolah"
                                        style="border-radius: 5px; width: 100%" value="{{ isset($sekolah) ? $sekolah->nama : old('nama_sekolah') }}"
                                        required>
                                    @error('nama_sekolah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div>
                                    <h2 class="font-normal text-xs mr-auto mt-3">Kode Sekolah:</h2>
                                    <input type="text" class="form-control @error('kode') is-invalid @enderror  "
                                        placeholder="Kode Sekolah" name="kode" style="border-radius: 5px; width: 100%"
                                        value="{{ isset($sekolah) ? $sekolah->kode : old('kode') }}" required>
                                    @error('kode')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <h2 class="font-normal text-xs mr-auto">NPSN:</h2>
                                    <input type="number" class="form-control @error('npsn') is-invalid @enderror"
                                        placeholder="NPSN" name="npsn" style="border-radius: 5px; width: 100%"
                                        value="{{ isset($sekolah) ? $sekolah->npsn :old('npsn') }}" required>
                                    @error('npsn')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <h2 class="font-normal text-xs mr-auto">Kepala Sekolah:</h2>
                                    <input type="text"
                                        class="form-control @error('kepala_sekolah') is-invalid @enderror"
                                        placeholder="Kepala Sekolah" name="kepala_sekolah"
                                        style="border-radius: 5px; width: 100%" value="{{ isset($sekolah) ? $sekolah->kepala_sekolah :old('kepala_sekolah') }}"
                                        required>
                                    @error('kepala_sekolah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <h2 class="font-normal text-xs mr-auto">Jenjang:</h2>
                                    <select name="jenjang" id="jenjang"
                                        class="form-select text-dark form-control @error('jenjang') is-invalid @enderror"
                                        style="border-radius: 5px;" required>
                                        <option value="">Pilih Jenjang</option>
                                        <option value="sd" {{ isset($sekolah)? ($sekolah->jenjang =='sd' ? 'selected' : '') : '' }}>SD</option>
                                        <option value="smp" {{ isset($sekolah)? ($sekolah->jenjang =='smp' ? 'selected' : '') : '' }}>SMP</option>
                                        <option value="sma" {{ isset($sekolah)? ($sekolah->jenjang =='sma' ? 'selected' : '') : '' }}>SMA</option>
                                        <option value="smk" {{ isset($sekolah)? ($sekolah->jenjang =='smk' ? 'selected' : '') : '' }}>SMK</option>
                                    </select>
                                    @error('jenjang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <h2 class="font-normal text-xs mr-auto">Alamat:</h2>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                        placeholder="Masukan alamat" name="alamat"
                                        value="{{ isset($sekolah) ? $sekolah->alamat : old('alamat') }}"
                                        style=" font-size: 15px;" id="alamat">
                                    @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <h2 class="font-normal text-xs mr-auto">Jam Masuk:</h2>
                                    <input type="time" class="form-control @error('jam_masuk') is-invalid @enderror"
                                        placeholder="Masukan jam_masuk" name="jam_masuk"
                                        value="{{ isset($sekolah) ? $sekolah->jam_masuk : old('jam_masuk') }}"
                                        style=" font-size: 15px;" id="jam_masuk">
                                    @error('jam_masuk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <h2 class="font-normal text-xs mr-auto">Jam Pulang:</h2>
                                    <input type="time" class="form-control @error('jam_pulang') is-invalid @enderror"
                                        placeholder="Masukan jam_pulang" name="jam_pulang"
                                        value="{{ isset($sekolah) ? $sekolah->jam_pulang : old('jam_pulang') }}"
                                        style=" font-size: 15px;" id="jam_pulang">
                                    @error('jam_pulang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <h5 class="text-lg font-normal mr-auto">Data user admin sekolah:</h5>
                                <div class="mt-3">
                                    <h2 class="font-normal text-xs mr-auto">Nama Admin Sekolah:</h2>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Nama" name="name" style="border-radius: 5px; width: 100%"
                                        value="{{ isset($sekolah) ? $sekolah->user->first()->name : old('name') }}" required>
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <h2 class="font-normal text-xs mr-auto">Email:</h2>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Email" name="email" style="border-radius: 5px; width: 100%"
                                        value="{{ isset($sekolah) ? $sekolah->user->first()->email : old('email') }}" required>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <h2 class="font-normal text-xs mr-auto">Password:</h2>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        placeholder="password" name="password" style="border-radius: 5px; width: 100%"
                                        {{ isset($sekolah)? '' : 'required' }}>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <h2 class="font-normal text-xs mr-auto">Logo Sekolah:</h2>
                                        {{-- <div class="flex flex-col flex-grow mb-3">
                                            <div x-data="{ files: null }" id="FileUpload"
                                                class="block w-full py-2 px-3 relative bg-white appearance-none border-2 border-gray-300 border-solid rounded-md hover:shadow-outline-gray">
                                                <input type="file" multiple
                                                    class="absolute inset-0 z-50 m-0 p-0 w-full h-full outline-none opacity-0"
                                                    name="log" id="formFile" value=""
                                                    x-on:change="files = $event.target.files; console.log($event.target.files);"
                                                    x-on:dragover="$el.classList.add('active')"
                                                    x-on:dragleave="$el.classList.remove('active')"
                                                    x-on:drop="$el.classList.remove('active')">
                                                <template x-if="files !== null">
                                                    <div class="flex flex-col space-y-1">
                                                        <template
                                                            x-for="(_,index) in Array.from({ length: files.length })">
                                                            <div class="flex flex-row items-center space-x-2">
                                                                <template x-if="files[index].type.includes('audio/')"><i
                                                                        class="far fa-file-audio fa-fw"></i></template>
                                                                <template
                                                                    x-if="files[index].type.includes('application/')"><i
                                                                        class="far fa-file-alt fa-fw"></i></template>
                                                                <template x-if="files[index].type.includes('image/')"><i
                                                                        class="far fa-file-image fa-fw"></i></template>
                                                                <template x-if="files[index].type.includes('video/')"><i
                                                                        class="far fa-file-video fa-fw"></i></template>
                                                                <span class="font-medium text-gray-900"
                                                                    x-text="files[index].name">Uploading</span>
                                                                <span class="text-xs self-end text-gray-500"
                                                                    x-text="filesize(files[index].size)">...</span>
                                                            </div>
                                                        </template>
                                                    </div>
                                                </template>
                                                <template x-if="files === null">
                                                    <div class="flex flex-col space-y-2 items-center justify-center">
                                                        <i class="fas fa-cloud-upload-alt fa-3x text-currentColor"></i>
                                                        <p class="text-gray-700">Pilih Logo Sekolah</p>
                                                        <a href="javascript:void(0)"
                                                            class="flex items-center mx-auto py-2 px-4 text-white text-center font-medium border border-transparent rounded-md outline-none bg-red-700">Select
                                                            a file</a>
                                                    </div>
                                                </template>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="">
                                            <main class="container mx-auto max-w-screen-lg h-full">
                                                <!-- file upload modal -->
                                                <article aria-label="File Upload Modal"
                                                    class="relative h-full flex flex-col bg-white shadow-xl rounded-md"
                                                    ondrop="dropHandler(event);" ondragover="dragOverHandler(event);"
                                                    ondragleave="dragLeaveHandler(event);"
                                                    ondragenter="dragEnterHandler(event);">
                                                    <!-- overlay -->
                                                    <div id="overlay"
                                                        class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
                                                        <i>
                                                            <svg class="fill-current w-12 h-12 mb-3 text-blue-700"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479-1.092l4 4h-3v4h-2v-4h-3l4-4z" />
                                                            </svg>
                                                        </i>
                                                        <p class="text-lg text-blue-700">Drop files to upload</p>
                                                    </div>

                                                    <!-- scroll area -->
                                                    <section
                                                        class="h-full overflow-auto p-8 w-full flex flex-col">
                                                        <header
                                                            class="border-dashed border-2 border-gray-400 py-12 flex flex-col justify-center items-center">
                                                            <p
                                                                class="mb-3 font-semibold text-gray-900 flex flex-wrap justify-center">
                                                                <span>Drag and drop your</span>&nbsp;<span>files
                                                                    anywhere or</span>
                                                            </p>
                                                            <input id="hidden-input" name="profile" type="file" multiple
                                                                class="hidden" />
                                                            <button type="button" id="button"
                                                                class="mt-2 rounded-sm px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                                                                Upload a file
                                                            </button>
                                                        </header>

                                                        <h1 class="pt-8 pb-3 font-semibold sm:text-lg text-gray-900">
                                                            To Upload
                                                        </h1>

                                                        <ul id="gallery" class="flex flex-1 flex-wrap -m-1">
                                                            <li id="empty"
                                                                class="h-full w-full text-center flex flex-col justify-center items-center">
                                                                <img class="mx-auto w-32"
                                                                    src="https://user-images.githubusercontent.com/507615/54591670-ac0a0180-4a65-11e9-846c-e55ffce0fe7b.png"
                                                                    alt="no data" />
                                                                <span class="text-small text-gray-500">No files
                                                                    selected</span>
                                                            </li>
                                                        </ul>
                                                    </section>

                                                    <!-- sticky footer -->
                                                    <footer class="flex justify-end px-8 pb-8 pt-4">
                                                        <button id="submit"
                                                            class="rounded-sm px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none">
                                                            Upload now
                                                        </button> 
                                                        <button id="cancel"
                                                            class="ml-3 rounded-sm px-3 py-1 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                                                            Cancel
                                                        </button>
                                                    </footer>
                                                </article>
                                            </main>
                                        </div>

                                        <!-- using two similar templates for simplicity in js code -->
                                        {{-- <template id="file-template">
                                            <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                                                <article tabindex="0"
                                                    class="group rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
                                                    <img alt="upload preview"
                                                        class="img-preview hidden w-96 h-full object-cover rounded-md bg-fixed"/>
                                                    <section
                                                        class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                                        <h1 class="flex-1 group-hover:text-blue-800"></h1>
                                                        <div class="flex">
                                                            <span class="p-1 text-blue-800">
                                                                <i>
                                                                    <svg class="fill-current w-4 h-4 ml-auto pt-1"
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                                                                    </svg>
                                                                </i>
                                                            </span>
                                                            <p class="p-1 size text-xs text-gray-700"></p>
                                                            <button
                                                                class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
                                                                <svg class="pointer-events-none fill-current w-4 h-4 ml-auto"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24">
                                                                    <path class="pointer-events-none"
                                                                        d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </section>
                                                </article>
                                            </li>
                                        </template> --}}

                                        {{-- <template id="image-template">
                                            <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                                                <article tabindex="0"
                                                    class="group hasImage w-96 h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
                                                    <img alt="upload preview"
                                                        class="img-preview w-96 h-full object-cover rounded-md" />
                                                    <section
                                                        class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                                        <h1 class="flex-1"></h1>
                                                        <div class="flex">
                                                            <span class="p-1">
                                                                <i>
                                                                    <svg class="fill-current w-4 h-4 ml-auto pt-"
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                                                                    </svg>
                                                                </i>
                                                            </span>

                                                            <p class="p-1 size text-xs"></p>
                                                            <button
                                                                class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                                                                <svg class="pointer-events-none fill-current w-4 h-4 ml-auto"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24">
                                                                    <path class="pointer-events-none"
                                                                        d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </section>
                                                </article>
                                            </li>
                                        </template> --}}
                                        
                                        {{-- <form data-single="true" action="/file-upload" class="dropzone">
                                            <div class="fallback"> <input type="file" /> </div>
                                            <div class="dz-message" data-dz-message>
                                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                                <div class="text-slate-500"> This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded. </div>
                                            </div>
                                        </form> --}}
                                        <div class="mt-3">
                                            <label class="form-label">Upload Image</label>
                                            <div class="border-2 border-dashed dark:border-darkmode-400 rounded-md pt-4">
                                                <div class="flex flex-wrap px-4">
                                                    <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in" id="previewContainer" style="display: none;">
                                                        <img class="rounded-md" id="preview" src="" style="" data-action="zoom">
                                                        <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2" onclick="removeImage()"> <i data-lucide="x" class="w-4 h-4"></i> </div>
                                                    </div>
                                                </div>
                                                <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                                    <i data-lucide="image" class="w-4 h-4 mr-2"></i> <span class="text-primary mr-1">Upload a file</span> or drag and drop 
                                                    <input class="w-full h-full top-0 left-0 absolute opacity-0" type="file" name="logo" id="logoInput" onchange="previewImage(event)">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <script>
                                            function previewImage(event) {
                                                var input = event.target;
                                                var reader = new FileReader();
                                                var previewContainer = document.getElementById("previewContainer");
                                                
                                                reader.onload = function(){
                                                    var img = document.getElementById("preview");
                                                    img.src = reader.result;
                                                    previewContainer.style.display = "block";
                                                };
                                                
                                                if (input.files && input.files[0]) {
                                                    reader.readAsDataURL(input.files[0]);
                                                } else {
                                                    var img = document.getElementById("preview");
                                                    img.src = "";
                                                    previewContainer.style.display = "none";
                                                }
                                            }
                                            function removeImage() {
                                            var img = document.getElementById("preview");
                                            var previewContainer = document.getElementById("previewContainer");
                                            var input = document.getElementById("logoInput");
    
                                                 img.src = "";
                                                previewContainer.style.display = "none";
                                                input.value = "";
                                             }
                                        </script>
                                    <style>
                                        .hasImage:hover section {
                                            background-color: rgba(5, 5, 5, 0.4);
                                        }

                                        .hasImage:hover button:hover {
                                            background: rgba(5, 5, 5, 0.45);
                                        }

                                        #overlay p,
                                        i {
                                            opacity: 0;
                                        }

                                        #overlay.draggedover {
                                            background-color: rgba(255, 255, 255, 0.7);
                                        }

                                        #overlay.draggedover p,
                                        #overlay.draggedover i {
                                            opacity: 1;
                                        }

                                        .group:hover .group-hover\:text-blue-800 {
                                            color: #2b6cb0;
                                        }

                                    </style>
                                    
                                    <div class="text-right mt-5">
                                        <a href="{{ route('sekolah.index') }}">
                                            <button type="button"
                                                class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                        </a>
                                        <button class="btn btn-primary w-24" type="submit">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
