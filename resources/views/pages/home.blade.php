@extends('layouts.main')

@section('content')
  <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Kelola Kontak Anda dengan Mudah</h1>
            <p class="lead mb-4">Ada untuk membantu Anda menyimpan dan mengorganisir semua informasi kontak penting dalam satu tempat yang aman dan mudah diakses.</p>
        </div>
    </section>

    <section class="container mb-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Fitur Unggulan</h2>
            <p class="text-muted">Semua yang Anda butuhkan untuk mengelola kontak dengan efisien</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card feature-card h-100 text-center p-4">
                    <div class="feature-icon">
                        <i class="bi bi-person-plus text-white" style="font-size: 1.5rem;"></i>
                    </div>
                    <h4>Tambah Kontak</h4>
                    <p class="text-muted">Tambahkan kontak baru dengan mudah melalui form yang sederhana dan intuitif.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card h-100 text-center p-4">
                    <div class="feature-icon">
                        <i class="bi bi-pencil-square text-white" style="font-size: 1.5rem;"></i>
                    </div>
                    <h4>Edit Informasi</h4>
                    <p class="text-muted">Perbarui informasi kontak kapan saja dengan sistem yang responsif.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card h-100 text-center p-4">
                    <div class="feature-icon">
                        <i class="bi bi-search text-white" style="font-size: 1.5rem;"></i>
                    </div>
                    <h4>Cari Kontak</h4>
                    <p class="text-muted">Temukan kontak yang Anda butuhkan dengan cepat menggunakan fitur pencarian.</p>
                </div>
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
  .feature-icon {
      width: 60px;
      height: 60px;
      background-color: #0d6efd;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
  }
  .feature-card {
      transition: transform 0.3s ease;
      border: none;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  }
  .feature-card:hover {
      transform: translateY(-10px);
  }
  .stats-section {
      background-color: #e9ecef;
      padding: 60px 0;
  }
  .stat-number {
      font-size: 3rem;
      font-weight: bold;
      color: #0d6efd;
  }
  .cta-section {
      background-color: #212529;
      color: white;
      padding: 80px 0;
  }
</style>