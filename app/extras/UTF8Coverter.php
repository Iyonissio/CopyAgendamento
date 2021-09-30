<?php
/**
 * Created by PhpStorm.
 * User: Mr. Macatange
 * Date: 09/05/2018
 * Time: 15:26
 */

namespace App\extras;

class UTF8Coverter
{
    public static function convertFromLatin1ToUtf8Recursively($dat)
    {
        if (is_string($dat)) {
            return utf8_encode($dat);
        } elseif (is_array($dat)) {
            $ret = [];
            foreach ($dat as $i => $d) {
                $ret[$i] = self::convertFromLatin1ToUtf8Recursively($d);
            }

            return $ret;
        } elseif (is_object($dat)) {
            foreach ($dat as $i => $d) {
                $dat->$i = self::convertFromLatin1ToUtf8Recursively($d);
            }

            return $dat;
        } else {
            return $dat;
        }
    }
}
