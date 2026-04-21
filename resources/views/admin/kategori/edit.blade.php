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
                        <h4>Edit Kategori</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.kategori.edit.proses') }}" method="POST">
                            @csrf
                            <input value="{{ $kategori -> id }}" hidden name="id"/>
                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <input type="text" class="form-control" name="nama" required value="{{ $kategori -> nama }}">
                            </div>
                            <div class="form-group">
                                <div class="justify-content-end d-flex ">
                                    <button href="#" class="btn btn-primary btn-icon icon-left" type="submit">
                                        <i class="far fa-edit"></i> Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
