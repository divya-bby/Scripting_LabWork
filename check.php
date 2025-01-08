<?php
function checkEmptyField($index)
{
    if(isset($_POST[$index]) && !empty($_POST[$index]) && trim($_POST[$index])){
        return true;
    } else {
        return false;
    }
}
?>