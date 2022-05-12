<?php
if($_SERVER['HTTP_HOST'] == 'localhost'){
          define('HOST', 'localhost');
          define('USER', 'root');
          define('PASSWORD', 'root');
          define('DB', 'catalog');
        } else {
          define('HOST', 'hidden');
          define('USER', 'hidden');
          define('PASSWORD', 'hidden');
          define('DB', 'hidden');
        }
$connect = mysqli_connect(HOST, USER, PASSWORD, DB);
?>