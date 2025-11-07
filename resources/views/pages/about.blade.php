@extends('layouts.main')

@section('content')
    {{-- Hero Section --}}
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Tentang Kami</h1>
            <p class="lead mb-4">Mengenal lebih jauh misi kami untuk membantu Anda tetap terorganisir.</p>
        </div>
    </section>

    {{-- Content Section --}}
    <section class="container mb-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Misi Kami</h2>
            <p class="text-muted">Gaktau</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <div class="col-md-8">
                <h4 class="fw-bold mb-3">Cerita di Balik Aplikasi Ini</h4>
                <p class="text-muted">
                    kurang tau
                </p>
            </div>
        </div>
    </section>
@endsection

<style>
  .hero-section {
    background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
    color: white;
    padding: 100px 0;
    margin-bottom: 50px;
  }
</style>