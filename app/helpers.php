<?php

use App\Country;

if (! function_exists('read_csv')) {
    function read_csv($csvFile, $array) {
        $file_handle = fopen($csvFile, 'r');
        $columnnames = fgetcsv($file_handle, 1024);
        while (true == ($columns = fgetcsv($file_handle, 1024))) {
            $row = array_combine($columnnames, $columns);
            $csv[] = $row;
        }
        fclose($file_handle);
        return $csv;
    }
}

if (! function_exists('get_countries')) {
    function get_countries() {
        $tmp_countries_data = Country::select('name')->get();
        $countries = json_decode($tmp_countries_data);
        return $countries;
    }
}
