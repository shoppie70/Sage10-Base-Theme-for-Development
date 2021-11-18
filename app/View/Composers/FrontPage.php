<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class FrontPage extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'front-page',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override ()
    {
        return [
            'query'   => $this->query(),
        ];
    }

    public function query (): WP_Query
    {
        return new WP_Query( [
            'post_type'      => 'post',
            'posts_per_page' => -1,
            'no_found_rows'  => true,
        ] );
    }
}
