@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header', ['page_title' => 'page.blade.php', 'title_en' => 'page.blade.php'])
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection
