<?php

require_once "Openssl.php";

$string = "S1JGYUwrQXRDSzNWNngvWThyL0Rndz09";

$key = "1234";

$decrypt = Openssl::decrypt($string, $key);

echo "String: S1JGYUwrQXRDSzNWNngvWThyL0Rndz09";

echo "<br />";

echo "Key: 1234";

echo "<br />";

echo "Decrypt : " . $decrypt;