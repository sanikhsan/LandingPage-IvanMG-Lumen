<div class="welcome-section">
    <div class="welcome-thumb">
        <img src="asset_landing/img/welcome.jpg" alt="welcome fontanero">
    </div>
    <div class="welcome-content">
      <h3>Selamat datang di {{ $seo->title }}</h3>
      <p>{!! $about->tentang !!} </p>
      <a class="btn" href="{{ route('landabout') }}">Read More</a>
    </div>
</div>
