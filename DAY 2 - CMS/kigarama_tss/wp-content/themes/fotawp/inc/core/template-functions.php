<?php

/**
 * file for holding template functions for fotawp
 */

if (!function_exists('fotawp_excerpt_more_postfix')) {
    function fotawp_excerpt_more_postfix($more)
    {
        if (is_admin()) {
            return $more;
        }
        return '...';
    }
    add_filter('excerpt_more', 'fotawp_excerpt_more_postfix');
}

if (!function_exists('fotawp_excerpt_limit')) {
    function fotawp_excerpt_limit($length)
    {
        if (is_admin()) {
            return $length;
        }
        return 29;
    }
    add_filter('excerpt_length', 'fotawp_excerpt_limit');
}


/**
 * filter navigation for custom modal search - fotawp-search-modal
 */

/**
 * Filter the search modal block pattern to correctly show the search icon
 *
 * @param string $html  The block HTML.
 * @param array  $block The block data.
 * @return string Block HTML markup.
 * @since 1.0.0
 */
function fotawp_custom_search_icon($html, $block)
{

    if ('core/navigation' === $block['blockName'] && isset($block['attrs']['className']) && false !== strpos($block['attrs']['className'], 'fotawp-search-modal')) {
        $icon = '><svg width="20" height="20" class="search-icon" viewBox="0 0 20 20" fill="currentColor" aria-label="' . esc_attr__('Search', 'fotawp') . '" xmlns="http://www.w3.org/2000/svg"><path d="M19.7346 18.4538L15.2916 14.0109C16.4891 12.5317 17.2101 10.6522 17.2101 8.60509C17.2101 3.86052 13.3496 0 8.60504 0C3.86048 0 0 3.86048 0 8.60504C0 13.3496 3.86052 17.2101 8.60508 17.2101C10.6522 17.2101 12.5317 16.4891 14.0109 15.2917L18.4538 19.7346C18.6304 19.9112 18.8623 20 19.0942 20C19.3261 20 19.558 19.9112 19.7346 19.7346C20.0888 19.3804 20.0888 18.808 19.7346 18.4538ZM8.60508 15.3985C4.85869 15.3985 1.81161 12.3514 1.81161 8.60504C1.81161 4.85865 4.85869 1.81157 8.60508 1.81157C12.3515 1.81157 15.3986 4.85865 15.3986 8.60504C15.3986 12.3514 12.3514 15.3985 8.60508 15.3985Z" fill="#2B2929" /></svg>';

        $html = str_replace('aria-label="' . esc_attr__('Open menu', 'fotawp') . '"', 'aria-label="' . esc_attr__('Open search', 'fotawp') . '"', $html);
        $html = str_replace('aria-label="' . esc_attr__('Close menu', 'fotawp') . '"', 'aria-label="' . esc_attr__('Close search', 'fotawp') . '"', $html);

        // Replace the menu icon.
        $html = str_replace(
            '><svg width="42" height="42" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false"><rect x="4" y="7.5" width="16" height="1.5" /><rect x="4" y="15" width="16" height="1.5" /></svg>',
            $icon,
            $html
        );

        // Replace the menu text, if the text option is used (6.0).
        $html = str_replace('>' . __('Menu', 'fotawp'), $icon, $html);
    }

    return $html;
}

add_filter('render_block', 'fotawp_custom_search_icon', 10, 2);
