@php

$args = [
"post_type" => "services",
"post_status" => "publish",
"posts_per_page" => -1
];

$query = new \WP_Query($args);

@endphp

@extends('layouts.app')


@section('content')
    <section class="small page-header">
        <div class="container">
            <div class="row center">
                <div class="services">
                    @foreach($posts as $post)
                        <div class="service">
                            <h1>{!! $post->post_title !!}</h1>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="parent">
        <div class="container">
            <div class="row">
                <h2></h2>
            </div>
        </div>
    </section>

@endsection
