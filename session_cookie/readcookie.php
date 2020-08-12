<?php
  if( isset($_COOKIE["name"]))
  {
      echo "Welcome " . $_COOKIE["name"];
  }
  else 
  {
      echo "Không có tên";
  }
?>
