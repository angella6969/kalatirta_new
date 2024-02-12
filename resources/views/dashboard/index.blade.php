@extends('layout.dashboard.main')
@section('container')
    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-3">Daftar Permintaan Data</h5>
                {{-- <form action="/dashboard/perencanaan/pola-ws-dan-rpsda">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control " placeholder="..." name="search"
                                    value="{{ request('search') }}">
                                <button class="btn btn-primary " type="submit" id="basic-addon2"><span
                                        data-feather="search"></span></button>
                            </div>
                        </div>
                    </div> --}}
                </form>
                {{-- <div class="mt-2 mb-2">
                    <a href="/dashboard/kinerja/data/create" class="btn btn-info">Tambah LAKIP</a>
                </div> --}}
                <div class="table-responsive-sm mt-3">
                    <table class="table  table-sm">
                        <thead>
                            <tr style="text-align: center;">
                                <th scope="col">No</th>
                                <th scope="col">Nama </th>
                                <th scope="col">Status </th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr style="text-align: center;" {{-- class="{{ $data->status == 'Diterima' ? 'bg-success' : ($data->status == 'Ditolak' ? 'bg-danger' : 'white') }}" --}}
                                    class="{{ $data->status == 'Diterima'
                                        ? 'bg-info'
                                        : ($data->status == 'Ditolak'
                                            ? 'bg-danger'
                                            : ($data->status == 'Diproses'
                                                ? 'bg-warning'
                                                : ($data->status == 'Selesai'
                                                    ? 'bg-success'
                                                    : 'bg-light'))) }}">
                                    <td> {{ $loop->iteration }}</td>
                                    <td> {{ $data->nama }}</td>
                                    <td> {{ $data->status }}</td>

                                    <td>
                                        <a href="/dashboard/kalatirta-so/{{ $data->id }}"
                                            class="bg badge bg-warning"><span data-feather="eye">
                                            </span></a>

                                        <form action="/dashboard/kalatirta-so/{{ $data->id }}" class="d-inline "
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn badge bg-danger show-DI-modal "
                                                onclick="return confirm('Yakin Ingin Menghapus Data yang berhubungan dengan? {{ $data->nama }}')"><span
                                                    data-feather="file-minus"></span> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <x-notif />
@endsection
