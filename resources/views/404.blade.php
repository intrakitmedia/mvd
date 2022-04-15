@extends('layouts.app')

@section('content')

  @if (! have_posts())

      <section class="section-alt-2">

<div class="container">
  <div class="row center">
    <div class="f-num">
      <span>404</span>
    </div>
  </div>

  <div class="f-num">



  <div class="not-found">
      <p>Sorry, but the page you are trying to view does not exist.</p>

      <a href="{{  get_home_url() }}" class="call-to-action">Home</a>
    </div>
  </div>
</div>



      </section>


  @endif
@endsection
