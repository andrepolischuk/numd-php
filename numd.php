<?php

  class Numd {

    /**
     * Decline value
     * @param  number $num
     * @param  array  $word
     * @return string
     */

    private static function decline($num, $word) {

      $num = abs($num);

      // fractional
      if ((float) floor($num) !== $num) {
        return $word[1];
      }

      // integer
      if ($num > 10 && (($num % 100) - (($num % 100) % 10)) / 10 === 1) {
        return $word[2];
      } else {
        $nn = $num % 10;
        return $word[($nn === 0 || $nn >= 5) ? 2 : ($nn >= 2 ? 1 : 0)];
      }

    }

    /**
     * Numd call
     * @param  array $arguments
     * @return string
     */

    public static function call($arguments) {

      $num  = (float) $arguments[0];
      $word = $arguments;

      array_splice($word, 0, 1);

      if (count($word) === 3) {
        return $num . ' ' . self::decline($num, $word);
      }

    }

  }

  /**
   * Numd wrapper
   * @param  number $num
   * @param  string $nominative
   * @param  string $genitiveSingular
   * @param  string $genitivePlural
   * @return string
   */

  function numd() {
    return Numd::call(func_get_args());
  }

?>
