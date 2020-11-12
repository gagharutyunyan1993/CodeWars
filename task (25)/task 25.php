<?php
function debug($name)
{
    echo "<pre>" . print_r($name, 1) . "</pre>";
}

$seconds = 132030240;

define("MINUTE", 60);
define("HOUR", MINUTE * 60);
define("DAY", HOUR * 24);
define("YEAR", DAY * 365);

function view($time, $word)
{

    if ($time > 0) {
        return $time . " " . $word . ($time > 1 ? 's': '') . ', ';
    }

}

function format_duration($seconds)
{

    if ($seconds <= 0) {
        return 'now';
    };

    $years = floor($seconds / YEAR);
    $seconds -= $years * YEAR;

    $days = floor($seconds / DAY);
    $seconds -= $days * DAY;

    $hours = floor($seconds / HOUR);
    $seconds -= $hours * HOUR;

    $minutes = floor($seconds / MINUTE);
    $seconds -= $minutes * MINUTE;

    $second = $seconds;

    $result = view($years, 'year');
    $result .= view($days, 'day');
    $result .= view($hours, 'hour');
    $result .= view($minutes, 'minute');
    $result .= view($second, 'second');

    $result = substr($result, 0, -2);

    if (strlen($result) > 10) {
        $result = substr_replace($result, ' and', strripos($result, ', '),1);
    }
    return $result;
}

echo format_duration($seconds);
echo "<br/>";
echo format_duration(1);