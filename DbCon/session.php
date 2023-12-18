<?php
session_start(); 

if (!isset($_SESSION['UserID']))
{
  echo "<script type = \"text/javascript\">
  window.location = (\"../index.php\");
  </script>";

}
?>
