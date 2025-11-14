@extends('backoffice.layouts.app')

@section('title', 'Edit Artikel')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Edit Artikel</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="col-10">

                        {{-- Judul --}}
                        <div class="mb-3">
                            <label class="font-weight-bold">Judul Artikel</label>
                            <input type="text"
                                   name="title"
                                   class="form-control"
                                   value="{{ $artikel->title }}" required>
                        </div>

                        {{-- Thumbnail Lama --}}
                        <div class="mb-3">
                            <label class="font-weight-bold d-block">Gambar Saat Ini</label>

                            <img src="{{ asset('berita/' . $artikel->image) }}"
                                 alt="Gambar"
                                 class="rounded"
                                 width="450">

                        </div>

                        {{-- Upload Thumbnail Baru --}}
                        <div class="mb-3">
                            <label class="font-weight-bold">Ganti Gambar (opsional)</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                            <small class="text-muted">Biarkan kosong jika tidak ingin mengganti gambar.</small>
                        </div>

                        {{-- Content --}}
                        <div class="mb-3">
                            <label class="font-weight-bold">Content</label>
                            <textarea id="classic-editor" name="content">{!! $artikel->content !!}</textarea>
                        </div>

                        {{-- Tombol --}}
                        <div class="mt-3">
                            <button class="btn btn-secondary" name="save_action" value="DRAFT">Simpan Draft</button>
                            <button class="btn btn-success" name="save_action" value="PUBLISH">Update & Publish</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="{{asset('backoffice/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js')}}"></script>

<script>
ClassicEditor
    .create(document.querySelector('#classic-editor'))
    .catch(error => console.error(error));
</script>
@endpush
