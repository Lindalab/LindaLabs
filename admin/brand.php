<?php
session_start();
function checkUserRole($rolevalue)
{
    if ($rolevalue === '0') {
        return true;
    } else {
        return false;
    }
}

//checkUserRole('1');