@extends('dashboard.layouts.main')

@section('container')
<div class="judul-post mb-4">
    <h1><i class="bi bi-file-earmark-post me-3"></i>POSTINGAN IRMA AL-IKHLAS</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-9" role="alert">
      {{ session('success') }}
    </div>
@endif

<div class="table-responsive col-lg-9">
    <a href="{{ route('create-posts') }}" class="btn btn-primary mb-3">Tambah Postingan</a>

    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Judul</th>
          <th scope="col">Bidang</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->bidang->nama_bidang }}</td>
                <td>
                  <a href="{{ route('show-posts', [$post->id]) }}" class="badge bg-primary"><span data-feather="eye" ></span>Detail</a>

                  <a href="{{ route('edit-posts', [$post->id]) }}" class="badge bg-warning"><span data-feather="edit" ></span>Edit</a>

                  <form action="{{ route('delete-posts', [$post->id]) }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Apakah kamu yakin?')"><span data-feather="x-circle" ></span>Hapus</button>
                  </form>
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection