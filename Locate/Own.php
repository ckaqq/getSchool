<?php

namespace Locate;

class Own extends Basic
{
    public function getSchool($x, $y)
    {
        $json = file_get_contents(__DIR__ . '/school.json');
        $array = json_decode($json, true);
        $min = 999999999;
        $name = "";
        foreach ($array as $province) {
            for ($i=0; $i < count($province); $i++) { 
                $len = ($province[$i]['x'] - $x) * ($province[$i]['x'] - $x) + ($province[$i]['y'] - $y) * ($province[$i]['y'] - $y);
                if ($len < $min) {
                    $min = $len;
                    $name = $province[$i]['name'];
                }
            }
        }
        return $name;
    }
}