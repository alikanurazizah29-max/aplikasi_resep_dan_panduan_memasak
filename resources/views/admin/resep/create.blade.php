@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Blank Page</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Menu</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.user.create.proses') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Nama Resep</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" accept="image/*" class="form-control invoice-input" name="gambar" required>
                            </div>
                            <div class="form-group">
                                <label>Porsi</label>
                                <input type="text" class="form-control invoice-input" name="porsi" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" rows="3" name="deskripsi" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" name="kategori_id" required>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                                <div class="form-group">
                                    <div class="justify-content-end d-flex ">
                                        <button class="btn btn-primary btn-icon icon-left" type="submit">
                                           <i class="far fa-edit"></i> Simpan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
