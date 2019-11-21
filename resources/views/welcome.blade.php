@extends("layout/master")

@section("title", "About Us | Sky Express")

@section("content")

    @include("inc/header")

    
    <!--main cover section-->
    <div class="main-cover">
        <div class="container">
            <div class="main-cover-text">
                <h1 data-aos="fade-right" data-aos-duration="1500">
                    Savršeno ukusne praline <br>
                    i naše male porodične proizvodnje
                </h1>
                <a href="#" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    Saznaj više
                </a>
            </div>
            <div class="main-cover-slider">
               <div class="main-slider">
                   <div class="main-slider-item">
                       <div class="item-img">
                           <img src="{{ asset('images/web/slider-img1.jpg') }}">
                       </div>
                       <div class="slider-gold-div"></div>
                       <div class="slider-brown-div">
                           <h4>Korporativni pokloni</h4>
                       </div>
                   </div>

                   <div class="main-slider-item">
                       <div class="item-img">
                           <img src="{{ asset('images/web/slider-img2.jpg') }}">
                       </div>
                       <div class="slider-gold-div"></div>
                       <div class="slider-brown-div">
                            <h4>Za hrabre i odvažne</h4>
                       </div>
                   </div>

                   <div class="main-slider-item">
                       <div class="item-img">
                           <img src="{{ asset('images/web/slider-img1.jpg') }}">
                       </div>
                       <div class="slider-gold-div"></div>
                       <div class="slider-brown-div">
                            <h4>Korporativni pokloni</h4>
                        </div>
                   </div>

                   <div class="main-slider-item">
                       <div class="item-img">
                           <img src="{{ asset('images/web/slider-img2.jpg') }}">
                       </div>
                       <div class="slider-gold-div"></div>
                       <div class="slider-brown-div">
                            <h4>Za hrabre i odvažne</h4>
                       </div>
                   </div> 
               </div>
            </div>
        </div>
    </div>
    <!--gold line after-main cover section-->
    <div class="gold-line"></div>
    <div class="brown-line"></div>
    <!--page content-->
    <div id="page-content">
        <!--savrseno ukusne praline sekcija-->
        <div class="section-ukusne-praline">
            <div class="container">
                <div class="section-ukusne-praline-inner">
                    <div class="praline-text" data-aos="fade-up" data-aos-duration="1000">
                        <h1>Savršeno ukusne praline</h1>
                        <p>
                        Čokolaterija San Marina je mesto gde godinama nedosanjane čokoladne poslastice čekaju na svoj trenutak.
                        Tradicionalnom tehnologijom, uz neizmernu ljubav i igru mašte, stvaramo najlepše harmonije emocija
                        pretočene u čokoladu. Dobrodošli u naš slatki svet. 
                        Čokolada koja ne čeka na poseban trenutak. Ona ga stvara.
                        </p>
                    </div>
                    <div class="praline-istaknuto">
                        <div class="row">
                            <div class="col-sm-4 thumbnail-praline online-shop" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                                <div class="thumbnail-img">
                                    <img src="{{ asset('images/web/prvaprodavnica.jpg') }}">
                                    <div class="online-shop-text">
                                        <h4>Online shop</h4>
                                    </div>
                                    <div class="bottom-border"></div>
                                </div>
                            </div>
                            <div class="col-sm-4  thumbnail-praline proizvodi" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="700"> 
                                <div class="thumbnail-img">
                                    <img src="{{ asset('images/web/drugaprodavnica.jpg') }}">
                                    <div class="proizvodi-text">
                                        <h4>Savršeno ukusni proizvodi</h4>
                                        <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                        </p>
                                        <a href="#">pogledaj proizvode</a>
                                    </div>
                                    <div class="bottom-border"></div>
                                </div>
                            </div>
                            <div class="col-sm-4  thumbnail-praline posetite-nas" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="900">
                                <div class="thumbnail-img">
                                    <img src="{{ asset('images/web/trecaprodavnica.jpg') }}">
                                    <div class="online-shop-text">
                                        <h4>Posetite nas...</h4>
                                    </div>
                                    <div class="bottom-border"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--middle slider-->
      
        <div class="middle-slider-div">
        <div class="slider-up-line"></div>
            <div class="container">
                <div class="middle-slider-div-inner">
                    <div class="triangle-slider-div">
                        <div class="slider-logo-div">
                            <img src="{{ asset('images/web/slider-logo.png') }}">
                        </div>
                        <div class="triangle-slider">
                            <div class="triangle-slider-container">
                                <div><img class="triangle-slider-img" src="{{ asset('images/web/kuglica2.png') }}"></div>
                                <div><img class="triangle-slider-img" src="{{ asset('images/web/kuglica2.png') }}"></div>
                                <div><img class="triangle-slider-img" src="{{ asset('images/web/kuglica2.png') }}"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--middle slider end-->
        <div class="brown-separate-div"></div>
        <!--nasa selekcija section-->
        <div class="nasa-selekcija-section">
            <div class="container">
                <div class="section-title">
                    <h1>Naša selekcija</h1>
                    <p>Najlepši proizvodi od sad i u našoj online prodavnici</p>
                </div>
                <div class="row mob-row">
                    <div class="col-sm-3">
                        <div class="nasa-selekcija-istaknuto" data-aos="flip-left" data-aos-duration="2000">
                                <div class="pointed-out-img">
                                    <img src="{{ asset('images/web/nasaselekcija1.jpg') }}">
                                </div>
                                <div class="pointed-out-price">
                                    1200,00 rsd
                                </div>
                                <div class="pointed-out-descriptions">
                                    <span class="descriptions-title">Praline sa ukusom vanile</span><br>
                                    <span class="description-quantity">pakovanje:100g</span>
                                </div>
                                <div class="pointed-out-decoration">
                                    <img src="{{ asset('images/web/decoration-line.png') }}">
                                </div>
                                <div class="pointed-out-cart">
                                    <img class="rotate-icon" src="{{ asset('images/web/new-cart.png') }}">
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="nasa-selekcija-istaknuto" data-aos="flip-left" data-aos-duration="2000">
                                <div class="pointed-out-img">
                                    <img src="{{ asset('images/web/selekcija2.jpg') }}">
                                </div>
                                <div class="pointed-out-price">
                                    2400,00 rsd
                                </div>
                                <div class="pointed-out-descriptions">
                                    <span class="descriptions-title">Praline sa ukusom vanile</span><br>
                                    <span class="description-quantity">pakovanje:100g</span>
                                </div>
                                <div class="pointed-out-decoration">
                                    <img src="{{ asset('images/web/decoration-line.png') }}">
                                </div>
                                <div class="pointed-out-cart">
                                    <img class="rotate-icon" src="{{ asset('images/web/new-cart.png') }}">
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="nasa-selekcija-istaknuto" data-aos="flip-left" data-aos-duration="2000">
                                <div class="pointed-out-img">
                                    <img src="{{ asset('images/web/selekcija3.jpg') }}">
                                </div>
                                <div class="pointed-out-price">
                                    1200,00 rsd
                                </div>
                                <div class="pointed-out-descriptions">
                                    <span class="descriptions-title">Praline sa ukusom vanile</span><br>
                                    <span class="description-quantity">pakovanje:100g</span>
                                </div>
                                <div class="pointed-out-decoration">
                                    <img src="{{ asset('images/web/decoration-line.png') }}">
                                </div>
                                <div class="pointed-out-cart">
                                    <img class="rotate-icon" src="{{ asset('images/web/new-cart.png') }}">
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="nasa-selekcija-istaknuto" data-aos="flip-left" data-aos-duration="2000">
                                <div class="pointed-out-img">
                                    <img src="{{ asset('images/web/selekcija4.jpg') }}">
                                </div>
                                <div class="pointed-out-price">
                                    1200,00 rsd
                                </div>
                                <div class="pointed-out-descriptions">
                                    <span class="descriptions-title">Praline sa ukusom vanile</span><br>
                                    <span class="description-quantity">pakovanje:100g</span>
                                </div>
                                <div class="pointed-out-decoration">
                                    <img src="{{ asset('images/web/decoration-line.png') }}">
                                </div>
                                <div class="pointed-out-cart">
                                    <img class="rotate-icon" src="{{ asset('images/web/new-cart.png') }}">
                                </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!--nasa selekcija section end-->
        <!--newsletter section-->
        <div class="newsletter-div">
            <div class="container">
                <div class="newsletter-inner">
                    <div class="newsletter-left">
                        <h1>Newsletter</h1>
                        <span>Slatke novosti i ponude direktno u inbox</span>
                    </div>
                    <div class="newsletter-right">
                        <div class="newsletter-input-div">
                            <input type="email" class="newsletter-input" placeholder="Email adresa">
                        </div>
                        <div class="newsletter-btn-div">
                            <a href="#">Prijavi se</a>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        <!--newsletter section end-->
        <div class="brown-separate-div"></div>
        <!--blog-->
        <div class="blog-main-div">
            <div class="container">
                <div class="section-title">
                    <h1>Slatki blog</h1>
                    <p>Za sladokusce i radoznale</p>
                </div>
                <div class="row mob-row">
                    <div class="col-sm-6">
                        <div class="single-post" data-aos="zoom-in-up" data-aos-duration="2000">
                            <div class="post-img">
                                <img src="{{ asset('images/web/blog.jpg') }}">
                            </div>
                            <div class="post-info">
                                <h4>Savršeno ukusni pokloni</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Libero aspernatur nesciunt omnis quisquam dicta expedita
                                    ipsum! Nam dignissimos quasi nihil saepe a voluptatem 
                                </p>
                                <a class="btn-blog" href="#">detaljnije</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-post" data-aos="zoom-in-up" data-aos-duration="2000">
                            <div class="post-img">
                                <img src="{{ asset('images/web/blog.jpg') }}">
                            </div>
                            <div class="post-info">
                                <h4>Savršeno ukusni pokloni</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Libero aspernatur nesciunt omnis quisquam dicta expedita
                                    ipsum! Nam dignissimos quasi nihil saepe a voluptatem 
                                </p>
                                <a class="btn-blog" href="#">detaljnije</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-post" data-aos="zoom-in-up" data-aos-duration="2000">
                            <div class="post-img">
                                <img src="{{ asset('images/web/blog.jpg') }}">
                            </div>
                            <div class="post-info">
                                <h4>Savršeno ukusni pokloni</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Libero aspernatur nesciunt omnis quisquam dicta expedita
                                    ipsum! Nam dignissimos quasi nihil saepe a voluptatem 
                                </p>
                                <a class="btn-blog" href="#">detaljnije</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-post" data-aos="zoom-in-up" data-aos-duration="2000">
                            <div class="post-img">
                                <img src="{{ asset('images/web/blog.jpg') }}">
                            </div>
                            <div class="post-info">
                                <h4>Savršeno ukusni pokloni</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Libero aspernatur nesciunt omnis quisquam dicta expedita
                                    ipsum! Nam dignissimos quasi nihil saepe a voluptatem 
                                </p>
                                <a class="btn-blog" href="#">detaljnije</a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!--blog end-->
    </div>
    <!--end of page content-->
    </div>

    <!--script section-->

    <!--main slider init-->
    <script>
    $('.main-slider').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        prevArrow:"<img class='a-left control-c prev slick-prev' src='{{ asset('images/web/slider-arrow-left.png') }}'>",
        nextArrow:"<img class='a-right control-c next slick-next' src='{{ asset('images/web/slider-arrow-right.png') }}'>"
    });
    </script>
    <!--main slider end-->
    <!--triangle slider-->
    <script>
        $('.triangle-slider-container').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay:true,
            prevArrow:"<img class='a-left control-c prev slick-prev triangle-left-arrow' src='{{ asset('images/web/slider-arrow-left.png') }}'>",
            nextArrow:"<img class='a-right control-c next slick-next triangle-right-arrow' src='{{ asset('images/web/slider-arrow-right.png') }}'>"
        });
    </script>
    <!--triangle slider end-->
    <!--menu -->
    <script>
        $(".mob-nav-btn").click(function(){
            $(".menu-ul").slideToggle();
        });
    </script>    
    <!--menu end-->
    <!--aos animation script-->
    <script>
        AOS.init();
    </script>
    <!---->
    <!--menu active class add and remove-->
    <script>
        $('.menu-ul-li').click(function(){
            if(!$(this).hasClass('menu-ul-li-active')){
                $('.menu-ul-li.menu-ul-li-active').removeClass('menu-ul-li-active');
                $(this).addClass('menu-ul-li-active');
            }
        })
    </script>
    <!---->
    <!--script section-->

    <!--script section end-->


   


    @include("inc/footer")


@endsection