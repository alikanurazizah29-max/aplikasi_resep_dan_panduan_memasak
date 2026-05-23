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
                <div>
                    <div class="card">
                        <div class="card-header d-flex justify-content-end">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                data-width="250">
                            <button class="btn btn-primary mr-2" type="submit"><i class="fas fa-search"></i></button>
                            <a href="{{ route('admin.resep.create') }}" class="btn btn-primary btn-icon icon-left">
                                <i class="fa-solid fa-plus"></i> Tambahkan
                            </a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped table-md table">
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Gambar</th>
                                        <th>Porsi</th>
                                        <th>Deskripsi</th>
                                        <th>Kategori</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($data_resep as $resep)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $resep->nama }}</td>
                                            <td><img style="height: 100px" src="{{ asset('storage/' . $resep->gambar) }}" alt=""></td>
                                            <td>{{ $resep->porsi }}</td>
                                            <td>{{ $resep->deskripsi }}</td>
                                            <td>{{ $resep->kategori->nama }}</td>
                                            <td>
                                                <div class="badge badge-success">Active</div>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.resep.detail') }}"
                                                    class="btn btn-primary">Detail</a>

                                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                    title="Edit" href="{{ route('admin.resep.edit', $resep->id) }}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>

                                                <form action="{{ route('admin.resep.delete', $resep->id) }}" method="POST"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger btn-action"
                                                        onclick="return confirm('Yakin mau hapus?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1"><i
                                                class="fas fa-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1 <span
                                                class="sr-only">(current)</span></a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
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
