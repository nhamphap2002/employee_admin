<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

class HelperTienluong extends JComponentHelper {

    public static function includeFileInFolder($pathFolder) {
        if (file_exists($pathFolder)) {
            $files = scandir($pathFolder);
            for ($i = 0; $i < count($files); $i++) {
                if (is_file($pathFolder . DS . $files[$i]) && file_exists($pathFolder . DS . $files[$i])) {
                    include_once ($pathFolder . DS . $files[$i]);
                }
            }
        }
    }

    public static function formatDate($date, $format = 'm/d/Y') {
        if ($date == '0000-00-00' || $date == '' || $date === '0000-00-00 00:00:00') {
            return false;
        }
        if ($format == '' || $format == null) {
            $format = 'Y-m-d H:i:s';
        }
        $date = date_create($date);
        return date_format($date, $format);
    }

}

?>