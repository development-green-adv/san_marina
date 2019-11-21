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
                        <h1>Vaša korpa</h1>
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
                            <!--korpa forma-->
                            <form id="cartForm" method="post" action="">
                                    <div class="tableResponsive">
                                        <table class="korpa" cellspacing="0">
                                                <tbody>
                                                    <tr class="naslovi">
                                                        <td class="slika">Slika</td>
                                                        <td class="kategorija">Grupa</td>
                                                        <td class="naziv">Proizvod</td>
                                                        <td class="kolicina">Količina</td>
                                                        <td class="cenaPojedinacno">Pojedinačna cena</td>
                                                        <td class="cenaUkupno">Ukupno</td>
                                                        <td class="obrisi">&nbsp;</td></tr>
                                                    <tr class="">
                                                        <td class="slika">
                                                            <a class="" href="#">
                                                                <img src="{{ asset('images/web/kuglica2.png') }}">
                                                            </a>
                                                        </td>
                                                        <td class="kategorija">Praline</td>
                                                        <td class="naziv">
                                                            <a class="" href="#" title="title">
                                                                Marcipan praline 									
                                                            </a>
                                                            <br>
                                                            <span style="font-size:12px;padding-top:5px;color:#848484"></span>
                                                        </td>
                                                        <td class="kolicina amount"> x 1</td>
                                                        <td class="cenaPojedinacno price">820,00 rsd</td>
                                                        <td class="cenaUkupno">820,00 rsd</td>
                                                        <td class="obrisi">
                                                            <a class="btn-obrisi" title="Ukloni artikal?" data-cart="164" href="#Obrisi-proizvod">
                                                                <img src="https://www.prodajaparfema.rs/cms/template/deleteFromCart.png">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="slika">
                                                            <a class="" href="#">
                                                                <img src="{{ asset('images/web/kuglica2.png') }}">
                                                            </a>
                                                        </td>
                                                        <td class="kategorija">Praline</td>
                                                        <td class="naziv">
                                                            <a class="" href="#" title="title">
                                                                Praline sa likerom 									
                                                            </a>
                                                            <br>
                                                            <span style="font-size:12px;padding-top:5px;color:#848484"></span>
                                                        </td>
                                                        <td class="kolicina amount"> x 1</td>
                                                        <td class="cenaPojedinacno price">820,00 rsd</td>
                                                        <td class="cenaUkupno">820,00 rsd</td>
                                                        <td class="obrisi">
                                                            <a class="btn-obrisi" title="Ukloni artikal?" data-cart="164" href="#Obrisi-proizvod">
                                                                <img src="https://www.prodajaparfema.rs/cms/template/deleteFromCart.png">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="ukupno noBorder">
                                                        <td colspan="8">UKUPNO ZA PLAĆANJE: <span>820,00 rsd</span>
                                                        </td>
                                                    </tr>
                                                    <tr class=""><td colspan="8"></td></tr>
                                                </tbody>
                                        </table>
                                    </div>

                                
                                    <div class="procesRegistracije">
                                        <div class="leftGhost">
                                            <h4 class="bigGhost">PODACI O DOSTAVI</h4>

                                            <div class="styled-input required">
                                                <label>Ime i prezime</label><br>
                                                <input class="input-style" type="text" name="ghostName" value="" autocomplete="off" readonly="" onfocus="this.removeAttribute('readonly');">
                                                <div class="checkValue"></div>
                                                <span style=""></span>
                                            </div>

                                            <div class="styled-input required">
                                                <label>Adresa</label><br>   
                                                <input class="input-style" type="text" name="ghostAddress" value="" autocomplete="" readonly="" onfocus="this.removeAttribute('readonly');">
                                                <div class="checkValue"></div>
                                                <span></span>
                                            </div>

                                            <div class="styled-input required">
                                                <label>Grad</label><br>
                                                <input class="input-style" type="text" name="ghostTown" value="" autocomplete="address-level2" readonly="" onfocus="this.removeAttribute('readonly');">
                                            
                                                <div class="checkValue"></div>
                                                <span></span>
                                            </div>

                                            <div class="styled-input required">
                                                <label>Poštanski broj</label><br>
                                                <input class="input-style" type="text" name="ghostPib" value="" autocomplete="off" readonly="" onfocus="this.removeAttribute('readonly');">
                                            
                                                <div class="checkValue"></div>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="rightGhost">
                                            <h4 class="bigGhost">KONTAKT PODACI</h4>

                                            <div class="styled-input required">
                                                <label>Kontakt telefon</label><br>
                                                <input class="input-style" type="text" name="ghostPhone" value="" autocomplete="tel" readonly="" onfocus="this.removeAttribute('readonly');">
                                                
                                                <div class="checkValue"></div>
                                                <span></span>
                                            </div>

                                            <div class="styled-input required">
                                                <label>Email adresa</label><br>
                                                <input class="input-style" type="text" name="ghostEmail" value="" autocomplete="email" readonly="" onfocus="this.removeAttribute('readonly');">
                                                <div class="checkValue"></div>
                                                <span></span>
                                            </div>

                                            <div class="styled-input required">
                                                    <label class="textareaLabel">Moguće napomene za isporuku</label><br>
                                                <textarea class="textarea" name="ghostNotes"></textarea>
                                                <span></span>
                                            </div>
                                        </div>

                                        *Nakon prvog poručivanje Vaši lični podaci ostaju u bazi do početka narednog dana.
                                        <br>
                                        *Nakon isteka navedenog vremenskog perioda, podaci se automatski brišu iz baze.
                                    </div>
                            
                                    <div class="tableResponsive">
                                        <table class="korpa ghost" cellspacing="0">
                                            <tbody>
                                                <tr class="right">
                                                    <td colspan="2" class="terms">
                                                        <span>Plaćanje vršim:</span>
                                                        <a href="http://www.dailyexpress.rs/rs/cenovnik/" target="_blank">Pouzećem kurirskoj službi &nbsp;&nbsp;&nbsp;</a>
                                                        <label class="labelCheck">
                                                        <input type="radio" name="payment_method" value="Pouzećem" checked="">
                                                        <span class="checkmark radio"></span>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr class="right">
                                                    <td colspan="2" class="terms">
                                                        Slažem se sa
                                                        <a href="https://www.prodajaparfema.rs/sr/zastita-privatnosti" target="_blank">politikom privatnosti &nbsp;&nbsp;&nbsp;</a>
                                                        <label class="labelCheck">
                                                        <input type="checkbox" name="saglasnost" value="Saglasan">
                                                        <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr class="right"><td colspan="8" style="padding-top: 25px;"><a class="product-buy-now btn-poruci" style="color:#fff">Poruči</a></td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            <!--forma korpa-->
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