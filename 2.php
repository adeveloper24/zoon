<?php

$legal_chars = ['Q', 'W', 'R', 'Y', 'U', 'S', 'D', 'F', 'G', 'J', 'Z', 'V', 'N', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

do {
    $pswd = strtoupper(substr(base64_encode(md5(rand(1000, 10000))), 0, 6));

    foreach (str_split($pswd) as $letter) {
        if (array_search($letter, $legal_chars))
            $check = 0;
        else {
            $check = 1;
            break;
        }
    }

} while ($check != 0);

echo $pswd;
