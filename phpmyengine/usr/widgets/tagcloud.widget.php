<?php
namespace phpMyEngine\Widgets;

function tagcloudWidget ($params) {
    if (is_array ( $params ) && \key_exists ( 'mutagen', $params )) {
        \phpMyEngine\loadModule ( 'tags' );
        $_myCache = \phpMyEngine\Cache\Cache::getInstance();
        $mutagen = 'StaticPage';
        if (false === ($cloud = $_myCache->getValue ( '__tagcloud' . $mutagen ))) {
            $cloud = \phpMyEngine\Modules\Tags\getCloud ( $mutagen );
            $_myCache->setValue ( '__tagcloud', $cloud, 1 );
        } else {
            $cloud = $_myCache->getValue ( '__tagcloud' );
        }
        $_myRender = \phpMyEngine\Render\Render::getInstance ();
        $_myRender->setValue ( 'mutagen', $mutagen );
        $_myRender->setValue ( 'tagCloud', $cloud );
        $_myRender->renderTemplate ( 'tagcloud.tpl' );
    }
    return null;
}