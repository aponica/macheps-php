<?php declare(strict_types=1);
//=============================================================================
// Copyright 2019-2022 Opplaud LLC and other contributors. MIT licensed.
//=============================================================================

use Aponica\MachEps\cMachEps;
use PHPUnit\Framework\TestCase;

final class cMachEpsTest extends TestCase {

  //---------------------------------------------------------------------------

  public function testEQ() {

    $this->assertTrue( cMachEps::fbEQ(
      1.2345678901234567, 1.2345678901234568 ) );

    $this->assertFalse( cMachEps::fbEQ(
      1.23456, 1.23457 ) );

    } // testEQ

  //---------------------------------------------------------------------------

  public function testGT() {

    $this->assertTrue( cMachEps::fbGT(
      1.23457, 1.23456 ) );

    $this->assertFalse( cMachEps::fbGT(
      1.2345678901234567, 1.2345678901234566 ) );

    $this->assertFalse( cMachEps::fbGT(
      1.23456, 1.23457 ) );

    } // testGT

  //---------------------------------------------------------------------------

  public function testLT() {

    $this->assertTrue( cMachEps::fbLT(
      1.23456, 1.23457 ) );

    $this->assertFalse( cMachEps::fbLT(
      1.2345678901234566, 1.2345678901234567 ) );

    $this->assertFalse( cMachEps::fbLT(
      1.23457, 1.23456 ) );

    } // testLT

} // cMachEpsTest

// EOF
