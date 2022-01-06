<?php

class Build
{
    public $charset = 'charset="UTF-8"';
    public $viewport = 'name="viewport" content="width=device-width, initial-scale=1.0"';
    public $css = 'link rel="stylesheet" href="./assets/css/style.css"';
    public $script = 'script src="./assets/js/script.js"';

    function metaCharset()
    {
        return "<meta " . "$this->charset " . " >";
    }

    function metaViewport()
    {
        return "<meta " . "$this->viewport " . ">";
    }

    function cssLink()
    {
        return "<" . "$this->css" . ">";
    }

    function imageSrc()
    {
        return "<img src='image.jpg' alt='image'>";
    }

    function linkHref()
    {
        return "<a href='www.becode.org'>Click me</a>";
    }

    function scriptSrc()
    {
        return "<" . "$this->script" . "></script>";
    }
}
