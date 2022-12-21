{{--
  Template Name: Contact Us
--}}


@extends('layouts.app')


@section('content')

  <section class="section-alt page-header large-bottom">
    <div class="container">
      <div class="row center">
        <div class="page-header-title text-center">
          <h1>Contact Us</h1>
          <h2>Free Quote Request</h2>
          <p>Hundreds of clients before you started by filling out a form just like this. A year from now
            you’ll be glad you got started today!</p>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-page-form wide-form-section section-alt-2">
    <div class="container">
      <div class="row wide-form-wrapper">
        <div class="lead-in lead-in-form left alt">
          <div class="orange-bg-cover">
            <div class="wide-form-banner">

              <h4>Offices</h4>
              <ul>
                <li>1330 Fifth Ave, Ste 6e<br/>
                  New York, NY 10026<br/>
                  <a href="tel:6463198609">(646) 319-8609</a><br/><a href="mailto:rweiss@multivisiondigital.com">rweiss@multivisiondigital.com</a></li>
                <li>
              </ul>

              <ul>
                <li>34 Gramercy Ave<br/>
                  Rye, NY 10580<br/>
                  <a href="tel:6463198609">(646) 319-8609</a><br/><a href="mailto:rweiss@multivisiondigital.com">rweiss@multivisiondigital.com</a></li>
                <li>
              </ul>


              <ul class="social">
                <li><a href="https://www.facebook.com/NYCOnlineVideoProduction"><i
                      class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/nycvideomktg"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/company/multivision-digital/"><i
                      class="fa fa-linkedin"></i></a></li>
                <li><a href="https://www.youtube.com/user/MVProductionsNYC"><i
                      class="fa fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="lead-in-right">
          <div class="wide-form">
            @php
              $shortcode = get_field('gravity_forms_shortcode') ?? null;

              if ($shortcode) {
              echo do_shortcode($shortcode);
              }
            @endphp
          </div>
        </div>
      </div>
      <div style="display:flex; justify-content:center;">
        <img src="https://www.multivisiondigital.com/wp-content/uploads/2022/12/brandpush-trust-badge.png" />
      </div>
    </div>
  </section>
@endsection
