<?php

namespace Locate;

class Xiaomai extends Basic
{
    public function getSchool($x, $y)
    {
        $result = array();
        $url = "http://h5.imxiaomai.com/wap/college/locate";
        $post = "latitude={$x}&longitude={$y}";
        $content = Xiaomai::getHttp($url, $post);
        $array = json_decode($content, true);
        if (!empty($array['data']['colleges'])) {
            foreach ($array['data']['colleges'] as $college) {
                return $college['collegeName'];
            }
        }
        return '';
    }
}