<?php

/**
 * @param string|DateTime $date
 * @param string          $format
 *
 * @return bool
 */
function validateDateAsFormat($date, $format = "Y-m-d H:i:s")
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}
