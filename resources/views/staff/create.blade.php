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
                    <p><a href="{{ route('staff') }}" class="btn btn-primary">Kembali</a></p>
                    <form action="{{ route('staff/save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                              <label for="name" class="form-label">Nama Staff</label>
                              <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama">
                              <div id="emailHelp" class="form-text">Masukkan nama staff disini</div>
                              @error('nama')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <select class="form-select mb-3" aria-label="Default select example" name="role">
                                <option selected>Pilih Role</option>
                                <option value="admin">Admin</option>
                                <option value="staff">Staff</option>
                              </select>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
