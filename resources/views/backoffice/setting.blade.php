@extends('backoffice.layouts.app')

@section('title', 'Setting')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Setting</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Minible</a></li>
                    <li class="breadcrumb-item active">Dashboard</li> --}}
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                </p>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nilai</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_field }}</td>
                            <td>{{ $item->nilai_field }}</td>
                            <td>
                                <button
                                    class="btn btn-sm btn-primary btnEdit"
                                    data-id="{{ $item->id }}"
                                    data-nama="{{ $item->nama_field }}"
                                    data-nilai="{{ $item->nilai_field }}">
                                    Edit
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
<!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="editForm" method="POST" action="{{ route('setting.update') }}">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" id="edit_id">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Data Setting</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="edit_nama" class="form-label">Nama Field</label>
                    <input type="text" class="form-control" id="edit_nama" name="nama_field" readonly>
                </div>
                <div class="mb-3">
                    <label for="edit_nilai" class="form-label">Nilai Field</label>
                    <input type="text" class="form-control" id="edit_nilai" name="nilai_field" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </div>
    </form>
  </div>
</div>

@endsection
@push('scripts')
<script>
$(document).ready(function() {
    $('.btnEdit').on('click', function() {
        let id = $(this).data('id');
        let nama = $(this).data('nama');
        let nilai = $(this).data('nilai');

        $('#edit_id').val(id);
        $('#edit_nama').val(nama);
        $('#edit_nilai').val(nilai);

        $('#editModal').modal('show');
    });
});
</script>

@endpush
