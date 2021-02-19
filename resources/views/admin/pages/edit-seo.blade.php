<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfigurasi SEO</title>
    
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
                <h3 style="padding-bottom: 65px">Konfigurasi Pengaturan SEO</h3>
                {{-- <p class="text-subtitle text-muted">IvanMG</p> --}}
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header float-start float-lg-end'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url("admin/home?token=$token") }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">SEO</li>
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
                        <h4 class="card-title">Konfigurasi SEO Website</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ url("/admin/seo/update?token=$token") }}" method="POST">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Nama Website</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="hidden" id="id" class="form-control" value="{{ $getSeo->id }}" name="id"
                                                placeholder="id">
                                            <input type="text" id="title" class="form-control" value="{{ $getSeo->title }}" name="title"
                                                placeholder="Nama Website">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kata Kunci</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="email-id" class="form-control" value="{{ $getSeo->keyword }}" name="keyword"
                                                placeholder="Kata Kunci Pencarian">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Author</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="contact-info" class="form-control" value="{{ $getSeo->author }}" name="author"
                                                placeholder="Author">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Deskripsi Website</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <textarea type="text" id="contact-info" class="form-control" name="description" 
                                                placeholder="Keterangan Deskripsi Website">{{ $getSeo->description }}</textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Google Tag Verifikasi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="contact-info" class="form-control" value="{{ $getSeo->googletag }}" name="googletag"
                                                placeholder="Kode Verifikasi Google Web Master">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Bing Tag Verifikasi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="contact-info" class="form-control" value="{{ $getSeo->bingtag }}" name="bingtag"
                                                placeholder="Kode Verifikasi Bing Web Master">
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
