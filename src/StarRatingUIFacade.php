<?php
namespace Uzzaircode\StarRatingUI;

use Illuminate\Support\Facades\Facade;

class StarRatingUIFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'star-rating-ui';
    }
}