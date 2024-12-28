@extends('layouts.dashboard')
@section('title', 'Kategori')

@section('content')
    {{ $dataTable->table(['class' => 'table w-100']) }}
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
