<?php
    function setLang($lang){
        session_start();
        $_SESSION['lang'] = $lang;
    }


    if( isset($_GET["lang"]) ) {
        setLang($_GET["lang"]);
    }
?>