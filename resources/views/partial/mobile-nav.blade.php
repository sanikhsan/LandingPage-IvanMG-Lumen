<div class="offcanvas-menu offcanvas-effect visible-xs">
    <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
    <h1>fontanero sidebar Menu</h1>
    <div>
        <div>
            <ul id="menu">
                <li><a href="{{ route('landing') }}">Home</a></li>
                <li><a href="{{ route('landabout') }}">Tentang Kami</a></li>
                <li><a href="{{ route('service-interior') }}">Interior Desain</a></li>
                <li><a href="{{ route('service-ipal') }}">Pengolahan Limbah</a></li>
                {{-- <li class="dropdown"><a href="service.html">Services</a>
                        <ul class="dropdown-menu">
                          <li><a href="article-page.html">Water Heater</a></li>
                          <li><a href="article-page.html">Bathroom</a></li>
                          <li><a href="article-page.html">Toilet</a></li>
                          <li><a href="article-page.html">Tube and Shower</a></li>
                          <li><a href="article-page.html">Pipes and sweres</a></li>
                          <li><a href="article-page.html">Drainage</a></li>
                      </ul>
                  </li> --}}
                
                <li><a href="{{ route('landcontact') }}">Hubungi Kami</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- offcanvas-menu end -->	