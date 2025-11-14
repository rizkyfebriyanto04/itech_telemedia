@extends('backoffice.layouts.app')

@section('title', 'Testimoni')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Testimoni</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0"></ol>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('testimoni.store') }}" method="POST">
                    @csrf

                    <div class="col-10">

                        <div class="mb-3">
                            <label class="font-weight-bold">Nama Lengkap</label>
                            <input type="text" name="namalengkap" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="font-weight-bold">Profesi</label>
                            <input type="text" name="pekerjaan" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="font-weight-bold">Deskripsi</label>
                            <textarea class="form-control" name="caption"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="font-weight-bold">Rating &nbsp;</label>
                            <select id="example-rating" name="rating">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>

                        <div class="mb-3 mt-4">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@push('styles')
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/themes/fontawesome-stars-o.min.css">
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/jquery.barrating.min.js"></script>

<script>
    $(function() {
        $('#example-rating').barrating({
            theme: 'fontawesome-stars-o',
        });
    });
</script>
@endpush

