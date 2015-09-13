<?php
/**
 * ajax-lng.
 * PHP Version 5
 * @package ajax-lng
 * @link https://github.com/vladyslavml/ajax-lng
 * @author Vladyslav Melnychenko  <vlad.melnychenko@outlook.com>
 * @copyright 2015
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 * @note This program is distributed in the hope that it will be useful - WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.
 */


/**
 * If session not defined  call session_start();
 */
if(!isset($_SESSION))
{
    session_start();
}


/**
 * Initial lng file
 * GET request /get-lng.php?name=en-en
 * return JSON language file
 * @return string
 */
if (isset($_GET['name'])) {
      $file = file_get_contents(__DIR__.'../lng/'.$_GET['name'].'.json');
      $_SESSION["lng"]=$_GET['name'];
      header('Content-Type: application/json');
      echo $file;
      exit;
}


/**
 * Return translation text for $name use in php scripts
 * @param string $name
 * @return string
 */
function tr($name) {
    $file = file_get_contents(__DIR__.'../lng/'.$_SESSION["lng"].'.json');
    $oLng = json_decode($file);
    if (property_exists($oLng,$name))
       return $oLng->{$name};
    else
        return $name.' - N/A';
};



?>