<?php


function selectCssBasedOnTheme($value)
{
    switch ($value) {
        case 'css-stars':
            return 'https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/themes/css-stars.min.css';
        case 'bars-square':
            return 'https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/themes/bars-square.min.css';
        case 'bootstrap-stars':
            return 'https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/themes/bootstrap-stars.min.css';
        case 'fontawesome-stars-o':
            return 'https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/themes/fontawesome-stars-o.min.css';
        case 'fontawesome-stars':
            return 'https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/themes/fontawesome-stars.min.css';
        case 'bars-pill':
            return 'https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/themes/bars-pill.min.css';
        case 'bars-reversed':
            return 'https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/themes/bars-reversed.min.css';
        default:
            return '';
    }
}