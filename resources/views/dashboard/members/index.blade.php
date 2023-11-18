@extends('dashboard.layouts.main')

@section('container')
<div class="judul-member mb-4">
    <h1><i class="bi bi-people-fill me-3"></i>ANGGOTA IRMA AL-IKHLAS</h1>
    <p>Kepengurusan IRMA AL-IKHLAS periode 2022 - 2024</p>
</div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-7" role="alert">
      {{ session('success') }}
    </div>
@endif

<div class="table-responsive col-lg-12">
    <a href="#" class="btn btn-success mb-3">Save Excel</a>

    <table class="table table-bordered table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">TTL</th>
          <th scope="col">Usia</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Alamat</th>
          <th scope="col">No Telepon</th>
          <th scope="col">Instagram</th>
          <th scope="col">Bidang</th>
          <th scope="col">Jabatan</th>
          <th scope="col">Hobi</th>
          <th scope="col">Motivasi</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        @foreach ($members as $member)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $member->nama }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->tempat_lahir }}, {{ $member->tanggal_lahir }}</td>
                <td>{{ $member->usia }}</td>
                <td>{{ $member->jenis_kelamin }}</td>
                <td>{{ $member->alamat }}</td>
                <td>{{ $member->no_hp }}</td>
                <td>{{ $member->intagram }}</td>
                <td>{{ $member->bidang->nama_bidang }}</td>
                <td>{{ $member->jabatan }}</td>
                <td>{{ $member->hobi }}</td>
                <td>{{ $member->motivasi }}</td>
                <td> Action
                  {{-- <a href="#" class="badge bg-primary"><span data-feather="eye" ></span></a>

                  <a href="#" class="badge bg-warning"><span data-feather="edit" ></span></a>

                  <form action="#" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are your sure?')"><span data-feather="x-circle" ></span></button>
                  </form> --}}
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection