<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class Post extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.page-header',
        'partials.content',
        'partials.content-single',
        'archive',
        'page-news',
    ];
    
    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override (): array
    {
        return [
            'title'          => $this->title(),
        ];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */
    public function title (): string
    {
        if ( $this->view->name() !== 'partials.page-header' ) {
            return get_the_title();
        }

        if ( is_home() ) {
            if ( $home = get_option( 'page_for_posts', true ) ) {
                return get_the_title( $home );
            }

            return __( 'Latest Posts', 'sage' );
        }

        if ( is_archive() ) {
            return get_the_archive_title();
        }

        if ( is_search() ) {
            return sprintf(
            /* translators: %s is replaced with the search query */
                __( 'Search Results for %s', 'sage' ),
                get_search_query()
            );
        }

        if ( is_404() ) {
            return __( 'Not Found', 'sage' );
        }

        return get_the_title();
    }
}
