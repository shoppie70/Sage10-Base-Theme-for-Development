@if($latestTopics->have_posts())
    <h2 class="heading-sidebar mt-0 mb-4">
        お知らせ最新
    </h2>
    <ul class="m-4 lg:m-0 post-sidebar__list bg-white">
        @while ($latestTopics->have_posts())
            @php($latestTopics->the_post())
            @include('components.post-list-sidebar')
        @endwhile
    </ul>
    @php(wp_reset_postdata())
@endif
