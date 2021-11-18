<li class="post-item wow animate__animated animate__fadeInUp">
    <article class="linkbox">
        <div class="overflow-hidden">
            <div class="post-item__thumbnail lazyload" data-bg="{{ get_the_post_thumbnail_url() ?: App\asset('images/no_thumbnail.jpg') }}"></div>
        </div>
        <div class="p-4">
            <div class="flex items-center mb-2">
                <span class="mr-4 post-item__category">
                    {{ get_the_category()[0]->cat_name }}
                </span>
                <time class="post-item__datetime" datetime="{{ get_the_date( 'Y-m-d' ) }}">
                    {{ get_the_date( 'Y年m月d日' ) }}
                </time>
            </div>
            <h1 class="post-item__title">
                {{ get_the_title() }}
            </h1>
        </div>
        <a class="linkbox__url" href="{{ get_the_permalink() }}"></a>
    </article>
</li>
