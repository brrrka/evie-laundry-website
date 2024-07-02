<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Layanan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 d-flex justify-content-between align-items-center">
                    <h4>
                        {{ __('Layanan') }}
                    </h4>
                    <a href="{{ route('layanan.create') }}" class="btn btn-primary mb-1">Tambah Layanan</a>
                </div>
                @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ Session('message') }}
                    </div>
                @endif
                <div class="table-responsive mx-4 mt-3">
                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">ID Layanan</th>
                                <th scope="col">Nama Layanan</th>
                                <th scope="col">Biaya</th>
                                <th scope="col">Satuan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($layanan as $item)
                                <tr>
                                    <td class="align-middle">{{ $item->id_layanan }}</td>
                                    <td class="align-middle">{{ $item->nama_layanan }}</td>
                                    <td class="align-middle">{{ $item->biaya }}</td>
                                    <td class="align-middle">{{ $item->satuan }}</td>
                                    <td class="align-middle">
                                        <div class="btn-group" role="group" aria-label="Basic Example">
                                            <a href="{{ route('staff/edit', ['id'=>$item->id_layanan]) }}" type="button" class="btn btn-secondary">Edit</a>
                                            <a href="{{ route('staff/delete', ['id'=>$item->id_layanan]) }}" type="button" class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            {{-- @empty --}}
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $layanan->links() }} --}}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>