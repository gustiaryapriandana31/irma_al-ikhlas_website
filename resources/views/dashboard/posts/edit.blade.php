@extends('dashboard.layouts.main')

@section('container')
<div class="ms-5 buat-post">
    <h1><i class="bi bi-file-earmark-post me-3"></i>UPDATE POSTINGAN</h1>
</div>

<div class="ms-5 col-lg-8">
    <form method="post" action="{{ route('update-posts', [$post->id]) }}" class="mb-5" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autocomplete="on" required autofocus value="{{ old('title', $post->title) }}">
          @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $post->slug) }}">
          @error('slug')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror 
        </div>

        <div class="mb-3">
          <label for="bidang_id" class="form-label">Bidang</label>
          <select class="form-select" name="bidang_id">
            @foreach ($bidangs as $bidang)
              @if (old('bidang_id', $bidang->id) == $bidang->id)
                <option value="{{ $bidang->id }}" selected>{{ $bidang->nama_bidang }}</option>     
              @else
                <option value="{{ $bidang->id }}">{{ $bidang->nama_bidang }}</option>
              @endif     
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Post Image</label>
          <input type="hidden" name="oldImage" id="oldImage" value="{{ $post->image }}">
          @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
          @else
            <img class="img-preview img-fluid mb-3 col-sm-5">
          @endif

          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
          @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror 
        </div>
          
        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
          <input type="hidden" id="body" name="body" value="{{ old('body', $post->body) }}">
          <trix-editor input="body"></trix-editor>
          @error('body')
            <p class="text-danger">{{ $message }}</p>  
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit Postingan</button>
    </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)        
    })

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    // menampilkan preview gambar
    function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');
      
      imgPreview.style.display = 'block';
      
      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
      
      oFReader.onload =  function(oFREevent) {
        imgPreview.src = oFREevent.target.result;
      }
    }
</script>
@endsection