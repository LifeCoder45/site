<?php

class Utils
{
    public static function print_header(
        $headerTitle, 
        $headerDescription
    )
    {
        ob_start();
        require('header.php');
        echo ob_get_clean();
    }

    public static function print_footer()
    {
        ob_start();
        require('footer.php');
        echo ob_get_clean();
    }
}

?>