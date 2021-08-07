<?php

/**
  * Get the message
  *
  * @return object Connection to a MYSQL server
  */

function getDB() {
  $db_host = "";
  $db_name = "";
  $db_user = "";
  $db_pass = "";

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

  if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
  }

  return $conn;
}
