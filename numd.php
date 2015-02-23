<?php

  class Numd {

    /**
     * Genetive singular test
     * @param  number  $num
     * @return boolean
     */

    private static function isGenitiveSingular($num) {
      return (float) floor($num) !== $num || $num % 10 >= 2;
    }

    /**
     * Genetive plural test
     * @param  number  $num
     * @return boolean
     */

    private static function isGenitivePlural($num) {
      $nn = $num % 10;
      return ($num > 10 && (($num % 100) - (($num % 100) % 10)) / 10 == 1) ||
        ($nn == 0 || $nn >= 5);
    }

    /**
     * Numeral decline
     * @param  number $num
     * @param  string $nominative
     * @param  string $genitiveSingular
     * @param  string $genitivePlural
     * @return string
     */

    public static function decline($num, $nominative, $genitiveSingular, $genitivePlural) {

      $num  = (float) $num;

      if (count(func_get_args()) !== 4) {
        return;
      }

      $res = $num . ' ';
      $num = abs($num);

      if (self::isGenitivePlural($num)) {
        return $res . $genitivePlural;
      } else if (self::isGenitiveSingular($num)) {
        return $res . $genitiveSingular;
      } else {
        return $res . $nominative;
      }

    }

  }

?>
