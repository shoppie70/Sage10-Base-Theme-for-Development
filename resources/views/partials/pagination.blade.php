@if($pages > 0)
    <div class="pager">
        @if ($paged != 1)
            <a href="{{ get_pagenum_link(1) }}" class="pager__numbers">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round"
                     style="display: inline-block;">
                    <path d="M11 17l-5-5 5-5M18 17l-5-5 5-5"/>
                </svg>
            </a>

            <a href="{{ get_pagenum_link($paged - 1) }}" class="pager__numbers">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round"
                     style="display: inline-block;">
                    <path d="M15 18l-6-6 6-6"/>
                </svg>
            </a>
        @endif

        @for ($i = $paged > ceil(($perPage - 1) / 2) ? $paged - ceil(($perPage - 1)/ 2) : 1; $i <= $paged + ceil(($perPage - 1) / 2) && $i <= $pages; $i++)
            <a href="{{ get_pagenum_link($i) }}"
               class="{{ $i == $paged ? 'pager__numbers--active' : 'pager__numbers'}}">
                {{ $i }}
            </a>
        @endfor

        @if ($paged != $pages)
            <a href="{{ get_pagenum_link($paged + 1) }}" class="pager__numbers">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round"
                     style="display: inline-block;">
                    <path d="M9 18l6-6-6-6"/>
                </svg>
            </a>

            <a href="{{ get_pagenum_link($pages) }}" class="pager__numbers">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round"
                     style="display: inline-block;">
                    <path d="M13 17l5-5-5-5M6 17l5-5-5-5"/>
                </svg>
            </a>
        @endif
    </div>
    <div class="text-center" style="margin-top: -2rem; margin-bottom: 2rem;">
        全{{ $pages }}ページ中
    </div>
@endif
