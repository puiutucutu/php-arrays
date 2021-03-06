<?php

/**
 * @param array  $items
 * @param string $keyName
 *
 * @return array
 * @throws OutOfBoundsException
 */
function indexByKeyValue(array $items, $keyName)
{
    $temp = [];
    foreach ($items as $k => $v) {
        if (!isset($v[$keyName])) {
            throw new OutOfBoundsException(
                "Key name `${keyName}` does not exist on item at index `${k}`"
            );
        }
        $temp[$v[$keyName]] = $v;
    }

    return $temp;
}
