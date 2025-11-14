@extends('backoffice.layouts.app')

@section('title', 'Testimoni')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Testimoni</h4>

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
<div class="page-title-right">
    <div class="text-right" style="text-align: right;">
        <a href="{{ route('add.testimoni') }}" class="btn btn-outline-primary waves-effect waves-light"> Tambah Testimoni </a>
        {{-- <button type="button" class="btn btn-outline-primary waves-effect waves-light">Tambah berita</button> --}}
    </div>
</div>
<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Pekerjaan</th>
                        <th>Rating</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->namalengkap }}</td>
                            <td>{{ $item->pekerjaan }}</td>
                            {{-- <td>{{ $item->rating }}</td> --}}
                            <td>
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $item->rating)
                                        <i class="fas fa-star text-warning"></i>
                                    @else
                                        <i class="far fa-star text-warning"></i>
                                    @endif
                                @endfor
                            </td>
                            <td>
                                <!-- EDIT -->
                                <a href="{{ route('artikel.edit', $item->id) }}"
                                class="btn btn-sm btn-primary">
                                    Edit
                                </a>
                                <!-- DELETE -->
                                <form action="{{ route('artikel.delete', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus artikel ini?')">
                                        Hapus
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

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
