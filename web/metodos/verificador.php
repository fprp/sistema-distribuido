<?php
function verificador($path){
    if(!$_SESSION['id']){
        header('Location: '.$path);
        exit;
    }
}
?>