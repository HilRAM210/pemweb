@extends('layouts.main')

@section('content')
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Daftar Kontak Anda</h1>
            <p class="lead mb-4">Lihat, kelola, dan perbarui semua kontak Anda di satu tempat.</p>
        </div>
    </section>

    <section class="container mb-5">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold mb-0">Semua Kontak</h2>
            <a href="/create" class="btn btn-primary d-flex align-items-center">
                <i class="bi bi-plus-circle me-2"></i>
                Tambah Kontak
            </a>
        </div>

        <div class="card card-table p-4">

            <form action="" method="GET" class="mb-4">
                <div class="input-group">
                    <input type="text" 
                        name="search" 
                        class="form-control" 
                        placeholder="Cari kontak (nama, email, no. telepon...)" 
                        value="{{ request('search') }}">
                    
                    <button class="btn btn-primary" type="submit">
                        <i class="bi bi-search"></i> Cari
                    </button>
                </div>
            </form>
            
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">No. Telepon</th>
                            <th scope="col">Grup</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Yanto</td>
                            <td>yanto@example.com</td>
                            <td>08123456789</td>
                            <td><span class="badge bg-primary">Pekerjaan</span></td>
                            <td class="text-center">
                                <a href="#" class="btn btn-warning btn-sm me-1" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <form action="#" method="POST" class="d-inline">
                                    <button type="submit" class="btn btn-danger btn-sm" title="Hapus">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">1</th>
                            <td>Yanti</td>
                            <td>yanti@example.com</td>
                            <td>08123456789</td>
                            <td><span class="badge bg-primary">Pekerjaan</span></td>
                            <td class="text-center">
                                <a href="#" class="btn btn-warning btn-sm me-1" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <form action="#" method="POST" class="d-inline">
                                    <button type="submit" class="btn btn-danger btn-sm" title="Hapus">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">1</th>
                            <td>Yantu</td>
                            <td>yantu@example.com</td>
                            <td>08123456789</td>
                            <td><span class="badge bg-primary">Pekerjaan</span></td>
                            <td class="text-center">
                                <a href="#" class="btn btn-warning btn-sm me-1" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <form action="#" method="POST" class="d-inline">
                                    <button type="submit" class="btn btn-danger btn-sm" title="Hapus">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
  
  .card-table {
    border: none;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    border-radius: .375rem;
  }
</style>