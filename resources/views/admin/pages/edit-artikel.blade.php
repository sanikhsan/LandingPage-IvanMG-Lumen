<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Artikel</title>
    
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
                            <h3 style="padding-bottom: 65px">Edit Konten Artikel </h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header float-start float-lg-end'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url("admin/home?token=") }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Artikel</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Perbaharui Artikel Interior Desain</h4>
                                </div>
                                <div class="card-body">
                                    <div id="interior">
                                        {{ $about->deskripsi }}
                                    </div>
                                </div>
                                <div class="card-header">
                                    <h4 class="card-title">Perbaharui Artikel IPAL</h4>
                                </div>
                                <div class="card-body">
                                    <div id="ipal">
                                        {{ $about->deskripsi }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            @include('admin.partial.footer')
        </div>
    </div>
    @include('admin.asset.js')
</body>

</html>
