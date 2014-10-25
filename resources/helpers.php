<?php

/**
 * Get a preference value.
 *
 * @param      $key
 * @param null $default
 * @return mixed
 */
function preference($key, $default = null)
{
    return app('streams.preferences')->get($key, $default);
}