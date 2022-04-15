<div class="quick-quote">
    <div class="quick-quote-wrapper">
        <div class="quick-quote-inner">
            <div class="quick-quote-title">
                <h4 class="header-tag">Quick Quote</h4>
                <p>Hundreds of clients before you started by filling out a form just like this. A year from now you’ll be glad you got started today!</p>
            </div>


            @php
                    $qq = get_page_by_title('Quick Quote');


                if ($qq) {
                $shortcode = get_field('gravity_forms_shortcode', $qq->ID) ?? null;

                if($shortcode) {
                echo do_shortcode($shortcode);
                }

                }
            @endphp

            {{--<form>--}}
                {{--<div class="form-row">--}}
                    {{--<label id="quick-name"><p>Name <span class="required">*</span></p>--}}
                        {{--<input type="text" placeholder="Jane Doe" value="" id="quick-quote-name">--}}
                    {{--</label>--}}
                {{--</div>--}}
                {{--<div class="form-row">--}}
                    {{--<label id="quick-name"><p>Phone <span class="required">*</span></p>--}}
                        {{--<input type="text" placeholder="555-555-555" value="" id="quick-quote-name">--}}
                    {{--</label>--}}
                {{--</div>--}}
                {{--<div class="form-row">--}}
                    {{--<label id="quick-name"><p>Email <span class="required">*</span></p>--}}
                        {{--<input type="text" placeholder="hello@example.com" value=""--}}
                               {{--id="quick-quote-name">--}}
                    {{--</label>--}}
                {{--</div>--}}
                {{--<div class="form-row last">--}}
                    {{--<label id="quick-name"><p>Company <span class="required">*</span></p>--}}
                        {{--<input type="text" placeholder="Company Name" value=""--}}
                               {{--id="quick-quote-name">--}}
                    {{--</label>--}}
                {{--</div>--}}
                {{--<div class="form-row">--}}
                    {{--<button class="quick-quote-button">REQUEST A QUOTE</button>--}}
                {{--</div>--}}
            {{--</form>--}}
        </div>
    </div>
</div>
