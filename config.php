<?php

 $host="127.0.0.1";
 $user="root";
 $pass="";
 $db="u3028214_sttmibdg";

class DB_class extends mysqli {
    public function __construct($host, $user, $pass, $db) {
        parent::__construct($host, $user, $pass, $db);

        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
    }
}
/*
$db = new DB_class('127.0.0.1', 'root', '', 'oop');

echo 'Success... ' . $db->host_info . "\n";

$db->close();
*/
?>
