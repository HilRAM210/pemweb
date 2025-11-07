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
            <a href="{{-- {{ route('kontak.create') }} --}}" class="btn btn-primary d-flex align-items-center">
                <i class="bi bi-plus-circle me-2"></i>
                Tambah Kontak
            </a>
        </div>

        <div class="card card-table p-4">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    {{-- Table Head --}}
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
                            <td>Budi</td>
                            <td>budi@example.com</td>
                            <td>08123456789</td>
                            <td><span class="badge bg-primary">Pekerjaan</span></td>
                            <td class="text-center">
                                <a href="#" class="btn btn-warning btn-sm me-1" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm" title="Hapus">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td>Ani</td>
                            <td>ani@example.com</td>
                            <td>08987654321</td>
                            <td><span class="badge bg-success">Keluarga</span></td>
                            <td class="text-center">
                                <a href="#" class="btn btn-warning btn-sm me-1" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm" title="Hapus">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td>Yono</td>
                            <td>citra@example.com</td>
                            <td>08555123456</td>
                            <td><span class="badge bg-info">Teman</span></td>
                            <td class="text-center">
                                <a href="#" class="btn btn-warning btn-sm me-1" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm" title="Hapus">
                                    <i class="bi bi-trash"></i>
                                </a>
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