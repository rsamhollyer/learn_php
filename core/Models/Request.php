<?php

class Request {
    public static function uri() {
        $url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), "/");
        return $url;
    }

    public static function method() {
        return $_SERVER['REQUEST_METHOD'];
    }
}
