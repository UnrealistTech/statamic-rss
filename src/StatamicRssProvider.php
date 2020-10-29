<?php


namespace Unrealist\StatamicRss;

use Illuminate\Support\Facades\Route;
use Statamic\Providers\AddonServiceProvider;
use Statamic\Statamic;

class StatamicRssProvider extends AddonServiceProvider
{
    public function boot()
    {
        parent::boot();

        Statamic::booted(function () {
           $this->registerWebRoutes(function () {
               Route::statamic(
                   'feed',
                   'statamic-rss::feed',
                   [
                       'layout' => 'statamic-rss::feed',
                       'content_type' => 'xml'
                   ]
               );
           });
        });
    }
}
