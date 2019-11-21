@extends("layout/master")

@section("title", "Korpa | San Marina")

@section("content")

    @include("inc/header")

        <!--page content-->
        <div id="page-content">
            <div class="page-content-inner">
                     <!--page cover-->
                <div class="page-cover">
                    <div class="container">
                        <h1>Ulogujte se</h1>
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
                                <h4>Informacije i podrška</h4>
                                <img src="{{ asset('images/web/decoration-line.png') }}">
                                <div class="right-menu">
                                    <ul class="right-menu-ul">
                                        <li>Vaša korpa</li>
                                        <li>Korisnički nalog</li>
                                        <li>izloguj se</li>
                                        <li>O nama</li>
                                        <li>Politika privatnosti</li>
                                        <li>Dostava</li>
                                        <li>Pomoć pri kupovini</li>
                                        <li>Korisnički servis</li>
                                        <li>Kontakt internet prodavnica</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="right-aside">
                            <!---->
                            <div class="kreirajte-nalog-div uloguj-se-div">
                                <div class="kreirajte-nalog-tekst">
                                   <h4>PRIJAVA</h4>
                                   <p>
                                    Nakon unosa u polja Korisničko ime i lozinka, kliknite na dugme "Prijava". 
                                    Ako ste zaboravili lozinku, kliknite na link "Zaboravili ste lozinku?" i
                                    generisaćemo novu lozinku koja će Vam biti poslata na email adresu koju
                                    ste uneli u polje Korisničko ime.
                                   </p>
                                </div>
                                <form>
                                    <div class="kreiraj-nalog-input-holder">
                                        <label>Korisničko ime (email)</label><br>
                                        <input type="text" class="kreiraj-nalog-input kreiraj-nalog-ime">
                                    </div>
                                    <div class="kreiraj-nalog-input-holder">
                                        <label>Lozinka</label><br>
                                        <input type="text" class="kreiraj-nalog-input kreiraj-nalog-ime">
                                    </div>
                                    <div class="forma-btn-holder">
                                        <a href="#"class="btn-poruci">PRIJAVA</a>
                                    </div>
                                </form>
                            </div> 
                            <!---->
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
            </div>
        </div>
        <!--end of page content-->

    @include("inc/footer")


@endsection