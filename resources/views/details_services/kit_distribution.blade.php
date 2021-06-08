@extends('layout.parent')

@section('title','Accueil')

@section('content')

 <!-- ======= Header ======= -->
 <section id="testimonials" class="testimonials mt-5">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2><a href="{{url('/')}}">Accueil</a></h2>
        <div class="row">
          <div class="col-md-8">
            <p class="text-white">Services</p>
          </div>
          <div class="col-md-4">
            <p style="color: #b20969">Kit distribution</p>
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
            <i class='bx bx-shape-polygon' style="color: #b20969; font-size:70px !important"></i>
            {{-- <img src="{{asset('assets_mob/img/details-1.png')}}" class="img-fluid" alt=""> --}}
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <p class="font-italic">
              La courroie de distribution est un élément mécanique vital. La changer régulièrement permet de préserver la vie du moteur...
            </p>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection