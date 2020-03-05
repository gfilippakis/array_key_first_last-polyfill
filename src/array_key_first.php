<?php

if (!function_exists('array_key_first')):
  /**
   * Gets the first key of an array
   *
   * @param mixed $arr An array.
   * @return mixed Returns the first key of array if the array is not empty; NULL otherwise.
   */
  function array_key_first($arr) {
    foreach($arr as $key => $unused) {
        return $key;
    }
    return null;
  }
endif;
