<div class="page-header wow animate__animated animate__fadeIn animate__slow" style="background-image: url('{{ App\asset('images/header/' . $title_en . '.jpg')  }}')">
    <div class="page-header-title__wrap">
        <img class="page-header-title__sub" src="{{ App\asset('images/header/title_' . $title_en . '.png') ?: App\asset('images/no_thumbnail.jpg') }}" alt="{{ $title_en ?? 'noimage' }}">
        <h1 class="page-header-title__main">
            {!! $page_title !!}
        </h1>
    </div>
</div>
{!! \App\View\Components\Breadcrumb::fit_breadcrumb() !!}
