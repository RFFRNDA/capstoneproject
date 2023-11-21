@extends('admin.layouts.main')

@section('container')

<div class="content">
    <div class="title-table h1 text-center">Data Produk</div>

    <div class="group-button mt-3">
        <a href="{{ route('semua.menu') }}" class="btn btn btn-outline-primary mb-3 shadow-sm" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Tambah
        </a>
    </div>

    <div class="content-tabs">
        <ul class="nav nav-pills justify-content-center">
            <li class="nav-item mx-3 mb-3">
                <a class="nav-link" href="{{ route('makanan.menu') }}">Makanan</a>
            </li>
            <li class="nav-item mx-3 mb-3">
                <a class="nav-link" href="{{ route('minuman.menu') }}">Minuman</a>
            </li>
            <li class="nav-item mx-3 mb-3">
                <a class="nav-link" href="{{ route('snack.menu') }}">Snack</a>
            </li>
            <li class="nav-item mx-3 mb-3">
                <a class="nav-link" href="{{ route('semua.menu') }}">Semua</a>
            </li>
        </ul>
    </div>

    <div class="card" style="padding: 20px">
        <div class="content-table">
            @yield('content-table')
        </div>
    </div>
</div>

@include('admin.product.modal.create')

@endsection
