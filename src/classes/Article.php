<?php

class Article {

    private int $id;
    private ?string $title = null;
    private ?string $content = null;
    private ?string $date = null;
    private ?string $user_id = null;
    private ?string $image_path = null;


// getter 

    public function getId () {

        return $this->id;
    }

    public function getTitle () {

        return $this->title;
    }

    public function getContent () {

        return $this->content;
    }

    public function getDate () {

        return $this->date;
    }

    public function getUserId () {

        return $this->user_id;
    }

    public function getImagePath() {

        return $this->image_path;
    }
    
// methods article
    
    //sanitized input data 
    private static function sanitizing ($data) {
        
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        return $data;
        
    }
    
    public static function getArticles () {

        $curl = curl_init(); //Initializes curl
        curl_setopt($curl, CURLOPT_URL, 'http://localhost:1337/api/articles?populate=*');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]); // Sets header information for authenticated requests

        $res = curl_exec($curl);
        curl_close($curl);

        $res = json_decode($res);

        function object_to_array($object) {
            if (is_object($object)) {
             return array_map(__FUNCTION__, get_object_vars($object));
            } else if (is_array($object)) {
             return array_map(__FUNCTION__, $object);
            } else {
             return $object;
            }
        }

        $res = object_to_array($res);

        return $res;
    }
}