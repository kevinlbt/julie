<?php


class Errors {
    
    private static ?array $errors = [];
    
    public static function getErrors () {
        
        return self::$errors;
    }
    
    public static function checkErrorArticle () {
        
        self::$errors = [];
        
        if (isset($_POST) && !empty($_POST)) :
        
            if (!preg_match("#^[a-zA-Z0-9À-ú\.:\!\?\&',\s-]{1,150}$#i", $_POST['title'])) {
                        
                self::$errors[] = 'Le titre doit faire moins de 150 caractères';
            }
            
            if (isset($_POST['title']) && empty($_POST['title'])) {

                self::$errors[] = 'Il te faut un titre !';
            
            }
                
            if (!isset($_POST['category'])) {
             
                self::$errors[] = 'il faut préciser au moins une categorie pour ton article';
            }

            if (isset($_FILES['images']) && !empty($_FILES['images']['name'])) {

                if (getimagesize($_FILES["images"]["tmp_name"]) === false) {

                    self::$errors[] = "Le fichier n'est pas une images";
                }

                if (file_exists("./assets/uploads/" . basename($_FILES["images"]["name"]))) {

                    self::$errors[] = "Le fichier existe déjà";
                }

                if ($_FILES["images"]["size"] > 500000) {

                    self::$errors[] = "l'images est trop grande";
                }

                if(strtolower(pathinfo(("./assets/uploads/" . basename($_FILES["images"]["name"])),PATHINFO_EXTENSION)) != "webp") {

                    self::$errors[] = "L'images doit être au format webp";
                }
            }   

            if (count(self::$errors) > 0){
                
                return self::$errors;
            }
        
        endif;
        
    }
    
    public static function checkErrorAuth () {
        
        self::$errors = [];
        
        if (isset($_POST) && !empty($_POST)) :
            
            if (isset($_POST['username']) && empty($_POST['username'])) {

                self::$errors[] = 'Il te faut un identifiant';
            
            }
            if (isset($_POST['password']) && empty($_POST['password'])) {
                
                self::$errors[] = 'Il te faut un mot de passe';
            }
            
            if (count(self::$errors) > 0){
                
                return self::$errors;
            }
        
        endif;
        
    }
    
    public static function checkErrorContact () {
        
        self::$errors = [];
        
        if (isset($_POST) && !empty($_POST)) :
            
            if(!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                
                self::$errors[] = "l'email n'est pas valide";
            }
            
            if (isset($_POST['name']) && empty($_POST['name']) || strlen($_POST['name']) < 2) {

                self::$errors[] = "Le nom n'est pas valide ou trop court";
            
            }
            if (isset($_POST['firstname']) && empty($_POST['firstname']) || strlen($_POST['firstname']) < 2) {
                
                self::$errors[] = "Le prénom n'est pas valide ou trop court";
            }
                
            if (isset($_POST['subject']) && empty($_POST['subject'])) {
                
                self::$errors[] = "Il faut préciser le sujet";
            }
            
            if (isset($_POST['message']) && empty($_POST['message']) || strlen($_POST['message']) < 2) {
                
                self::$errors[] = "Le message n'est pas valide ou trop court";
            }
            
            if (count(self::$errors) > 0){
                
                return self::$errors;
            }
            
        endif;
    }

}