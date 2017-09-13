<?php
namespace uuid_to_msb_and_lsb_bit_converter;

class Uuid_converter
{
    /**
      * breaks UUID into two 64 bit integers
      *
      * @param string UUID
      * @return array least and most significant bits
      */
    public static function breakIntoMsbLsbBits($uuidStr) {
      $data = self::uuidToHex($uuidStr);
      $msb = self::trueHexConvert(substr($data, 0, 16));
      $lsb = self::trueHexConvert(substr($data, 16, 32));
      return array('lsb'=>$lsb, 'msb'=>$msb);
    }

    /**
      * removes '-' from uuid string
      *
      * @param string UUID
      * @return string UUID without hyphen
      */
    public static function uuidToHex($uuid) {
        return str_replace('-', '', $uuid);
    }

    public static function trueHexConvert($data) {
      $packed = pack("H*", $data);
      return unpack("q", strrev($packed))[1];
    }

    /**
      * builds standard UUID from two 64 bit integers
      *
      * @param string msb
      * @param string lsb
      * @return string UUID
      */
    public static function buildUuid($msb, $lsb) {
        $highMap = 0xffffffff00000000;
        $lowMap = 0x00000000ffffffff;

        $msbHigher = ($msb & $highMap) >> 32;
        $lsbHigher = ($lsb & $highMap) >> 32;

        $msbLower = $msb & $lowMap;
        $lsbLower = $lsb & $lowMap;


        $msbHigherInHex = sprintf("%016s", dechex($msbHigher));
        $msbLowerInHex = sprintf("%016s", dechex($msbLower));
        $lsbHigherInHex = sprintf("%016s", dechex($lsbHigher));
        $lsbLowerInHex = sprintf("%016s", dechex($lsbLower));

        return $tuuid = sprintf("%s-%s-%s-%s-%s%s", substr($msbHigherInHex, 8, 8), substr($msbLowerInHex, 8, 4), substr($msbLowerInHex, 12, 4), substr($lsbHigherInHex, 8, 4), substr($lsbHigherInHex, 12, 4), substr($lsbLowerInHex, 8, 8));
    }
}