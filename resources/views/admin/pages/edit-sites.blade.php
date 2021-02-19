<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfigurasi Website</title>
    
    <!-- Asset CSS -->
        @include('admin.asset.css')
    <!-- End of Asset CSS -->

</head>

<body>
    <div id="app">
        
        <!-- Sidebar Menu -->
        @include('admin.partial.sidebar')
        <!-- End of Sidebar Menu -->

        <div id="main">
            <header class='mb-3'>
                <a href="#" class='burger-btn d-block d-xl-none'>
                    <i class='bi bi-justify fs-3'></i>
                </a>
            </header>
            
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 style="padding-bottom: 65px">Konfigurasi Pengaturan Website</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header float-start float-lg-end'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url("admin/home?token=$token") }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sites</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Konfigurasi Website IvanMG</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ url("/admin/sites/update?token=$token") }}" method="POST">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Alamat</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="hidden" id="id" class="form-control" name="id" value="{{ $getSites->id }}"
                                                placeholder="Alamat Perusahaan">
                                            <input type="text" id="alamat" class="form-control" name="alamat" value="{{ $getSites->alamat }}"
                                                placeholder="Alamat Perusahaan">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="email-id" class="form-control" name="email" value="{{ $getSites->email }}"
                                                placeholder="Email Perusahaan">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nomor Telepon</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="contact-info" class="form-control" name="no_telp" value="{{ $getSites->no_telp }}"
                                                placeholder="Nomor Handphone / Telepon">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nomor Whatsapp</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="contact-info" class="form-control" name="no_wa" value="{{ $getSites->no_wa }}"
                                                placeholder="Nomor Whatsapp">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Facebook</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="contact-info" class="form-control" name="facebook" value="{{ $getSites->facebook }}"
                                                placeholder="URL Facebook">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Twitter</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="contact-info" class="form-control" name="twitter" value="{{ $getSites->twitter }}"
                                                placeholder="URL Twitter">
                                        </div>
                                        <div class="col-md-4">
                                            <label>LinkedIn</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="contact-info" class="form-control" name="LinkedIn" value="{{ $getSites->LinkedIn }}"
                                                placeholder="URL LinkedIn">
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic Horizontal form layout section end -->

</div>
        @include('admin.partial.footer')
        </div>
    </div>
    @include('admin.asset.js')
</body>

</html>
