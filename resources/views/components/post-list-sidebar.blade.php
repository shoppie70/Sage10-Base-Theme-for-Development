<li class="post-sidebar__item flex p-4 lg:p-6 mb-6 mx-2 bg-white wow animate__animated animate__fadeIn">
    <div class="w-5/12 overflow-hidden">
        <div class="post-archive__thumbnail lazyload"
             data-bg="{{ get_the_post_thumbnail_url() }}"></div>
    </div>
    <div class="w-7/12 pl-4">
        <span class="inline-block post-item__category">
            {{ get_the_category()[0]->cat_name }}
        </span>
        <time class="my-1 block post-item__datetime" datetime="{{ get_the_date( 'Y-m-d' ) }}">
            {{ get_the_date( 'Y年m月d日' ) }}
        </time>
        <h1 class="mb-2 pb-1 text-lg font-bold">
            <a class="" href="{{ get_the_permalink() }}">
                {{ get_the_title() }}
            </a>
        </h1>
        <div class="text-right">
            <a class="text-pink-500" href="{{ get_the_permalink() }}">
                [詳細を見る]
            </a>
        </div>
    </div>
</li>
