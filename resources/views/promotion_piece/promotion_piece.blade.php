@extends('layout.parent')

@section('title','Faq')

@section('content')


<main id="main">

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonialss ">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Promotions</h2>
        <p>Pièces auto</p>
      </div>

      <div class="row content">
        <div class="col-md-5" data-aos="fade-right">
          <img src="{{asset('assets_mob/img/details-1.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-4" data-aos="fade-up">
          <h3>Dépanage automobilistes.</h3>
          <!-- <p class="font-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p> -->
          <ul>
            <li><i class="bi bi-check"></i> Télécharcher l'application.</li>
            <li><i class="bi bi-check"></i> Inscrivez-vous.</li>
            <li><i class="bi bi-check"></i> Choisir sa panne.</li>
            <li><i class="bi bi-check"></i> Mise en relation avec notre mécanicien professionnel le plus proche de vous.</li>
            <li><i class="bi bi-check"></i> Vous êtes dépanné.</li>
          </ul>
          <!-- <p>
            Voluptas nisi in quia excepturi nihil voluptas nam et ut. Expedita omnis eum consequatur non. Sed in asperiores aut repellendus. Error quisquam ab maiores. Quibusdam sit in officia
          </p> -->
        </div>
      </div>
      
      <div style="font-size:30px;text-align: right;">
        <span class="border border-2">
        <strong id="days"></strong>
        </span>
        <span class="border border-2">
        <strong id="hours"></strong>
        </span>
        <span class="border border-2">
        <strong id="minutes"></strong>
        </span>
        <span class="border border-2">
        <strong id="seconds"></strong>
        </span>
      </div>
      <!-- <span id="demo" class="border border-1"></span> -->

    </div>
  </section>
  <!-- End Testimonials Section -->

</main>
<!-- End #main -->

@endsection