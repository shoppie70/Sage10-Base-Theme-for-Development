@extends('layouts.app')

@section('content')
    @include('partials.page-header', ['page_title' => 'Archive', 'title_en' => 'archive'])
    @include('components.category_nav')
    <section class="py-16" style="background-color: #fff6f7;">
        <div class="post-content">
            <div class="post-archive">

                @if($query->have_posts())
                    <ul class="">
                        @while ($query->have_posts())
                            @php($query->the_post())
                            @include('components.post-card-archive')
                        @endwhile
                    </ul>
                    @include('partials.pagination', ['perPage' => 5, 'paged' => get_query_var('paged') ?: 1, 'pages' => $query->max_num_pages ?? 1])
                @endif
            </div>
            <div class="post-sidebar">
                @include('components.sidebar')
            </div>
        </div>
    </section>
@endsection
