@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="{{ route('all-posts') }}" class="btn btn-success"><span data-feather="arrow-left" ></span> Kembali ke Semua Postingan</a>

            <a href="{{ route('edit-posts', [$post->id]) }}" class="btn btn-warning"><span data-feather="edit" ></span> Edit</a>
            
            <form action="{{ route('delete-posts', [$post->id]) }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Apakah kamu yakin?')"><span data-feather="x-circle" ></span> Delete</button>
            </form>


            @if ($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid mt-3" alt="{{ $post->bidang->nama_bidang }}">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->bidang->nama_bidang }}" class="card-img-top img-fluid mt-3" alt="{{ $post->bidang->nama_bidang }}">
            @endif

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>

@endsection