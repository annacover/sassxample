<?php

namespace Weissheiten\Sassxample;

class Template{
    public function render($templatepath){
        $homepage = file_get_contents($templatepath);
        $arr = [];
        $arr['username'] = "wsf";
        $arr['userin'] = "bay";
        $arr['lehrer'] = "ksp";
        $arr['lehrerin'] = "osw";
        $arr['schueler'] = "harald";
        $arr['schuelerin'] = "tamaris";

        foreach ($arr as $key => $value){
            try{
                $homepage = str_replace("###{$key}###",$value,$homepage);
            }catch (\Exception $e){}
        }

        echo $homepage;

    }

}
