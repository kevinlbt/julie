<?php

class Upload {

    private static string $target_dir = "assets/uploads/";
    private static ?string $target_file = null;
    
    public static function uploadFile () {

        if (isset($_FILES['images'])) {

            self::$target_file = getcwd().DIRECTORY_SEPARATOR . self::$target_dir . basename($_FILES["images"]["name"]);

            move_uploaded_file($_FILES["images"]["tmp_name"], self::$target_file);

        }
    }
}