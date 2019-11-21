@extends("layout/master")

@section("title", "San Marina | Sky Express")

@section("content")

    @include("inc/header")

<div id="page-content">
    <div class="page-content-inner">
             <!--page cover-->
        <div class="page-cover">
            <div class="container">
                <h1>Kreiranje naloga</h1>
            </div>
        </div>
        <div class="gold-line"></div>
        <div class="brown-line">
            <div class="container">
                <div class="navigation-bar">
                    <p class="navigation-bar-first-p">Vi ste ovde: Naslovna</p> <img src="{{ asset ('images/web/new-arrow.png') }}"> <p class="navigation-bar-second-p">Prodavnica čokolade</p>
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
                    <div class="kreirajte-nalog-div">
                        <div class="kreirajte-nalog-tekst">
                           <h4>REGISTRUJTE SE I KREIRAJTE VAŠ KORISNIČKI NALOG</h4>
                           <p>
                            Nakon unosa svih polja, kliknite na dugme "Kreirajte nalog".<br> 
                            Ako imate problema prilikom kreiranja korisničkog naloga, obratite nam se putem telefona <br> ili putem kontakt forme.<br>
                            Telefon: +xxx xx xx xx xxx | Kontakt.
                           </p>
                        </div>
                        <form>
                            <div class="kreiraj-nalog-input-holder">
                                <label>Ime</label><br>
                                <input type="text" class="kreiraj-nalog-input kreiraj-nalog-ime">
                            </div>
                            <div class="kreiraj-nalog-input-holder">
                                <label>Prezime</label><br>
                                <input type="text" class="kreiraj-nalog-input kreiraj-nalog-ime">
                            </div>
                            <div class="kreiraj-nalog-input-holder">
                                <label>Korisnički nalog(email)</label><br>
                                <input type="text" class="kreiraj-nalog-input kreiraj-nalog-ime">
                            </div>
                            <div class="kreiraj-nalog-input-holder">
                                <label>Lozinka</label><br>
                                <input type="text" class="kreiraj-nalog-input kreiraj-nalog-ime">
                            </div>
                            <div class="kreiraj-nalog-input-holder">
                                <label>Ponovite lozinku</label><br>
                                <input type="text" class="kreiraj-nalog-input kreiraj-nalog-ime">
                            </div>
                            <div class="kreiraj-nalog-input-holder">
                                <label>Adresa</label><br>
                                <input type="text" class="kreiraj-nalog-input kreiraj-nalog-ime">
                            </div>
                            <div class="kreiraj-nalog-input-holder">
                                <label>Grad</label><br>
                                <input type="text" class="kreiraj-nalog-input kreiraj-nalog-ime">
                            </div>
                            <div class="kreiraj-nalog-input-holder">
                                <label>Poštanski broj</label><br>
                                <input type="text" class="kreiraj-nalog-input kreiraj-nalog-ime">
                            </div>
                            <div class="kreiraj-nalog-input-holder">
                                <label>Telefon</label><br>
                                <input type="text" class="kreiraj-nalog-input kreiraj-nalog-ime">
                            </div>
                            <div class="kreiraj-nalog-input-holder">
                                <label>Moguće napomene za isporuku</label><br>
                                <textarea class="kreiraj-nalog-poruka" name="" id="" cols="30" rows="10"></textarea>
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


@include("inc/footer")


@endsection