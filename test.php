<?php

$mysqli = new mysqli("127.0.0.1", "u372332793_4BZBO", "HeshamVolmr12345!@", "u372332793_3nROl");
$mysqli->query('SET foreign_key_checks = 0');
if ($result = $mysqli->query("SHOW TABLES"))
{
    while($row = $result->fetch_array(MYSQLI_NUM))
    {
        $mysqli->query('DROP TABLE IF EXISTS '.$row[0]);
    }
}

$mysqli->query('SET foreign_key_checks = 1');
$mysqli->close();

?>
