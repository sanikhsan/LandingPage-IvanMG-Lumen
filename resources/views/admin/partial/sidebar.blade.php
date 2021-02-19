<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ url("admin/home?token=".$token) }}"><img src="{{ url('asset_admin/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class='sidebar-hide d-xl-none d-block'><i class='bi bi-x bi-middle'></i></a>
                </div>
            </div>
        </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class='sidebar-title'>Menu</li>
                    
                    <li class="sidebar-item active ">
                        <a href="{{ url("admin/home?token=".$token) }}" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    {{-- <li class="sidebar-item  ">
                        <a href="{{ url("/admin/artikel?token=".$token) }}" class='sidebar-link'>
                            <i class="bi bi-info-circle-fill"></i>
                            <span>Postingan Artikel</span>
                        </a>
                    </li> --}}

                    <li class="sidebar-item  ">
                        <a href="{{ url("/admin/carousel?token=".$token) }}" class='sidebar-link'>
                            <i class="bi bi-card-image"></i>
                            <span>Gambar Utama</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{ url("/admin/interior?token=".$token) }}" class='sidebar-link'>
                            <i class="bi bi-images"></i>
                            <span>Galeri Interior Desain</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{ url("/admin/ipal?token=".$token) }}" class='sidebar-link'>
                            <i class="bi bi-images"></i>
                            <span>Galeri IPAL</span>
                        </a>
                    </li>
                    
                    <li class="sidebar-item  ">
                        <a href="{{ url("/admin/seo?token=".$token) }}" class='sidebar-link'>
                            <i class="bi bi-gear"></i>
                            <span>Pengaturan SEO</span>
                        </a>
                    </li>

                    <li class="sidebar-item ">
                        <a href="{{ url("/admin/sites?token=".$token) }}" class='sidebar-link'>
                            <i class="bi bi-globe"></i>
                            <span>Pengaturan Website</span>
                        </a>
                    </li>

                    <li class="sidebar-item ">
                        <a href="{{ url("/admin/logout") }}" class='sidebar-link'>
                            <i class="bi bi-door-open-fill"></i>
                            <span>Keluar</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>