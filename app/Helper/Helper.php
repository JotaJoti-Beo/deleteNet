<?php


namespace App\Helper;


class Helper{
    public static function getDeleted(){
        $value = file_get_contents(storage_path() . "/tmp/deleted.txt");

        if(strpos($value, "true") !== false){
            $boolean = true;
        }else{
            $boolean = false;
        }

        return $boolean;
    }

    public static function setDeleted(bool $value){
        $value = (bool) $value;

        if($value == 1){
            $string = "true";
        }else{
            $string = "false";
        }

        file_put_contents(storage_path() . "/tmp/deleted.txt", $string);
    }
}
