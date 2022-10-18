<?php

function linkCSS($cssPath){
    $url = BASEURL . "/" .$cssPath;
    echo '<link rel="stylesheet" href="'.$url.'">';
}

?>