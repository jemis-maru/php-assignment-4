<?php

namespace solutions;

final class MathUtility
{
  public static function add($a, $b)
  {
    return $a + $b;
  }

  public static function multiply($a, $b)
  {
    return $a * $b;
  }
}

class ExtendedMathUtility extends MathUtility
{
  // This will produce an error because final class can't be extended.
}

?>
