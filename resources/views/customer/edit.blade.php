<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambahkan Staff') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Masukkan Data Staff") }}
                    <hr>
                    @if (Session::has('error'))
                    <div>
                        {{ session('error') }}
                    </div>
                    @endsession
                    <p><a href="{{ route('customer') }}" class="btn btn-primary">Kembali</a></p>
                    <form action="{{ route('customer.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                              <label for="customer" class="form-label">Nama Customer</label>
                              <input type="text" class="form-control" id="customer" aria-describedby="emailHelp" name="nama_customer">
                              <div id="emailHelp" class="form-text">Masukkan nama customer disini</div>
                              @error('customer')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label for="alamat" class="form-label">Alamat</label>
                              <input type="text" class="form-control" id="alamat" aria-describedby="emailHelp" name="alamat">
                              @error('alamat')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
