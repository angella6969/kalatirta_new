@extends('layout.dashboard.main')
@section('container')
    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-3">Pelayanan Permintaan Data Oleh :</h5>
                <form method="post" action="/dashboard/kalatirta-so/{{ $data->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <table class="table table-responsive">
                        <tr>
                            <td><strong>Nomor Registrasi</strong></td>
                            <td>:</td>
                            <td><strong>{{ $data->nomor_registrasi }}</strong></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ $data->nama }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{ $data->alamat }}</td>
                        </tr>
                        <tr>
                            <td>Nomor Hp/Wa</td>
                            <td>:</td>
                            <td>{{ $data->nohp }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{ $data->email }}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>:</td>

                            <td>{{ $data->pekerjaan }}</td>
                        <tr>
                            <td>Alamat Kantor / Universitas</td>
                            <td>:</td>
                            <td>{{ $data->alamatkantor }}</td>
                        </tr>
                        <tr>
                            <td>Cara Memperoleh Informasi</td>
                            <td>:</td>
                            <td>{{ $data->memperoleh }}</td>
                        </tr>
                        <tr>
                            <td>Cara Mengirim Informasi</td>
                            <td>:</td>
                            <td>{{ $data->mengirim }}</td>
                        </tr>
                        <tr>
                            <td>Alamat Penerima</td>
                            <td>:</td>
                            <td>{{ $data->alamat_kirim }}</td>
                        </tr>


                    </table>

                    <div class="mb-3">
                        <div style="z-index: 999">
                            <label for="">Permintaan Data</label>
                            <textarea id="informasi" name="informasi" style="width: 100px;" hidden>{{ old('informasi', $data->informasi) }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div style="z-index: 999">
                            <label for="">Tujuan Data Digunakan</label>
                            <textarea id="tujuan" name="tujuan" style="width: 100px;" hidden>{{ old('tujuan', $data->tujuan) }}</textarea>
                        </div>
                    </div>

                    <x-garis />

                    <label for="">Foto Ktp</label>
                    <img src="{{ asset('storage/' . substr($data->ktp, 6)) }}"
                        class="img-preview img-fluid mb-3 col-sm-5 d-block">


                    <div class="mt-3">
                        <label for="status" class="form-label">Prosedur Permintaan Data</label>
                        <select class="form-select" aria-label="Default select example" name="status" id="status"
                            required>
                            <option value=""
                                {{ old('status', $data->status) === null ? ($data->status == '' ? 'selected' : '') : 'selected' }}>
                                Kategori
                            </option>
                            <option value="Ditolak" {{ old('status', $data->status) == 'Ditolak' ? 'selected' : '' }}>
                                Ditolak
                            </option>
                            <option value="Diterima" {{ old('status', $data->status) == 'Diterima' ? 'selected' : '' }}>
                                Diterima
                            </option>
                            <option value="Diproses" {{ old('status', $data->status) == 'Diproses' ? 'selected' : '' }}>
                                Diproses
                            </option>
                            <option value="Selesai" {{ old('status', $data->status) == 'Selesai' ? 'selected' : '' }}>
                                Selesai
                            </option>
                        </select>
                    </div>
                    <div class="mt-3" id="additionalInput" style="display: none;">
                        <label for="additionalContent" class="form-label">Alasan Permintaan Data Ditolak</label>
                        <textarea id="keterangan" name="keterangan" style="width: 100px;" hidden>{{ old('keterangan', $data->keterangan) }}</textarea>
                    </div>


                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <x-notif />
    <script>
        $(document).ready(function() {
            // Fungsi untuk menunjukkan atau menyembunyikan input tambahan berdasarkan pilihan dropdown
            function toggleAdditionalInput() {
                var selectedValue = $('#status').val();

                // Jika Status adalah Ditolak, tampilkan input tambahan, selain itu sembunyikan
                if (selectedValue === 'Ditolak') {
                    $('#additionalInput').show();
                } else {
                    $('#additionalInput').hide();
                }
            }

            // Panggil fungsi saat halaman dimuat
            toggleAdditionalInput();

            // Panggil fungsi saat pilihan dropdown berubah
            $('#status').change(function() {
                toggleAdditionalInput();
            });
        });
    </script>

    <script>
        function initializeEditor(selector) {
            ClassicEditor
                .create(document.querySelector(selector), {
                    toolbar: [],
                })
                .catch(error => {
                    console.log(error);
                });
        }

        initializeEditor('#informasi');
        initializeEditor('#tujuan');
        initializeEditor('#keterangan');
    </script>
@endsection
