<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex justify-between items-center">
                    <h4>{{ __('Pesanan') }}</h4>
                    <a href="{{ route('transaksi.create') }}" class="btn btn-primary mb-1">Tambah Pesanan</a>
                </div>

                @if (Session::has('message'))
                    <div class="alert alert-success mx-4 mt-3" role="alert">
                        {{ Session('message') }}
                    </div>
                @endif

                <div class="table-responsive mx-4 mt-3">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Customer</th>
                                <th scope="col">Jenis Pesanan</th>
                                <th scope="col">Total Biaya</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $item)
                                <tr>
                                    <td>{{ $item->no_pesanan }}</td>
                                    <td>{{ $item->nama_customer }}</td>
                                    <td>{{ $item->id_layanan }}</td>
                                    <td>{{ $item->total_biaya }}</td>
                                    <td>{{ $item->status_pembayaran }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic Example">
                                            {{-- <a href="{{ route('transaksi/edit', ['id'=>$item->no_pesanan]) }}" class="btn btn-secondary">Edit</a> --}}
                                            <a href="{{ route('transaksi.delete', ['id'=>$item->no_pesanan]) }}" class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
