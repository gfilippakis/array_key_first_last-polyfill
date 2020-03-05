<?php

if (!function_exists('array_key_last')):
  /**
   * Gets the first key of an array
   *
   * @param mixed $arr An array.
   * @return mixed Returns the last key of array if the array is not empty; NULL otherwise.
   */
  function array_key_last($arr) {
    if (!empty($arr)) {
      return key(array_slice($arr, -1, 1, true));
    }
  }
endif;
