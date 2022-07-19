<?php

use samdark\sitemap\Sitemap;
use TightenCo\Jigsaw\Jigsaw;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

/**
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */

$events->afterBuild(function (Jigsaw $jigsaw) {
    generateSiteMap($jigsaw);
});


function generateSiteMap(Jigsaw $jigsaw)
{
    $baseUrl = 'https://kawancctv.com';
    $sitemap = new Sitemap($jigsaw->getDestinationPath() . '/sitemap.xml');

    collect($jigsaw->getOutputPaths())->each(function ($path) use ($baseUrl, $sitemap) {
        if (!isAsset($path)) {
            $sitemap->addItem($baseUrl . $path, time(), Sitemap::DAILY);
        }
    });

    $sitemap->write();
}

function isAsset($path)
{
    return str_starts_with($path, '/assets');
}
