<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Interior</title>
    
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
                            <h3 style="padding-bottom: 65px">Galeri Interior Desain </h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header float-start float-lg-end'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url("admin/home?token=") }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Galeri Interior Desain</li>
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
                                    <h4 class="card-title">Tambah atau Hapus Konten Galeri</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <form action="{{ url("/admin/interior/upload?token=$token") }}" method="POST" enctype="multipart/form-data">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <label for="Judul"><strong>Judul</strong></label>
                                                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Gambar">
                                                    </div>
                            
                                                    <div class="form-group mt-3">
                                                        <label for="deskripsi"><strong>Deskripsi</strong></label>
                                                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" placeholder="Deskripsi Gambar"></textarea>
                                                    </div>
                                                    <div class="input-group mt-3">
                                                        <label class="input-group-text" for="gambar"><i
                                                            class="bi bi-upload"></i></label>
                                                        <input type="file" class="form-control" id="gambar" name="gambar">
                                                        
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <h4 class="card-title my-5">Galeri Interior</h4>

                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="1%">File</th>
                                                    <th>Judul Gambar</th>
                                                    <th>Deskripsi</th>
                                                    <th width="1%">OPSI</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($interior as $gambar)
                                                <tr>
                                                    <td><img width="150px" src="{{ url('/data_interior/'.$gambar->gambar) }}"></td>
                                                    <td>{{$gambar->judul}}</td>
                                                    <td>{!! $gambar->deskripsi !!}</td>
                                                    <td><a class="btn btn-danger" href="{{ url("/admin/interior/hapus/$gambar->id?token=$token") }}">HAPUS</a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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
