<?php

/*
class csvLoad
{
    public static function returnArray(String $filePath) :array
    {
        $file = fopen($filePath,"r");
        $records = array();

        while(! feof($file))
        {
            $records[] = fgetcsv($file);
        }

        fclose($file);
        return $records;
    }
}
*/



    $myfile = fopen("../data/data.csv", "r") or die("Unable to open file!");
    $fileInfo = fread($myfile, filesize("../data/data.csv"));
    fclose($myfile);

    ?>