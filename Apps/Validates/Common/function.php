<?php
function filter_name($value){
    return stripos($value,'boss')===false;
}