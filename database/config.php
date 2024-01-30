<?php
define("DB_HOST", "127.0.0.1");
define("DB_UNAME", "root");
define("DB_PASS", "root");
define("DB_DNAME", "quiz");
$conn = mysqli_connect(DB_HOST, DB_UNAME, DB_PASS, DB_DNAME);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
