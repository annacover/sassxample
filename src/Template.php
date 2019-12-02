<?php

namespace Weissheiten\Sassxample;

class Template{

    public function render(){
        $homepage = file_get_contents('./src/Templates/home.html');
        $homepage = str_replace("###username###",'WSF',$homepage);
        echo $homepage;

    }

}