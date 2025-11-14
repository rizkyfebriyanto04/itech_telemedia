@extends('backoffice.layouts.app')

@section('title', 'Berita')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Berita</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Minible</a></li>
                    <li class="breadcrumb-item active">Dashboard</li> --}}
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="col-12 mb-3">
                    <h3 align="center"></h3>
                </div>
                <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="col-10">

                        {{-- Title --}}
                        <div class="mb-3">
                            <label class="font-weight-bold">Judul Artikel</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        {{-- Upload Image --}}
                        <div class="mb-3">
                            <label class="font-weight-bold">Gambar / Thumbnail</label>
                            <input type="file" name="image" class="form-control" accept="image/*" required>
                        </div>

                        {{-- Content --}}
                        <div class="mb-3">
                            <label class="font-weight-bold">Content</label>
                            <textarea id="classic-editor" name="content"></textarea>
                        </div>

                        <div class="mb-3 mt-4">
                            <button class="btn btn-secondary" name="save_action" value="DRAFT">Save as Draft</button>
                            <button class="btn btn-success" name="save_action" value="PUBLISH">Publish</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<!-- CKEditor 5 -->
<script src="{{asset('backoffice/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js')}}"></script>

<script>
    ClassicEditor
        .create( document.querySelector('#classic-editor') )
        .catch(error => console.error(error));
</script>

@endpush
