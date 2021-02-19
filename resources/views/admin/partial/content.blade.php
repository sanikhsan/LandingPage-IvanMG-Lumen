<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class='iconly-boldShow'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Tampilan Halaman</h6>
                                    <h6 class='font-extrabold mb-0'>112.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class='iconly-boldProfile'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Kunjungan Hari Ini</h6>
                                    <h6 class='font-extrabold mb-0'>183.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <form action="{{ url("/admin/home/update?token=$token") }}" method="POST">
        <div class="page-heading">
            <section class="section">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header">
                                <a href="{{ route('landing') }}"><h4 class="card-title">Edit Pesan Selamat Datang</h4></a>
                            </div>
                            <div class="card-body">
                                <input type="hidden" id="id" class="form-control" name="id" value="{{ $about->id }}" placeholder="id">
                                <textarea name="tentang" id="tentang" cols="30" rows="10">{{ $about->tentang }}</textarea>
                            </div>

                            <div class="card-header">
                                <a href="{{ route('landabout') }}"><h4 class="card-title">Edit Deskripsi Tentang Kami</h4></a>
                            </div>
                            <div class="card-body">
                                <textarea class="form-control" name="deskripsi" id="deskripsi" cols="5" rows="5" style="border-width: 3px">{{ $about->deskripsi }}</textarea>
                            </div>

                            <div class="card-header">
                                <a href="{{ route('landcontact') }}"><h4 class="card-title">Edit Deskripsi Kontak</h4></a>
                            </div>
                            <div class="card-body">
                                <textarea name="kontak" id="kontak" cols="30" rows="10">{{ $about->kontak }}</textarea>
                            </div>

                            <div class="card-header">
                                <a href="{{ route('landcontact') }}"><h4 class="card-title">Edit Google Maps</h4></a>
                            </div>
                            <div class="card-body">
                                <textarea class="form-control" name="googlemaps" id="googlemaps" cols="5" rows="5" style="border-width: 3px">{{ $about->googlemaps }}</textarea>
                            </div>

                            <div class="card-body">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </form>
</div>