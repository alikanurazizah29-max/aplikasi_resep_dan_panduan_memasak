@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Blank Page</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Kategori</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-end">
                                <a href="#" class="btn btn-primary btn-icon icon-left">
                                    <i class="far fa-edit"></i> Simpan
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
