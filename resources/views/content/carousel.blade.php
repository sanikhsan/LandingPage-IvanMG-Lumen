<section class="banner-section hidden-xs">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
          <ol class="carousel-indicators">
            @foreach ($carousel as $item)
            <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
            @endforeach
          </ol>
        <!-- Indicators -->

      <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
              @foreach ($carousel as $gambar)
                <div class="item {{ $loop->first ? ' active' : '' }}">
                    <img src="{{ url('/data_carousel/'.$gambar->gambar) }}" alt="{{ $gambar->judul }}">
                    <div class="carousel-caption">
                      <h1>{{ $gambar->judul }}</h1>
                      <p>{!! $gambar->deskripsi !!}</p>
                      <a class="btn" href="{{ route('landabout') }}">Learn More</a>
                    </div>
                </div>
              @endforeach
          </div>
    </div>
</section>