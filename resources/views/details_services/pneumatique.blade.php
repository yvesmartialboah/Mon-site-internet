@extends('layout.parent')

@section('title','Accueil')

@section('content')

 <!-- ======= Header ======= -->
 <section id="testimonials" class="testimonials mt-5">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2><a href="{{url('/')}}">Accueil</a></h2>
        <div class="row">
          <div class="col-md-9">
            <p class="text-white">Services</p>
          </div>
          <div class="col-md-3">
            <p style="color: #F8941B">Pneumatique</p>
          </a>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- End Header -->

  <main id="main">

    <section class="inner-page">
      <div class="container">
        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="{{asset('assets_mob/img/details-1.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <p class="font-italic">
              Pneumatiques : le lien essentiel à ne pas négliger
              Le réseau Mobili propose à ses clients des pneumatiques de grandes marques, Hankook, Goodyear / Dunlop,
              Michelin, Continental, Bridgestone, Firestone, Kleber etc....
            </p>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection