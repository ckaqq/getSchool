<?php
namespace Locate;

abstract class Basic {

    abstract public function getSchool($x, $y);

    protected function getHttp($url, $post, $cookies="", $referer="")
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        if(!empty($post)){
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }
        if (!empty($cookies)) {
            curl_setopt($ch, CURLOPT_COOKIE, $cookies);
        }
        if (!empty($referer)) {
            curl_setopt($ch, CURLOPT_REFERER, $referer);
        }
        $content = curl_exec($ch);
        curl_close($ch);
        return $content;
    }
}
