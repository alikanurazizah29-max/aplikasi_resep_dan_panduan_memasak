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
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header justify-content-between d-flex">
                                <h4>Langkah-langkah</h4>
                                <a href="{{ route('admin.langkah.create', $resepid) }}" class="btn btn-icon btn-primary"><i
                                        class="fa-solid fa-plus"></i></a>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    @foreach ($datalangkah as $langkah)
                                        <li class="list-group-item"
                                            style="display: flex; flex-direction: column; gap: 10px;">

                                            <div style="word-wrap: break-word;">
                                                {{ $langkah->langkah }}
                                            </div>

                                            <div style="display: flex; gap: 5px;">
                                                <a href="{{ route('admin.langkah.edit', $langkah->id) }}"
                                                    class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                    title="Edit">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>

                                                <form action="{{ route('admin.langkah.delete', $langkah->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger btn-action"
                                                        onclick="return confirm('Yakin mau hapus?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header justify-content-between d-flex">
                                <h4>Bahan bahan</h4>
                                <a href="{{ route('admin.bahan.create', $resepid) }}" class="btn btn-icon btn-primary"><i
                                        class="fa-solid fa-plus"></i></a>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    @foreach ($databahan as $bahan)
                                        <li class="list-group-item"
                                            style="display: flex; flex-direction: column; gap: 10px;">

                                            <div style="word-wrap: break-word;">
                                                {{ $bahan->bahan }}
                                                <span
                                                    class="badge badge-primary badge-pill ml-2">{{ $bahan->jumlah }}</span>
                                            </div>

                                            <div style="display: flex; gap: 5px;">
                                                <a href="{{ route('admin.bahan.edit', $bahan->id) }}"
                                                    class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                    title="Edit">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>

                                                <form action="{{ route('admin.bahan.delete', $bahan->id) }}" method="POST"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger btn-action"
                                                        onclick="return confirm('Yakin mau hapus?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>

                                        </li>
                                    @endforeach
                                </ul>
                            </div>
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
