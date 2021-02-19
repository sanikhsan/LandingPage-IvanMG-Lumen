                <!-- .container-->
                <div class="container">
                    <div class="row">
                        <div class="footer-top">
                            <div class="col-md-3 col-sm-6">
                                <div class="logo footer-logo">
                                    <a title="fontanero" href="index.html">
                                        <img src="asset_landing/img/logo.png" alt="fontanero">
                                    </a>
                                    <p>{{ $seo->description }}.</p>
                                </div>									
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="news list-group">
                                    <h4>Berita Terbaru</h4>
                                    <ul>
                                        <li>
                                            <div class="news-list">
                                                <span class="date">February 9, 2016</span>
                                                <p>Consectetuer adipiscing aenean</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="news-list">
                                                <span class="date">February 9, 2016</span>
                                                <p>Consectetuer adipiscing aenean commodo ligula eget dolor.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>									
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="responsability">
                                    <h4>Social Media</h4>
                                    <ul>
                                        <li><a href="{{ $sites->facebook }}">Facebook</a></li>
                                        <li><a href="{{ $sites->twitter }}">Twitter</a></li>
                                        <li><a href="{{ $sites->LinkedIn }}">LinkedIn</a></li>
                                        <li><a href="#">Google Plus</a></li>
                                    </ul>
                                </div>									
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="contact-us">
                                    <h4>Hubungi Kami</h4>
                                    <address>
                                        {{ $sites->alamat }}
                                    </address>
                                    <address>
                                        <span>Email :</span> 
                                        <a href="mailto:{{ $sites->email }}">{{ $sites->email }}</a> 
                                    </address>
                                    <address>
                                        <span>Kontak Kami :</span> 
                                        Telepon: {{ $sites->no_telp }} <br>
                                        WhatsApp: {{ $sites->no_wa }} <br>
                                    </address>
                                </div>									
                            </div>
                        </div>
                        <!-- .footer-top-->
                    </div>

                    <!-- .row-->
                    <div class="row">
                        <div class="footer">
                            <div class="col-md-6 col-xs-12 col-sm-6">
                                <div class="copyright">
                                    <p>Copyright {{ $seo->title }}. | Design by <a href="{{ route('landing') }}">uiCookies</a></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-6">
                                <div class="footer-social social">
                                    <ul>
                                        <li><a href="{{ $sites->facebook }}"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="{{ $sites->twitter }}"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="{{ $sites->LinkedIn }}"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- .footer-->
                    </div>
                    <!-- .row-->
                </div>
                <!-- .container-->