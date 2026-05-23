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
                                <a href="#" class="btn btn-icon btn-primary"><i class="fa-solid fa-plus"></i></a>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">

                                        <div>
                                            Cras justo odio
                                        </div>

                                        <div>
                                            <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>

                                            <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                data-confirm-yes="alert('Deleted')">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header justify-content-between d-flex">
                                <h4>Bahan bahan</h4>
                                <a href="#" class="btn btn-icon btn-primary"><i class="fa-solid fa-plus"></i></a>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">

                                        <div>
                                            Cras justo odio
                                            <span class="badge badge-primary badge-pill ml-2">14</span>
                                        </div>

                                        <div>
                                            <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>

                                            <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                data-confirm-yes="alert('Deleted')">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>

                                    </li>
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
