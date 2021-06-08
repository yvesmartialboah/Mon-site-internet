@extends('layout.parent')

@section('title','Faq')

@section('content')


<main id="main">

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonialss mt-5">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Promotions</h2>
        <p>Pièces auto</p>
      </div>

      <div class="row content">
        <div class="col-md-6" data-aos="fade-right">
          <img src="{{asset('assets_mob/img/promotion.jpg')}}" class="" height="500" alt="">
        </div>
        <div class="col-md-6 pt-4" data-aos="fade-up">
          <h3>Passer vos commandes en toute sécurité</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla quisquam exercitationem nihil praesentium neque quasi assumenda similique, deserunt, ab voluptatibus harum voluptatum dolorem quos iusto illum, dolor suscipit asperiores laborum.
          </p>
          <a href="#" class="text-right btn-get-started mt-4" style="font-weight: 500;font-size: 15px;letter-spacing: 0px;display: inline-block;padding: 5px 10px;border-radius: 50px;transition: 0.5s;color: #fff;background: #F8941B;margin-left: 7%;">
            Commander
          </a>
        </div>
        <div class="col-md-12">
        </div>
      </div>
      
      {{-- <div style="font-size:30px;text-align: right; margin-right:40px">
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
      </div> --}}
      <!-- <span id="demo" class="border border-1"></span> -->

    </div>
  </section>
  <!-- End Testimonials Section -->

</main>
<!-- End #main -->

@endsection