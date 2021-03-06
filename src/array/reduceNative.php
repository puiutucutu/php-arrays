<?php

/**
 * @param array   $arr
 * @param closure $reducer A function that will be supplied two arguments -
 *                         (i) the returned value of the previous iteration
 *                         and (ii) the value of the current iteration.
 * @param mixed   $initialValue
 *
 * @return mixed
 */
function reduceNative(array $arr, closure $reducer, $initialValue)
{
    return array_reduce($arr, $reducer, $initialValue);
}