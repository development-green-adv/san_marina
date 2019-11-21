@extends("layout/master")

@section("title", "Products | Sky Express")

@section("content")

    @include("inc/header")

<div id="page-content">
    <div class="page-content-inner">
             <!--page cover-->
        <div class="page-cover">
            <div class="container">
                <h1>Korporativne čokolade</h1>
            </div>
        </div>
        <div class="gold-line"></div>
        <div class="brown-line">
            <div class="container">
                <div class="navigation-bar">
                    <p class="navigation-bar-first-p">Vi ste ovde: Naslovna</p> <img src="{{ asset('images/web/new-arrow.png') }}"> <p class="navigation-bar-second-p">Prodavnica čokolade</p>
                </div>
            </div>
        </div>
        <!--end of page cover-->
        <!---->
        <div class="prodact">
            <div class="container">
                <div class="prodact-inner">
                    <div class="left-aside">
                        <h4>Prodavnica čokolade</h4>
                        <img src="{{ asset ('images/web/decoration-line.png') }}">
                        <div class="right-menu">
                            <ul class="right-menu-ul">
                                <li>Korporativne</li>
                                <li>Venčanja</li>
                                <li>Figure</li>
                                <li>Pokloni</li>
                                <li>Fontana</li>
                                <li>Telegram</li>
                                <li>Praline</li>
                                <li>Praline sa likerom</li>
                                <li>Voćne praline</li>
                                <li>Mlečne praline</li>
                                <li>Marcipan praline</li>
                                <li>Nut praline</li>
                                <li>Egzotik praline</li>
                                <li>Sugar Free</li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-aside">
                        <div class="all-product-wrapper">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="single-product" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="single-product-img">
                                            <img src="{{ asset ('images/web/selekcija2.jpg') }}">
                                        </div>
                                        <div class="single-product-price">
                                            2400,00 rsd
                                        </div>
                                        <div class="single-product-description">
                                           <span class="descriptions-title"> Praline sa ukusom vanile</span>
                                           <br>
                                           <span class="description-quantity">Pakovanje 100gr</span>
                                        </div>
                                        <div class="decoration-line-box">
                                            <img src="{{ asset ('images/web/decoration-line.png') }}">
                                        </div>
                                        <div class="single-prodact-cart">
                                            <img class="rotate-icon" src="{{ asset ('images/web/new-cart.png') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="single-product" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="single-product-img">
                                            <img src="{{ asset('images/web/selekcija3.jpg') }}">
                                        </div>
                                        <div class="single-product-price">
                                            2400,00 rsd
                                        </div>
                                        <div class="single-product-description">
                                           <span class="descriptions-title"> Praline sa ukusom vanile</span>
                                           <br>
                                           <span class="description-quantity">Pakovanje 100gr</span>
                                        </div>
                                        <div class="decoration-line-box">
                                            <img src="{{ asset('images/web/decoration-line.png') }}">
                                        </div>
                                        <div class="single-prodact-cart rotate-icon">
                                            <img class="rotate-icon" src="{{ asset ('images/web/new-cart.png') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="single-product" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="single-product-img">
                                            <img src="{{ asset('images/web/selekcija4.jpg') }}">
                                        </div>
                                        <div class="single-product-price">
                                            2400,00 rsd
                                        </div>
                                        <div class="single-product-description">
                                           <span class="descriptions-title"> Praline sa ukusom vanile</span>
                                           <br>
                                           <span class="description-quantity">Pakovanje 100gr</span>
                                        </div>
                                        <div class="decoration-line-box">
                                            <img src="{{ asset ('images/web/decoration-line.png') }}">
                                        </div>
                                        <div class="single-prodact-cart">
                                            <img class="rotate-icon" src="{{ asset ('images/web/new-cart.png') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="single-product" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="single-product-img">
                                            <img src="{{ asset ('images/web/selekcija2.jpg') }}">
                                        </div>
                                        <div class="single-product-price">
                                            2400,00 rsd
                                        </div>
                                        <div class="single-product-description">
                                           <span class="descriptions-title"> Praline sa ukusom vanile</span>
                                           <br>
                                           <span class="description-quantity">Pakovanje 100gr</span>
                                        </div>
                                        <div class="decoration-line-box">
                                            <img src="{{ asset ('images/web/decoration-line.png') }}">
                                        </div>
                                        <div class="single-prodact-cart">
                                            <img class="rotate-icon" src="{{ asset ('images/web/new-cart.png') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="single-product" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="single-product-img">
                                            <img src="{{ asset ('images/web/selekcija3.jpg') }}">
                                        </div>
                                        <div class="single-product-price">
                                            2400,00 rsd
                                        </div>
                                        <div class="single-product-description">
                                           <span class="descriptions-title"> Praline sa ukusom vanile</span>
                                           <br>
                                           <span class="description-quantity">Pakovanje 100gr</span>
                                        </div>
                                        <div class="decoration-line-box">
                                            <img src="{{ asset ('images/web/decoration-line.png') }}">
                                        </div>
                                        <div class="single-prodact-cart">
                                            <img class="rotate-icon" src="{{ asset ('images/web/new-cart.png') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="single-product" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="single-product-img">
                                            <img src="{{ asset('images/web/selekcija4.jpg') }}">
                                        </div>
                                        <div class="single-product-price">
                                            2400,00 rsd
                                        </div>
                                        <div class="single-product-description">
                                           <span class="descriptions-title"> Praline sa ukusom vanile</span>
                                           <br>
                                           <span class="description-quantity">Pakovanje 100gr</span>
                                        </div>
                                        <div class="decoration-line-box">
                                            <img src="{{ asset ('images/web/decoration-line.png') }}">
                                        </div>
                                        <div class="single-prodact-cart">
                                            <img class="rotate-icon" src="{{ asset ('images/web/new-cart.png') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="single-product" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="single-product-img">
                                            <img src="{{ asset('images/web/selekcija2.jpg') }}">
                                        </div>
                                        <div class="single-product-price">
                                            2400,00 rsd
                                        </div>
                                        <div class="single-product-description">
                                           <span class="descriptions-title"> Praline sa ukusom vanile</span>
                                           <br>
                                           <span class="description-quantity">Pakovanje 100gr</span>
                                        </div>
                                        <div class="decoration-line-box">
                                            <img src="{{ asset ('images/web/decoration-line.png') }}">
                                        </div>
                                        <div class="single-prodact-cart">
                                            <img class="rotate-icon" src="{{ asset ('images/web/new-cart.png') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="single-product" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="single-product-img">
                                            <img src="{{ asset('images/web/selekcija3.jpg') }}">
                                        </div>
                                        <div class="single-product-price">
                                            2400,00 rsd
                                        </div>
                                        <div class="single-product-description">
                                           <span class="descriptions-title"> Praline sa ukusom vanile</span>
                                           <br>
                                           <span class="description-quantity">Pakovanje 100gr</span>
                                        </div>
                                        <div class="decoration-line-box">
                                            <img src="{{ asset ('images/web/decoration-line.png') }}">
                                        </div>
                                        <div class="single-prodact-cart">
                                            <img class="rotate-icon" src="{{ asset ('images/web/new-cart.png') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="single-product" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="single-product-img">
                                            <img src="{{ asset('images/web/selekcija4.jpg') }}">
                                        </div>
                                        <div class="single-product-price">
                                            2400,00 rsd
                                        </div>
                                        <div class="single-product-description">
                                           <span class="descriptions-title"> Praline sa ukusom vanile</span>
                                           <br>
                                           <span class="description-quantity">Pakovanje 100gr</span>
                                        </div>
                                        <div class="decoration-line-box">
                                            <img src="{{ asset ('images/web/decoration-line.png') }}">
                                        </div>
                                        <div class="single-prodact-cart">
                                            <img class="rotate-icon" src="{{ asset ('images/web/new-cart.png') }}">
                                        </div>
                                    </div>
                                </div>

                               
                                <!--row end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---->
    </div>
</div>

@include("inc/footer")


@endsection