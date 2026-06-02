@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">

    <div class="text-center mb-5">
        <h1>
            <i class="bi bi-speedometer2 text-primary"></i>
            Dashboard Perpustakaan
        </h1>
        <p class="text-muted">
            Ringkasan statistik dan informasi perpustakaan
        </p>
    </div>

    {{-- Statistik Buku --}}
    <div class="row mb-4">

        <div class="col-md-4">
            <div class="card border-primary">
                <div class="card-body text-center">
                    <i class="bi bi-book-fill display-4 text-primary"></i>
                    <h5 class="mt-2">Total Buku</h5>
                    <h2>{{ $totalBuku }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-success">
                <div class="card-body text-center">
                    <i class="bi bi-check-circle-fill display-4 text-success"></i>
                    <h5 class="mt-2">Buku Tersedia</h5>
                    <h2>{{ $bukuTersedia }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-danger">
                <div class="card-body text-center">
                    <i class="bi bi-x-circle-fill display-4 text-danger"></i>
                    <h5 class="mt-2">Buku Habis</h5>
                    <h2>{{ $bukuHabis }}</h2>
                </div>
            </div>
        </div>

    </div>

    {{-- Statistik Anggota --}}
    <div class="row mb-5">

        <div class="col-md-4">
            <div class="card border-info">
                <div class="card-body text-center">
                    <i class="bi bi-people-fill display-4 text-info"></i>
                    <h5 class="mt-2">Total Anggota</h5>
                    <h2>{{ $totalAnggota }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-success">
                <div class="card-body text-center">
                    <i class="bi bi-person-check-fill display-4 text-success"></i>
                    <h5 class="mt-2">Anggota Aktif</h5>
                    <h2>{{ $anggotaAktif }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-secondary">
                <div class="card-body text-center">
                    <i class="bi bi-person-x-fill display-4 text-secondary"></i>
                    <h5 class="mt-2">Anggota Nonaktif</h5>
                    <h2>{{ $anggotaNonaktif }}</h2>
                </div>
            </div>
        </div>

    </div>

    {{-- Buku Terbaru dan Anggota Terbaru --}}
    <div class="row">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <i class="bi bi-book"></i>
                    5 Buku Terbaru
                </div>

                <div class="p-2">
                    @foreach($bukuTerbaru as $buku)
                        <x-buku-card :buku="$buku" />
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <i class="bi bi-people"></i>
                    5 Anggota Terbaru
                </div>

                <ul class="list-group list-group-flush">
                    @foreach($anggotaTerbaru as $anggota)
                        <li class="list-group-item">
                            {{ $anggota->nama }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>

    {{-- Quick Links --}}
    <div class="mt-5">
        <h3>Quick Links</h3>

        <div class="d-flex gap-2 flex-wrap">

            <a href="{{ route('buku.index') }}" class="btn btn-primary">
                <i class="bi bi-book"></i> Data Buku
            </a>

            <a href="{{ route('anggota.index') }}" class="btn btn-success">
                <i class="bi bi-people"></i> Data Anggota
            </a>

            <a href="/test-query" class="btn btn-info text-white">
                <i class="bi bi-search"></i> Test Query
            </a>

            <a href="/test-accessor-scope" class="btn btn-warning">
                <i class="bi bi-gear"></i> Test Accessor & Scope
            </a>

        </div>
    </div>

</div>
@endsection