<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Staff') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 d-flex justify-content-between align-items-center">
                    <h4>
                        {{ __('Daftar Customer') }}
                    </h4>
                    <a href="{{ route('customer.create') }}" class="btn btn-primary mb-1">Tambah Customer</a>
                </div>
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="table-responsive mx-4 mt-3">
                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">ID Customer</th>
                                <th scope="col">Nama Customer</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $customer)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $customer->cust_id }}</td>
                                    <td class="align-middle">{{ $customer->nama_customer }}</td>
                                    <td class="align-middle">{{ $customer->alamat }}</td>
                                    <td class="align-middle">
                                        <div class="btn-group" role="group" aria-label="Basic Example">
                                            <a href="{{ route('customer.delete', ['id'=>$customer->cust_id]) }}" type="button" class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>
                                @endforeach
                                </tr>
                                <tr>
                                </tr>
                        </tbody>
                    </table>
                    {{-- {{ $data->links() }} --}}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
