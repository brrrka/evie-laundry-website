<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambahkan Pesanan Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Masukkan Pesanan Baru") }}
                    <hr>
                    <p><a href="{{ route('transaksi') }}" class="btn btn-primary">Kembali</a></p>
                    <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                              <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                              <input type="date" class="form-control" id="tanggal_masuk" aria-describedby="emailHelp" name="tanggal_masuk">
                              <div id="emailHelp" class="form-text">Tanggal Keluar akan dituliskan ketika pesanan selesai</div>
                              @error('tanggal_masuk')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>

                            <div class="mb-3">
                              <label for="nama_layanan" class="form-label">Nama Customer</label>
                              <input type="text" class="form-control" id="nama_layanan" aria-describedby="emailHelp" name="nama_customer">
                              <div id="emailHelp" class="form-text">Masukkan nama layanan disini</div>
                              @error('nama_customer')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>

                            <div class="mb-3">
                              <label for="nama_layanan" class="form-label">No Pesanan</label>
                              <input type="text" class="form-control" id="nama_layanan" aria-describedby="emailHelp" name="no_pesanan">
                              <div id="emailHelp" class="form-text">Nomor Pesanan</div>
                              @error('no_pesanan')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>

                            <div class="mb-3">
                            <label class="form-label">Pilih Layanan</label>
                            @foreach($layanan as $itemlayanan)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $itemlayanan->id_layanan }}" id="{{ $itemlayanan->id_layanan }}" name="id_layanan">
                                <label class="form-check-label" for="{{ $itemlayanan->id_layanan }}" value="{{ $itemlayanan->id_layanan }}">
                                  {{ $itemlayanan->nama_layanan }}
                                </label>
                              </div>
                              @endforeach
                            </div>

                            <div class="mb-3">
                              <label for="kuantitas" class="form-label">Kuantitas</label>
                              <input type="text" class="form-control" id="kuantitas" aria-describedby="emailHelp" name="kuantitas">
                              @error('kuantitas')
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
                              <label for="total_biaya" class="form-label">Total Biaya</label>
                              <input type="text" class="form-control" id="total_biaya" aria-describedby="emailHelp" name="total_biaya">
                              @error('nama_layanan')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>

                              <div class="mb-3">
                                <div class="mb-3">
                                    <label for="satuan" class="form-label">Staff</label>
                                    <select class="form-select mb-3" aria-label="Default select example" name="staff_id">
                                        @foreach($staffs as $staff)
                                        <option value="{{ $staff -> staff_id }}" @if( Auth::user()->staff_id == $staff->staff_id ) selected @endif>{{ $staff -> nama }}</option>
                                        @endforeach
                                      </select>
                                </div>

                                <div class="mb-3">
                                    <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                                    <input type="text" class="form-control" id="metode_pembayaran" aria-describedby="emailHelp" name="metode_pembayaran">
                                    @error('metode_pembayaran')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                  </div>

                                  <div class="mb-3">
                                    <label for="status_pembayaran" class="form-label">Status</label>
                                    <select class="form-select mb-3" aria-label="Default select example" name="status_pembayaran">
                                        <option value="belum bayar" selected>Belum Bayar</option>
                                        <option value="belum selesai">Belum Selesai</option>
                                        <option value="selesai">Selesai</option>
                                      </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                              
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>