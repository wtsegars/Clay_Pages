<?php

/**
  * Get the message
  *
  * @return object Connection to a MYSQL server
  */

function getDB() {
  $db_host = "localhost";
  $db_name = "cms";
  $db_user = "cms_www";
  $db_pass = "!cH5DM5P]Cn))O7W";

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

  if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
  }

  return $conn;
}
