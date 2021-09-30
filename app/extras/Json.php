<?php

namespace App\extras;

use App\Auth\Verify;


/**
 * Class Json
 * @package App\extras
 */
class Json
{
    /**
     * @param $container
     * @param $obj
     * @return string
     * @SuppressWarnings("exit")
     */
    public static function convertJson($container, $obj)
    {

        $array = array();


        foreach ($obj as $value) {
            array_push($array, $value->jsonSerialize());
        }

        $data['data'] = $array;

        return json_encode($data);
    }

    /**
     * @param $obj
     * @param $text
     * @param $idMethod
     * @return string
     * @SuppressWarnings(SuperGlobal)
     */
    public static function select($obj, $text, $idMethod)
    {
        $searched = filter_var($_REQUEST['q'], FILTER_SANITIZE_STRING);

        $array = array();

        foreach ($obj as $value) {
            $name = $value->$text();

            if (preg_match('/(' . $searched . ')/', $name)) {
                array_push($array, ['id' => $value->$text(), 'text' => $value->$idMethod()]);
            }
        }

        $data['results'] = $array;

        $json = json_encode(UTF8Coverter::convertFromLatin1ToUtf8Recursively($data));

        return $json;
    }

    static function array2csv($data, $delimiter = ',', $enclosure = '"', $escape_char = "\\")
    {
        $f = fopen('php://memory', 'r+');
        foreach ($data as $item) {
            fputcsv($f, $item, $delimiter, $enclosure, $escape_char);
        }
        rewind($f);
        return stream_get_contents($f);
    }

    static function array_to_csv_download($array, $filename = "export.csv", $delimiter = ";")
    {
        // open raw memory as file so no temp files needed, you might run out of memory though
        $f = fopen('php://memory', 'w');

        fputcsv($f,array_keys($array[0]),$delimiter);
        // loop over the input array
        foreach ($array as $line) {
            // generate csv lines from the inner arrays
            fputcsv($f, $line, $delimiter);
        }
        // reset the file pointer to the start of the file
        fseek($f, 0);
        // tell the browser it's going to be a csv file
        header('Content-Type: application/csv');
        // tell the browser we want to save it instead of displaying it
        header('Content-Disposition: attachment; filename="' . $filename . '";');
        // make php send the generated csv lines to the browser
        fpassthru($f);

        return stream_get_contents($f);

    }
}
