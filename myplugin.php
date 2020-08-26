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

    function plug_meun_option()
    {
        add_menu_page('Header & Footer Scripts', 'Ashimi Plugin', 'manage_options', 'ashimi-plug', 'plug_scripts_page', '',200);
    }
    add_action('admin_menu', 'plug_meun_option');

    function plug_scripts_page()
    {
        $header_scripts = get_option('plug_header', 'none');
        $footer_scripts = get_option('plug_footer', 'none');
       ?>
       <div class="wrap"></div>
       <h1>Updating Header and Footer </h1>
       <h5>By Ashimi</h5>
       <form method="post" action="">
       <label for="plug_header">Header Scripts</label>
       <textarea name="plug_header" class="large-text"><?php print $plug_header; ?></textarea>
       <label for="plug_footer">Footer Scripts</label>
       <textarea name="plug_footer" class="large-text"><?php print $plug_footer; ?></textarea>
       <input type="submit" name="submit_plug_update" class="button button-primary"value="UPDATE"></input>
       </form>
       <?php
    }
?>