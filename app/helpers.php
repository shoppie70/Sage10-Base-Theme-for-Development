<?php

/**
 * Theme helpers.
 */

namespace App;

/**
 * @param string|null $file_name
 * @return string
 */
function asset(string $file_name = null): string
{
    $directory_path = WP_DEBUG ? '/resources/' : '/public/';

    if ($file_name) {
        $url = esc_url(get_template_directory_uri() . $directory_path . $file_name);
        $path = get_template_directory() . $directory_path . $file_name;

        if( file_exists($path )) {
            return $url . '?v=' . filemtime($path);
        }

        return '';
    }

    return esc_url(get_template_directory_uri() . '/assets/');
}

/**
 * @param $variable
 * @return void
 */
function dump ( $variable )
{
    echo "<pre style='padding: 1rem; background: #eee;'>";
    var_dump( $variable );
    echo "</pre>";
}

/**
 * @param $variable
 * @return void
 */
function dd ( $variable )
{
    echo "<pre style='padding: 1rem; background: #eee;'>";
    var_dump( $variable );
    echo "</pre>";
    exit;
}

function getPriceInTax ( $rawPrice ): int
{
    return 1.1 * (int)$rawPrice;
}
