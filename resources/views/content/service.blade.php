<div class="service-section">
    <div class="col-md-12">
          <!-- Nav tabs -->
          <ul class="tablist" role="tablist">
              <li>Layanan Utama</li>
            <li role="presentation" class="active"><a href="#residential" aria-controls="residential" role="tab" data-toggle="tab">Interior Desain</a></li>
            <li role="presentation"><a href="#commercial" aria-controls="commercial" role="tab" data-toggle="tab">IPAL</a></li>
          </ul>
    </div>
    
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="residential">
                @foreach($interior as $gambar)
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="service-item">
                            <div class="service-thumb">
                                <img src="{{ url('/data_interior/'.$gambar->gambar) }}" alt="">
                            </div>
                            <div class="service-description">
                                <a href="#"><h3>{{$gambar->judul}}</h3></a>
                                {!! $gambar->deskripsi !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div role="tabpanel" class="tab-pane fade" id="commercial">
                @foreach($ipal as $gambar)
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="service-item">
                            <div class="service-thumb">
                                <img width="360" height="275" src="{{ url('/data_ipal/'.$gambar->gambar) }}" alt="">
                            </div>
                            <div class="service-description">
                                <a href="#"><h3>{{$gambar->judul}}</h3></a>
                                {!! $gambar->deskripsi !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        
        </div>
</div>