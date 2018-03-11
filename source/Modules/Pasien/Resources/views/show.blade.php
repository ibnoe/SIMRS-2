@extends('layouttemplate::pages-alt')

@section('title')
    Detail Pasien {{ $pasien->nama }}
@endsection

@section('content')
    <div class="card card-body">
        <div class="col-md-12">
            <h3>{{ $pasien->nama }}</h3>
            &nbsp;
            <table class="table">
                <tbody>
                <tr>
                    <th class="w-25">KTP</th>
                    <td>{{ $pasien->ktp }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ ucfirst($pasien->jenkel) }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $pasien->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <th>Golongan Darah</th>
                    <td>{{ $pasien->golongan_darah }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $pasien->alamat }}</td>
                </tr>
                <tr>
                    <th>Telepon</th>
                    <td>{{ $pasien->telepon }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
