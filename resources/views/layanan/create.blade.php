<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambahkan Layanan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Masukkan Layanan Baru") }}
                    <hr>
                    @if (Session::has('error'))
                    <div>
                        {{ session('error') }}
                    </div>
                    @endsession
                    <p><a href="{{ route('layanan') }}" class="btn btn-primary">Kembali</a></p>
                    <form action="{{ route('layanan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                              <label for="id_layanan" class="form-label">ID Layanan</label>
                              <input type="text" class="form-control" id="id_layanan" aria-describedby="emailHelp" name="id_layanan">
                              <div id="emailHelp" class="form-text">ID Layanan harus unik</div>
                              @error('id_layanan')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label for="nama_layanan" class="form-label">Nama Layanan</label>
                              <input type="text" class="form-control" id="nama_layanan" aria-describedby="emailHelp" name="nama_layanan">
                              <div id="emailHelp" class="form-text">Masukkan nama layanan disini</div>
                              @error('nama_layanan')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label for="biaya" class="form-label">Biaya</label>
                              <input type="text" class="form-control" id="biaya" aria-describedby="emailHelp" name="biaya">
                              @error('nama_layanan')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="mb-3">
                                <label for="satuan" class="form-label">Satuan</label>
                                <select class="form-select mb-3" aria-label="Default select example" name="satuan">
                                    <option value="kilogram" selected>Kilogram</option>
                                    <option value="potongan">Potongan</option>
                                  </select>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp" name="deskripsi">
                              </div>    
                              <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
