<?php declare(strict_types=1);
//=============================================================================
// Copyright 2019-2022 Opplaud LLC and other contributors. MIT licensed.
//=============================================================================

namespace Aponica\MachEps;

//-----------------------------------------------------------------------------
/// Provides functions for comparing values within machine epsilon.
//-----------------------------------------------------------------------------

class cMachEps {

  //--------------------------------------------------------------------------
  /// Check if one number equals another, within machine epsilon.
  ///
  /// @param $n1
  ///   The first value to compare.
  ///
  /// @param $n2
  ///   The second value to compare.
  ///
  /// @returns bool:
  ///   true if $n1 equals $n2 (within machine epsilon limit).
  //--------------------------------------------------------------------------

  public static function fbEQ( float $n1, float $n2 ) : bool {
    return ( abs( $n1 - $n2 ) < static::fnEpsilon() );
    }


  //--------------------------------------------------------------------------
  /// Check if one number is greater than another, within machine epsilon.
  ///
  /// @param $n1
  ///   The first value to compare.
  ///
  /// @param $n2
  ///   The second value to compare.
  ///
  /// @returns bool:
  ///   true if $n1 is greater than $n2 (within machine epsilon limit).
  //--------------------------------------------------------------------------

  public static function fbGT( float $n1, float $n2 ) : bool {
    return ( $n1 > ( $n2 + static::fnEpsilon() ) );
    }

  //--------------------------------------------------------------------------
  //  Checks if one number is less than another, within machine epsilon.
  //
  //  @param $n1
  //    The first value to compare.
  //
  //  @param $n2
  //    The second value to compare.
  //
  //  @returns bool:
  //    true if $n1 is less than $n2 (within machine epsilon limit).
  //--------------------------------------------------------------------------

  public static function fbLT( float $n1, float $n2 ) : bool {
    return ( $n1 < ( $n2 - static::fnEpsilon() ) );
    }

  //--------------------------------------------------------------------------
  /// Returns a value usable as machine epsilon.
  ///
  /// @returns float:
  ///   Returns PHP_FLOAT_EPSILON if it is defined (PHP>=7.2.0), else a
  ///   very small positive number to use as machine epsilon.
  //--------------------------------------------------------------------------

  public static function fnEpsilon() : float {
    return ( defined( 'PHP_FLOAT_EPSILON' ) ?
      PHP_FLOAT_EPSILON : 0.00001 );
    }

} // cMachEps

// EOF
