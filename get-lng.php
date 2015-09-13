<?php
if(!isset($_SESSION))
{
    session_start();
}


if (isset($_GET['name'])) {
      $file = file_get_contents(__DIR__.'../lng/'.$_GET['name'].'.json');
      $_SESSION["lng"]=$_GET['name'];
      header('Content-Type: application/json');
      echo $file;
      exit;
}

function tr($name) {
    $file = file_get_contents(__DIR__.'../lng/'.$_SESSION["lng"].'.json');
    $oLng = json_decode($file);
    if (property_exists($oLng,$name))
       return $oLng->{$name};
    else
        return $name.' - N/A';
};



?>