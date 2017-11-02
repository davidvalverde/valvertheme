<?php

/**
 * El título.
 */
function dv_title($append = '') {
    $title = '';

    if (is_single()) {
        the_title('', '');
    }

    if (is_category()) {
        $title .= single_cat_title();
    }

    if (is_tag()) {
        $title .= single_tag_title();
    }

    if (is_author()) {
        $title .= wp_title('');
    }

    if (is_date()) {
        if (is_year()) {
            $title .= get_the_date('Y');
        } else if (is_month()) {
            $title .= get_the_date('F Y');
        } else if (is_day()) {
            $title .= get_the_date('d F Y');
        }
    }

    if (is_page('categories')) {
        $title .= 'Todos los temas';
    }

    if (is_page('tags')) {
        $title .= 'Todas las etiquetas';
    }

    if (is_404()) {
        $title .= 'Error';
    }

    if (is_home()) {
        $title .= 'Blog';
    }

    if (empty($append)) {
        $title .= ' - ' . get_bloginfo('name');
    } else {
        $title .= $append;
    }
    return $title;
}