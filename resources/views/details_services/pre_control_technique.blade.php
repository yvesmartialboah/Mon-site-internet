@extends('layout.parent')

@section('title','Accueil')

@section('content')

 <!-- ======= Header ======= -->
 <section id="testimonials" class="testimonials mt-5">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2><a href="{{url('/')}}">Accueil</a></h2>
        <div class="row">
          <div class="col-md-6">
            <p class="text-white">Services</p>
          </div>
          <div class="col-md-6">
            <p style="color: #29cc61">pre-control technique</p>
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
            {{-- <img src="{{asset('assets_mob/img/details-1.png')}}" class="img-fluid" alt=""> --}}
            <i class="bx bx-bracket" style="color: #29cc61; font-size:70px !important"></i>
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <p class="font-italic">
              Pour éviter les désagréments et le coût d’une contre-visite
            </p>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection