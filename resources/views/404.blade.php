@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <div class="four-oh-four">


    <x-alert type="warning">
      {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
    </x-alert>

      <div class="f-num">
        <span>404</span>
      </div>

      <div class="not-found">
        {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}

        <a href="{{  get_home_url() }}" class="call-to-action">Home</a>
      </div>

    </div>
  @endif
@endsection
