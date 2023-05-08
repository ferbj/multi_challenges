<?php
require_once('vendor/autoload.php');

use App\Text;

if ($_POST && $_POST['text']) {
            
            $textarea = $_POST['text'];
            echo "<h3>Text encoded</h3>";
            echo Text::transform($textarea);
            echo "<br>";
            echo "<br>";
            echo "<h3>Text decoded</h3>";
            echo Text::revtransform($textarea);
}
            
 