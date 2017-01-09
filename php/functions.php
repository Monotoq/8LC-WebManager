<?php
    function session_valid_id($session_id){
        return preg_match('/^[-,a-zA-Z0-9]{1,128}$/', $session_id) > 0;
    }

    function write_log(){

    }

    function write_alerts($error, $src_doc, $src_addr){
            echo "Se detectó un error: $error en $src_doc creado por $src_addr";

    }
?>