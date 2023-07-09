@extends('dashboard.layout')

@section('konten')
<div class="pb-3"><a href="{{ route('blog.index') }}" class="btn btn-secondary">
		<< kembali</a>
</div>
<form action="{{ route('blog.update', $data->id) }}" method="POST">
	@csrf
	@method('put')
	<div class="mb-3">
		<label for="judul" class="form-label">Judul</label>
		<input type="text" class="form-control form-control-sm" name="judul" id="judul" aria-describedby="helpId"
			placeholder="Judul" value="{{ $data->judul }}">
	</div>
	<div class="mb-3">
		<label for="slug" class="form-label">Slug</label>
		<input type="text" class="form-control form-control-sm" name="slug" id="slug" aria-describedby="helpId"
			placeholder="Slug" value="{{ $data->slug }}">
	</div>
	<div class="mb-3">
		<label for="meta" class="form-label">Meta Description</label>
		<input type="text" class="form-control form-control-sm" name="meta" id="meta" aria-describedby="helpId"
			placeholder="Meta" value="{{ $data->meta }}">
	</div>
	<div class="mb-3">
		<label for="image" class="form-label">Image</label>
		<input type="text" class="form-control form-control-sm" name="image" id="image" aria-describedby="helpId"
			placeholder="Image" value="{{ $data->image }}">
	</div>
	<div class="mb-3">
		<label for="isi" class="form-label">Isi</label>
		<textarea class="form-control" rows="5" name="isi">{{ $data->isi }}</textarea>
	</div>
	<button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
</form>
@endsection