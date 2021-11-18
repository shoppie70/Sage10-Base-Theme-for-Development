<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with ()
    {
        return [
            'siteName'    => $this->siteName(),
            'topNav'      => $this->topNav(),
            'footer_menu' => $this->footer_menu(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName ()
    {
        return get_bloginfo( 'name', 'display' );
    }

    public function topNav ()
    {
        return [
            '/'       => 'ホーム',
            'plan'    => 'プラン',
            'rental'  => 'レンタル衣装',
            'gallery' => 'ギャラリー',
            'staff'   => 'スタッフ紹介',
            'news'    => 'ニュース&ブログ',
            'company' => '会社概要',
        ];
    }

    public function footer_menu (): array
    {
        return [
            'メニュー'   => [
                '/staff/'       => 'スタッフ紹介',
                '/gallery/'     => 'ギャラリー',
                '/blog/'        => 'ニュース＆ブログ',
                '/information/' => '会社概要',
                '/contact/'     => 'お問い合わせ',
            ],
        ];
    }
}
