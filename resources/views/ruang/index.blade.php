@extends('myLayouts.main')

@section('content')
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-Medium mr-auto">
        Data Ruang
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <button class="btn btn-primary shadow-md mr-2">
            <a href="{{ route('ruang.create') }}">
                Tambah Ruang
            </a>
        </button>
    </div>
</div>
<div class="search hidden sm:block">
    <form action="{{ route('ruang.index') }}" method="GET">
        <input type="search" class="search__input form-control border-transparent" id="myInput" name="search"
            title="Cari Ruangan" placeholder="Search..">
    </form>
</div>
<div class="intro-y box p-5 mt-5">
    <div class="overflow-x-auto">
        <table class="table table-striped" id="myTable">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">No.</th>
                    <th class="whitespace-nowrap">Ruang</th>
                    <th class="whitespace-nowrap">Kategori</th>
                    <th class="whitespace-nowrap">Status</th>
                    @can('edit_ruang', 'delete_ruang')
                    <th class="whitespace-nowrap">Action</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a href="{{ url('/data-inventaris/ruang', $data->id) }}">{{ $data->name}}</a></td>
                    <td>{{ $data->kategori ? $data->kategori->nama : '' }}</td>
                    <td>{{ $data->bisa_dipinjam}}</td>
                    <td class="table-report__action w-56">
                        <div class="flex gap-3">
                            <a class="btn border-t-cyan-400 btn-sm" href="{{ route('ruang.show', $data->id) }}">Detail</a>
                            @can('edit_ruang')
                            <a class="btn btn-warning btn-sm" href="{{ route('ruang.edit', $data->id) }}">Edit</a>
                            @endcan
                            @can('delete_ruang')
                            <button type="submit" class="btn btn-danger btn-sm rounded"
                                onclick="deleteData('{{ route('ruang.destroy', [$data->id]) }}')">Hapus</button>
                            @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="mt-5">
    {{ $datas->links() }}
</div>
@endsection