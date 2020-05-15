<?php
// Put your PHP functions and modules here
session_start();
function preShow( $arr, $returnAsString=false ) {

    $ret  = '<pre>' . print_r($arr, true) . '</pre>';

    if ($returnAsString)

         return $ret;

   else 

        echo $ret; 

}

function printMyCode() {

    $lines = file($_SERVER['SCRIPT_FILENAME']);

    echo "<pre class='mycode'><ol>";

    foreach ($lines as $line)

           echo '<li>'.rtrim(htmlentities($line)).'</li>';

    echo '</ol></pre>';
}

if (isset($_POST['session-reset'])) {
    
    foreach($_SESSION as $something => &$whatever) {
         unset($whatever);
    };

}

?>


