@if($categories)
    <div class="blog-roll-cats blog-card-row">
        @foreach($categories as $category)

            @php
                $term_link = get_term_link($category->term_id);
            @endphp

            <a class="cat" title="{{$category->name}}"
               href="{{$term_link}}">{{$category->name}}</a>
        @endforeach
    </div>
@endif
