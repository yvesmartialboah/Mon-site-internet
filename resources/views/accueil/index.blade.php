@extends('layout.parent')

@section('title','Accueil')

@section('content')
     <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div class="typewriter1" data-aos="zoom-out">
            <h1 style="color: #F8941B;">Bienvenue sur Mobili</h1>
            <h2 class="typewrite" data-period="500" data-type='[ "MOBILI est une application mobile de dépannage."]'> </h2>
            <div class="row  justify-content-around pt-1 p-2">
              <div class="d-sm-inline-flex flex-row bd-highlight">
                  <div class="p-2 text-center bd-highlight">
                    <a href=""><img class="mb-3" data-aos="fade-right" data-aos-delay="100" height="74" src="{{asset('assets_mob/img/google-play-fr_get.svg')}}" alt=""></a>
                  </div>
                  <div class="p-2 text-center bd-highlight ml-3">
                    <a href=""><img class="mb-3" data-aos="fade-left" data-aos-delay="100" height="74" src="{{asset('assets_mob/img/app-store-fr.svg')}}" alt=""></a> 
                  </div>
                </div>
          </div>

          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="{{asset('assets_mob/img/devis-img.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="gallery-lightbox venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>A propos de Mobili</h3>
            <p>
              Mobili est la première plateforme de dépannage automobile qui vous connecte à un réseau de
              dépanneurs professionnels qui fournissent l'assistance routière dont vous avez besoin, quand vous
              en avez besoin et sans aucune prime payée à l'avance ni cotisation annuelle. Juste en quelques clics
              sur votre smartphone.
            </p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class='bx bx-cog'></i></div>
              <h4 class="title"><a href="">Dépanage automobile</a></h4>
              <p class="description">Nous vous venons en aide partout. il suffit de vous localisez a travers l'application et un de nos mécaniciens professionnels le plus proche viendra vous dépanner.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-wrench"></i></div>
              <h4 class="title"><a href="">Pièces auto</a></h4>
              <p class="description">Mobili vous livre les Pièces détachées auto d’origine surtout de qualité au plus bas prix du marché.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class='bx bx-notepad'></i></div>
              <h4 class="title"><a href="">Mobili coursier</a></h4>
              <p class="description">Mobili vous fournir ses coursiers professionnels pour différentes courses urgentes.</p>
              <ul class="description">
                <li>Les visites techniques,</li> 
                <li>les tâches personnelles,</li> 
                <li>la réparation etc…</li> 
              </ul>
            </div>
            {{-- <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class='bx bx-notepad'></i></div>
              <h4 class="title"><a href="">Devis en ligne</a></h4>
              <p class="description">Obtenez votre devis de réparation en quelqu'un clics Chez nos Garages partenaires.</p>
            </div> --}}

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>Pour répondre à toutes vos demandes</p>
        </div>
        <div class="col-md-12 mb-4" data-aos="fade-up">
          <h4 class="title text-center">UNE GAMME COMPLÈTE DE SERVICES D'ASSISTANCE ROUTIÈRE</h4>
          <p class="text-justify text-center">
            Avec Mobili vous pouvez demander, 24h/24 et 7j/7, via votre smartphone une assistance dépannage immédiate à nos professionnels locaux
            Mobili couvre tous les domaines de l’entretien réparation suivants :
          </p>
        </div>
        <div class="row" data-aos="fade-left">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="bx bxs-color-fill" style="color: #ffbb2c;"></i>
              <h3><a href="{{route('vidange')}}">Vidange</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <i class="bx bx-infinite" style="color: #5578ff;"></i>
              <h3><a href="{{route('revision')}}">Revision</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a href="{{route('pneumatique')}}">Pneumatique</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
              <h3><a href="{{route('freinage')}}">Freinage</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a href="{{route('climatisation')}}">Climatisation</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3><a href="{{route('batterie')}}">Batterie</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a href="{{route('visibilite')}}">Visibilité</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3><a href="{{route('reparation_piece_electrique')}}">Réparation pièces electriques</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
              <i class="ri-anchor-line" style="color: #b2904f;"></i>
              <h3><a href="{{route('echappement')}}">Echappement</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
              <i class="ri-disc-line" style="color: #b20969;"></i>
              <h3><a href="{{route('kit_distribution')}}">Kit de distribution</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="550">
              <i class="ri-base-station-line" style="color: #ff5828;"></i>
              <h3><a href="{{route('suspension')}}">Suspension</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="600">
              <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
              <h3><a href="{{route('pre_control_technique')}}">Pré-controle technique</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="600">
              <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
              <h3><a href="{{route('mecanique')}}">Mécanique</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="600">
              <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
              <h3><a href="{{route('pare_brise')}}">Par-brise</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">
        
        <div class="section-title" data-aos="fade-up">
          <h2>Fonctionalités : Mobili</h2>
          <p>comment ça marche!</p>
        </div>
        
        <div class="row" data-aos="fade-up">
          
          <div class="col-lg-4 col-md-6">
            <div class="count-box" data-aos="zoom-in" data-aos-delay="100">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="">Téléchargez l'application</span>
              <p>Télécharger gratuitement l'application.</p> <br>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="count-box" data-aos="zoom-in" data-aos-delay="100">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="">Inscrivez-vous</span>
              <p>Remplissez toutes les informations demandées.</p> <br>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
            <div class="count-box" data-aos="zoom-in" data-aos-delay="100">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="">Trouvez un dépanneur</span>
              <p>Vous pouvez dès à présent commencer à contacter nos dépanneurs professionnels..</p>
            </div>
          </div>
          
        </div>

        <div class="section-title mt-5" data-aos="fade-up">
          <h2>Decouvrez les avantages</h2>
          <p style="font-size: 26px;">Mobili, la nouvelle application mobile consacrée au dépannage automobile</p>
        </div>

        <div class="row" data-aos="fade-up">
          
          <div class="col-lg-6 col-md-6">
            <div class="count-box" data-aos="zoom-in" data-aos-delay="100">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="">Géolocalisation</span>
              <p>C'est pratique, rapide, et ça vous assure un dépannage où que vous soyez.</p> <br>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mt-5 mt-md-0">
            <div class="count-box" data-aos="zoom-in" data-aos-delay="100">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="">Gain de temps</span>
              <p>Avec Mobili vous attendez en quelques minutes.</p> <br>
            </div>
          </div>
          
        </div>
        
      </div>
    </section>
    <!-- End Counts Section -->
    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">
  
          <div class="row content">
            <div class="col-md-5 order-1 " data-aos="fade-left">
              <img src="{{asset('assets_mob/img/piece-img.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-up">
              <h3>Pièces auto</h3>
              <ul>
                <li><i class="bi bi-check"></i> Remplir un Formulaire détaillé.</li>
                <li><i class="bi bi-check"></i> Valider le prix.</li>
                <li><i class="bi bi-check"></i> Livraison et garantie par un de nos mécaniciens professionnels.</li>
              </ul>
              
            </div>
          </div>

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="{{asset('assets_mob/img/depanage-img.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5" data-aos="fade-up">
            <h3>Dépanage automobile.</h3>
            <ul>
              <li><i class="bi bi-check"></i> Télécharcher l'application.</li>
              <li><i class="bi bi-check"></i> Inscrivez-vous.</li>
              <li><i class="bi bi-check"></i> Choisir sa panne.</li>
              <li><i class="bi bi-check"></i> Mise en relation avec notre mécanicien professionnel le plus proche de vous.</li>
              <li><i class="bi bi-check"></i> Vous êtes dépanné.</li>
            </ul>
            {{-- <ul>
              <li><i class="bi bi-check"></i> Définir votre modèle de véhicule.</li>
              <li><i class="bi bi-check"></i> Définir la réparation à faire.</li>
              <li><i class="bi bi-check"></i> Valider.</li>
              <li><i class="bi bi-check"></i> Localisez-vous.</li>
              <li><i class="bi bi-check"></i> Choisissez nos garages partenaires.</li>
              <li><i class="bi bi-check"></i> Obtenez votre devis de réparation auto.</li>
              <li><i class="bi bi-check"></i> Prenez un rendez-vous/demandez un mecanicien professionnel à domicile.</li>
            </ul> --}}
           
          </div>
        </div>
  
        <div class="row content mb-0">
          <div class="col-md-5" data-aos="fade-right">
            <img src="{{asset('assets_mob/img/devis-img.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5" data-aos="fade-up">
            <h3>Mobili coursier</h3>
            <P>
              Mobili met à votre disposition des chauffeurs coursier expérimentés et responsables dans la conduite pour 
              toutes vos différentes courses personnelles ou d'entreprise.
            </P>
            <ul>
              <li><i class="bi bi-check"></i> Visite technique.</li>
              <li><i class="bi bi-check"></i> Dépôt du véhicule au garage.</li>
              <li><i class="bi bi-check"></i> Courses administratives.</li>
            </ul>
            
          </div>
        </div>
        {{-- <div class="row content mb-0">
          <div class="col-md-5" data-aos="fade-right">
            <img src="{{asset('assets_mob/img/devis-img.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5" data-aos="fade-up">
            <h3>Devis en ligne</h3>
            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
            <ul>
              <li><i class="bi bi-check"></i> Définir votre modèle de véhicule.</li>
              <li><i class="bi bi-check"></i> Définir la réparation à faire.</li>
              <li><i class="bi bi-check"></i> Valider.</li>
              <li><i class="bi bi-check"></i> Localisez-vous.</li>
              <li><i class="bi bi-check"></i> Choisissez nos garages partenaires.</li>
              <li><i class="bi bi-check"></i> Obtenez votre devis de réparation auto.</li>
              <li><i class="bi bi-check"></i> Prenez un rendez-vous/demandez un mecanicien professionnel à domicile.</li>
            </ul>
            
          </div>
        </div> --}}
  
      </div>
    </section>
    <!-- End Details Section -->
    
  </main><!-- End #main -->
@endsection