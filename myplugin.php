<?php
/**
 * Plugin name: Ashimi's First Plug
 * Author: <a href="https://ashimi.xyz" target="_blank">Ashimi Abdulwahab</a>
 * Description: Ashimi playing around. lol.
 * Version: 1
 * 
**/

    function plug_function()
    {
        $info = "Trying new stuffs out";
        $info .= "<div  style='color:green;'>We are building Cool stuff!!!</div>";
        $info .= "<div  style='color:red;'>We are building Cool stuff!!!</div>";
        $info .= "<div  style='color:yellow;'>We are building Cool stuff!!!</div>";
        return $info;
    }
    add_shortcode('example', 'plug_function');
?>