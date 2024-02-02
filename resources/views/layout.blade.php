<!doctype html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

  <title>HANA TRANS Usługi transportowe RZESZÓW</title>

  <link rel="canonical" href="https://hanatrans.pl/">
  <meta property="og:locale" content="pl_PL">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Strona główna - HANA TRANS Usługi transportowe RZESZÓW">
  <meta property="og:url" content="https://hanatrans.pl/">
  <meta property="og:site_name" content="HANA TRANS Usługi transportowe RZESZÓW">
  <meta name="twitter:card" content="summary_large_image">
  <meta charset="utf-8">
  <meta name="robots" content="index,follow">

  <meta name="description" content="HANA TRANS Usługi transportowe Rzeszów">

  <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://hanatrans.pl/","url":"https://hanatrans.pl/","name":"Strona główna - HANA TRANS Usługi transportowe RZESZÓW","isPartOf":{"@id":"https://hanatrans.pl/#website"},"datePublished":"2018-03-06T08:02:41+00:00","dateModified":"2018-03-06T08:02:41+00:00","breadcrumb":{"@id":"https://hanatrans.pl/#breadcrumb"},"inLanguage":"pl-PL","potentialAction":[{"@type":"ReadAction","target":["https://hanatrans.pl/"]}]},{"@type":"BreadcrumbList","@id":"https://hanatrans.pl/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Strona główna"}]},{"@type":"WebSite","@id":"https://hanatrans.pl/#website","url":"https://hanatrans.pl/","name":"HANA TRANS Usługi transportowe RZESZÓW","description":"","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://hanatrans.pl/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"pl-PL"}]}</script>
  <link rel="icon" href="{{asset('/images/favicon.png')}}" sizes="32x32">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&family=Nunito:ital,wght@0,300;0,400;1,400;1,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/css/app.css')}}?{{$rand}}">
  <link rel="stylesheet" href="{{asset('/css/container.css')}}">
</head>
<body data-controller="app" data-action="scroll->app#handleScroll">

  <button class="top-scroll hidden" data-action="click->app#scrollToTop:stop" data-app-target="stickyButton">
    <img src="{{asset('/images/arrow-up.svg')}}" alt="">
  </button>

  <div class="track-image" data-app-target="track">

    <div class="container flex-container">

      <header class="header">
        <img src="{{asset('/images/logo.png')}}" alt="" class="logo">
        <button class="menu-burger" data-action="click->app#showMenu">
          <img class="burger-image" src="{{asset('/images/burger.svg')}}" alt="">
        </button>

        <div class="menu" data-app-target="menu">
          <img class="close" src="{{asset('/images/close.svg')}}" alt="" data-app-target="closeMenu" data-action="click->app#hideMenu">
          <div class="menu-container-items">
            <a class="menu-item" href="#offer" data-action="click->app#hideMenu">Oferta</a>
            <a class="menu-item" href="#fleet" data-action="click->app#hideMenu">Nasza Flota</a>
            <a class="menu-item" href="#contact" data-action="click->app#hideMenu">Kontakt</a>
            <a class="menu-item menu-item-button" href="#order" data-action="click->app#hideMenu">Złóż zlecenie</a>
          </div>
        </div>
      </header>

        <div class="layer-mobile">
          <div>
            <h1 class="layer-text-header">PRZEWÓZ TOWARÓW</h1>
            <p class="layer-text-description">KRAJOWY I MIĘDZYNARODOWY</p>
          </div>

          <div class="layer-container">
            <p class="layer-description">
              Nowoczesne i różnorodne środki transportu umożliwiają wykonywanie <br> usług transportowych na najwyższym poziomie,
              realizowanie <br> różnorodnych zleceń i możliwie jak najkrótszy czas transportu.
            </p>

            <div class="right-col">
              <span class="scroll" data-action="click->app#scrollDown">
                <img src="{{asset('/images/arrow-down.svg')}}" alt="">
              </span>
              <a class="white-button" href="#order">
                <span>Złóż zlecenie</span>
              </a>
            </div>
          </div>
        </div>
    </div>

  </div>

  <div class="container">
    <section class="warranty" data-app-target="warranty">
      <h2 class="warranty-title">
        Przekazując nam zlecenie <br> mają Państwo gwarancje :
      </h2>

      <div class="warranty-container" data-app-target="warrantyAnimate" data-action="mouseenter->app#startAnimate:stop">
        <div class="warranty-item">
          <span class="number number-one" data-app-target="number">01</span>
          <span class="text">
            Profesjonalnie wykonanej usługi transportowej
          </span>
        </div>
        <div class="warranty-item">
          <span class="number number-two" data-app-target="number">02</span>
          <span class="text">Bezpieczeństwa przewożonych materiałów</span>
        </div>
        <div class="warranty-item">
          <span class="number number-three" data-app-target="number">03</span>
          <span class="text">Możliwości wglądu w przebieg zlecenia</span>
        </div>
        <div class="warranty-item">
          <span class="number number-four" data-app-target="number">04</span>
          <span class="text">Wykorzystania nowoczesnego sprzętu</span>
        </div>
      </div>
    </section>
  </div>

  <section class="truck">
    <img class="truck-image" src="{{asset('/images/red-truck-2.png')}}" alt="">
  </section>

  <section class="offer-image-after" id="offer">
    <div class="container">
      <section class="offer">
        <h3 class="big-header">
          Oferta
        </h3>

        <p class="offer-text">
          Oferujemy usługi transportowe zarówno z użyciem własneego taboru, jak i <br>
          przy współpracy z gronem godnych zaufania przewoźników. <br>
          Doświadczeni kierowcy oraz ubezpieczenie każdego towaru polisą OCP <br>
          gwarantują, iż będziecie Państwo spokojni o powierzony nam ładunek.
        </p>

        <div class="offer-detail">
          <h4 class="detail-header">
            Nasza oferta skierowana jest przede wszystkim na:
          </h4>

          <div class="detail-wrapper">
            <div class="detail-item">
              <p class="detail-header">
                Lokalny i krajowy przewóz towarów
              </p>
              <ul class="detail-list">
                <li>cało pojazdowy</li>
                <li>częściowy</li>
                <li>drobnicowy</li>
                <li>przesyłki o niestandardowych wymiarach</li>
              </ul>
            </div>

            <div class="detail-item">
              <p class="detail-header">
                Międzynarodowy przewóz towarów
              </p>
              <ul class="detail-list">
                <li>cało pojazdowy</li>
                <li>częściowy</li>
                <li>drobnicowy</li>
                <li>przesyłki o niestandardowych wymiarach</li>
              </ul>
            </div>

          </div>
        </div>

        <div class="offer-detail">
          <h3 class="detail-header">
            Usługi spedycyjne:
          </h3>

          <div class="detail-wrapper">
            <div class="detail-item">
              <p class="detail-header">
                Obsługujemy
              </p>
              <ul class="detail-list">
                <li>Duże, średnie i małe przedsiębiorstwa</li>
                <li>Instytucje</li>
                <li>Biura</li>
                <li>Osobny prywatne</li>
              </ul>
            </div>

            <div class="detail-item">
              <p class="detail-header">
                Specjalizujemy się w transportach pomiędzy <br> Polską a krajami Unii europejskiej, przede wszystkim:
              </p>
              <ul class="detail-list">
                <li>Belgią</li>
                <li>Holandią</li>
                <li>WielkąBrytanią</li>
                <li>Niemcami</li>
                <li>Francją</li>
              </ul>
            </div>

          </div>
        </div>
      </section>
    </div>
  </section>

  <section class="phone-contact" id="contact">
    <div class="container">
      <p class="phone-text">
        Można skontaktować się z nami telefonicznie, e-mailowo lub przez formularz: Złóż zlecenie <br>
        Bezpiecznie, szybko i profesjonalnie przewieziemy wszystko. Zaufało nam już setki klientów!
      </p>
      <div class="phone-footer">
        <a class="phone" href="tel:+48 728 567 000">Tel +48 728 567 000</a>
        <a class="email" href="mailto:biuro@hanatrans.pl">Email: biuro@hanatrans.pl</a>
      </div>
    </div>
  </section>

  <div class="container">
    <section class="form" id="order">
      <div class="grid-container">
        <div class="col">
          <h3 class="form-header">
            ZŁÓŻ ZLECENIE
          </h3>

          <p class="form-text">
            OFERUJEMY KOMPLEKSOWE ROZWIĄZANIA <br>
            LOGISTYCZNE W ZAKRESIE TRANSPORTU <br>
            KRAJOWEGO I MIĘDZYNARODOWEGO.
            <br>
            <br>

            GWARANTUJEMY PAŃSTWU TERMINOWE I <br>
            RZETELNE WYKONANIE USŁUG <br>
            TRANSPORTOWYCH. NASI PRACOWNICY <br>
            UDZIELAJĄ SZCZEGÓŁOWYCH INFORMACJI, <br>
            ODPOWIADAJĄC NA PYTANIA KLIENTÓW.
          </p>
        </div>
        <div class="col">
          <form action="" class="order-form" data-action="submit->app#submitForm:prevent" data-app-target="form">
            <label for="">
              <span>Imię i nazwisko/ Nazwa firmy</span> <span class="error-details"></span>
              <input type="text" placeholder="Imię i nazwisko/ Nazwa firmy" name="name">
            </label>
            <label for="">
              <span>Adres email</span> <span class="error-details"></span>
              <input type="email" placeholder="Adres email" name="email">
            </label>
            <label for="">
              <span>Miejsce załadunku</span> <span class="error-details"></span>
              <input type="text" placeholder="Miejsce załadunku" name="loading_location">
            </label>
            <label for="">
              <span>Miejsce rozładunku</span> <span class="error-details"></span>
              <input type="text" placeholder="Miejsce rozładunku" name="unloading_location">
            </label>
            <label for="">
              <span>Telefon</span> <span class="error-details"></span>
              <input type="text" autocapitalize="none" spellcheck="false" placeholder="Telefon" inputmode="numeric" name="phone">
            </label>
            <div class="date-inputs">
              <label for="">
                <span>Data załadunku</span> <span class="error-details"></span>
                <input type="date" placeholder="dd.mm.rr" name="loading_date">
              </label>
              <label for="">
                <span>Data rozładunku</span> <span class="error-details"></span>
                <input type="date" placeholder="dd.mm.rr" name="unloading_date">
              </label>
            </div>
            <label for="">
              <span>Waga ładunku (kg)</span> <span class="error-details"></span>
              <input type="text" placeholder="Waga ładunku (kg)" inputmode="numeric" name="cargo_weight">
            </label>
            <label for="" class="text-area-label">
              <span>Dodatkowe informacje</span> <span class="error-details"></span>
              <textarea name="additional_information" id="" cols="20" rows="6"></textarea>
            </label>

            <span class="error-message" data-app-target="errorMessage"></span>

            <button type="submit" class="form-submit" data-app-target="formSubmit">Złóż zlecenie</button>
          </form>

          <div class="order-success hidden" data-app-target="successMsg">
            <p class="success-text">
              Twoja wiadomość została wysłana. <br> Dziękujemy!
            </p>

            <img class="ico-ok" src="{{asset('/images/ok.svg')}}" alt="">
          </div>
        </div>
      </div>

      <button class="form-back hidden" data-action="click->app#showForm" data-app-target="showForm">Złóż zlecenie</button>
    </section>
  </div>

  <div class="container">
    <section class="fleet" id="fleet">
      <h3 class="big-header">
        Nasza Flota
      </h3>

      <div class="list-wrapper">
        <ul class="fleet-list">
          <li>
            <span class="first">Naczepy plandeki 13,6m</span>
            <span class="second">24 tony ładowności, także mega (3m wys.)</span>
          </li>
          <li>
            <span class="first">Naczepy chłodniczne 13.6m</span>
            <span class="second">22 tony ładowności</span>
          </li>
          <li>
            <span class="first">Samochody dostawcze</span>
            <span class="second">do 1,5 tony, oraz od 1,5 do 6 ton, także z windą załadowczą</span>
          </li>
          <li>
            <span class="first">Zestawy (samochód + przyczepa)</span>
          </li>
          <li>
            <span class="first">Wywrotki do przewozu towarów sypkich</span>
          </li>
        </ul>
      </div>
    </section>
  </div>

  <footer class="footer">
    <div class="container">
      <img src="{{asset('/images/logo.png')}}" alt="" class="logo">

      <div class="grid-footer">
        <div class="first-col col">
          <h4 class="footer-title">
            HANA TRANS Anna Bernat
          </h4>
          <p class="footer-text">
            Łukawiec 263
          </p>
          <p class="footer-text">
            36-004 Łąka
          </p>
          <p class="footer-text">
            Nip: 517 021 93 90
          </p>
        </div>
        <div class="second-col col">
          <p class="footer-title">
            Kontakt
          </p>
          <a class="footer-text" href="tel:+48 728 567 000">Tel: +48 728 567 000</a>
          <a class="footer-text" href="mailto:biuro@hanatrans.pl">Email: biuro@hanatrans.pl </a>
          <p class="footer-text flex-item">
{{--            <a href="">--}}
{{--              <img src="{{asset('/images/instagram.svg')}}" alt="">--}}
{{--            </a>--}}
{{--            <a href="">--}}
{{--              <img src="{{asset('/images/facebook.svg')}}" alt="">--}}
{{--            </a>--}}
          </p>
        </div>
        <div class="third-col col">
          <a href="#order" class="footer-button-white">Złóż zlecenie</a>
        </div>
      </div>

      <p class="footer-description">&copy; {{date('Y')}} HANA TRANS Usługi transportowe RZESZÓW</p>
    </div>
  </footer>
</body>

<script type="module" src="{{ asset('/js/stimulus.js') }}?{{$rand}}"></script>
<script type="module" src="{{ asset('/js/app.js') }}?{{$rand}}"></script>
<script type="module" src="{{ asset('/js/controller/app-controller.js') }}?{{$rand}}"></script>
</html>