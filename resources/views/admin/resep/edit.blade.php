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
                        <form action="{{ route('admin.resep.edit.proses') }}" method="POST">
                            @csrf
                            <input value="{{ $resep -> id }}" hidden name="id"/>
                            <div class="form-group">
                                <label>Nama Resep</label>
                                <input type="text" class="form-control" name="nama" value="{{ $resep->nama }}" required>
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" accept="image/*" clas    s="form-control invoice-input" name="gambar"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Porsi</label>
                                <input type="text" class="form-control invoice-input" name="porsi" value=" {{ $resep->porsi }}" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" rows="3" name="deskripsi" required>{{ $resep->deskripsi }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" name="kategori_id" required>
                                    @foreach ($data_kategori as $kategori)
                                        <option @if ( $resep->kategori_id==$kategori->id)
                                            selected 
                                        @endif value="{{ $kategori->id }}">{{$kategori->nama}}</option>
                                    @endforeach
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
