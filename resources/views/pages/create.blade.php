@extends('layouts.main')

@section('content')
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Tambah Kontak Baru</h1>
            <p class="lead mb-4">Isi formulir di bawah ini untuk menyimpan informasi kontak baru Anda.</p>
        </div>
    </section>

    <section class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-form p-4 p-md-5">
                    
                    <h3 class="fw-bold text-center mb-4">Formulir Kontak</h3>

                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Contoh: Budi Santoso" required>
                        </div>
                        
                        <div class="row g-3">
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label fw-bold">Alamat Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Contoh: budi@example.com">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="kontak" class="form-label fw-bold">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="kontak" name="kontak" placeholder="Contoh: 08123456789" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label fw-bold">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Contoh: Jl. Merdeka No. 10, Jakarta"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="grup" class="form-label fw-bold">Grup</label>
                            <select class="form-select" id="grup" name="grup">
                                <option value="" selected disabled>Pilih grup...</option>
                                <option value="Keluarga">Keluarga</option>
                                <option value="Teman">Teman</option>
                                <option value="Pekerjaan">Pekerjaan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>

                        <div class="text-end mt-4">
                            <a href="{{-- {{ route('kontak.index') }} --}}" class="btn btn-secondary me-2">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan Kontak</button>
                        </div>

                    </form>
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
  
  .card-form {
    border: none;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    border-radius: .375rem;
</style>