@extends('layouttemplate::pages')

@section('title')
    Data Akun
@endsection

@section('content')
    <div class="card card-body">
        <table class="table">
            <tr>
                <th class="w-25">ID</th>
                <td>{{ $user->id_user }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $user->nama }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $user->alamat }}</td>
            </tr>
            <tr>
                <th>Telepon</th>
                <td>{{ $user->telepon }}</td>
            </tr>
            <tr>
                <th>Hak Akses</th>
                <td>{{ ucfirst($user->jabatan->nama) }}</td>
            </tr>
        </table>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('user.edit', ['id' => $user->id]) }}" class="btn btn-outline-warning">Ubah Data Staff</a>
                <a href="" class="btn btn-danger" onclick="return alert('Apakah anda yakin menghapus data staff?')">Hapus Staff</a>
            </div>
        </div>
    </div>
    @endsection

@section('script')
    @include('layouttemplate::attributes.user')
@endsection