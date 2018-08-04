<?php

namespace Whitts;

class JS_Selector{
    
    public function outputJS(){
        //js goes here:
        $output = "

<script>
    alert('Hello there!');
</script>
        
        ";
        echo $output;
    } 
}
