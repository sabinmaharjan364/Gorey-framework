<?php
function redirect($page){
    header('location: '. SITEROOT .$page );
    // header("location:".ERROR."404.php?msg=URL not found. Please check your url");

}
function dd($string=""){
    echo "<pre>";
    echo $string;
    echo "</pre>";
    die();
}

function P($array=[]){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    die();
}

function PP($array=[]){
    echo "<pre>";
    print_r($array->fetchArray());
    echo "</pre>";
    die();
}
function V($array=[]){
    echo "<pre>";
    var_dump($array->fetchArray());
    echo "</pre>";
    die();
}
function url_path($file){
    return SITEROOT.

    header('location: '. SITEROOT .$file );

}
