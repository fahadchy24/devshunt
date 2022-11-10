@extends('backend.layouts.master')

@section('title')
    Categories
@endsection

@section('admin-content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Category List</h6>
        </div>
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>
@endsection

@section('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    {{-- <script>
        $(document).ready(function() {
            $('#category-table').DataTable();
        });
    </script> --}}
@endsection
