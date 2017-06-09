<?php
  $ip = file_get_contents("http://169.254.169.254/latest/meta-data/public-ipv4");

  echo $ip;
?>
