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
                                    (646) 319-8609<br/><a href="mailto:rweiss@nyccorporatevideomarketing
                    .com">rweiss@nyccorporatevideomarketing.com</a></li>
                                <li>
                            </ul>

                            <ul>
                                <li>34 Gramercy Ave<br/>
                                    Rye, NY 10580<br/>
                                    (646) 319-8609<br/><a href="mailto:rweiss@nyccorporatevideomarketing
                    .com">rweiss@nyccorporatevideomarketing.com</a></li>
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
echo do_shortcode('[gravityform id="1" title="true"]');
@endphp
                        {{--<form>--}}
                            {{--<div class="form-row">--}}
                                {{--<label class="two-col even-space" id="wide-form-first-name-label"--}}
                                       {{--for="wide-form-first-name"><p>First--}}
                                        {{--Name<span class="required">*</span></p>--}}
                                    {{--<input id="wide-form-first-name" type="text" value="" required/>--}}
                                {{--</label>--}}
                                {{--<label class="two-col even-space" id="wide-form-first-name-label"><p>Last Name<span--}}
                                                {{--class="required">*</span></p>--}}
                                    {{--<input id="wide-form-last-name" type="text" value="" required/>--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="form-row">--}}
                                {{--<label class="two-col even-space" id="wide-form-first-name-label"><p>Phone<span--}}
                                                {{--class="required">*</span></p>--}}
                                    {{--<input id="wide-form-first-name" type="phone" value="" required/>--}}
                                {{--</label>--}}
                                {{--<label class="two-col even-space" id="wide-form-first-name-label"><p>Email<span--}}
                                                {{--class="required">*</span></p>--}}
                                    {{--<input id="wide-form-last-name" type="email" value="" required/>--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="form-row">--}}
                                {{--<label class="two-col even-space only" id="wide-form-first-name-label"><p>Company<span--}}
                                                {{--class="required">*</span></p>--}}
                                    {{--<input id="wide-form-first-name" type="phone" value="" required/>--}}
                                {{--</label>--}}
                                {{--<label class="two-col even-space only" id="wide-form-first-name-label"><p>Estimated--}}
                                        {{--Budget<span--}}
                                                {{--class="required">*</span></p>--}}
                                    {{--<select name="budget" class="budget">--}}
                                        {{--<option default value="$1,000 - $2,500">-</option>--}}
                                        {{--<option value="$1,000 - $2,500">$1,000 - $2,500</option>--}}
                                        {{--<option value="$2,500 - $5,000">$2,500 - $5,000</option>--}}
                                        {{--<option value="$5,000 - $10,00">$5,000 - $10,00</option>--}}
                                        {{--<option value="$10,000 - $25,000">$10,000 - $25,000</option>--}}
                                    {{--</select>--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="row center flex-end">--}}
                                {{--<button class="call-to-action" id="wide-form-submit">Submit</button>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
