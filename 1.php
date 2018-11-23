<?php

setlocale(LC_ALL, 'ru_RU', 'ru_RU.UTF-8', 'ru', 'russian');

$str = 'Давайте устроим встречу 20.05.2022 и потом ещё одну 12.06.2022';

$date_pattern = '/\d{2}.\d{2}.\d{4}/';

preg_match_all($date_pattern, $str, $matches);

foreach ($matches[0] as $match) {
    $str = str_replace($match, $match . ' (' . mb_strtolower(strftime("%a",strtotime($match))) . ')', $str);
}

echo $str;
