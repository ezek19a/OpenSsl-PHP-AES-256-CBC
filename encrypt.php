<?php

require_once "Openssl.php";

$string = "abcd";

$key = "1234";

$encrypt = Openssl::encrypt($string,$key);

echo "String: abcd";

echo "<br />";

echo "Key: 1234";

echo "<br />";

echo "Encrypt : " . $encrypt;