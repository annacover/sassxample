<?php

namespace Weissheiten\Sassxample;

class Template{

    public function render($templatepath){
        $homepage = file_get_contents($templatepath);
        $homepage = str_replace("###username###",'WSF',$homepage);
        echo $homepage;

    }

}