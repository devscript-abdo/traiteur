<?php
/**
 * User: Abdelghafour
 * Date: 18/01/2019
 * Time: 11:51
 * email : goldvision93@gmail.com
 * tele : +212677512753
 */
namespace App\Table;

use App\App;

use App\Config;

class Accueil extends Table
{


    protected static $table ="accueil";


    public static function addAccueilImage($file,$photo)
    {
        $errors = [];
        $image_name  = $file['name'];
        //$new_name = str_replace($image_name,'Apropos-image'.rand(1,3),$image_name);
        // var_dump($new_name);
        // $image_type  = $file['type'];
        $image_temp  = $file['tmp_name'];
        // $image_size  = $file['size'];
        $image_error = $file['error'];
        //echo $image_size;

        //les extensions li masmo7 bihom
        $allowed_extensions = ['jpg', 'jpeg', 'png'];

        // jbed l'extention dyal fichier
        $image_extension = explode('.', $image_name);
        $extension = strtolower(end($image_extension));
        // var_dump($extension);

        //chouf l'user wach selectiona chi fichier wla la
        if ($image_error == 4) {

            $errors[] = "le fichier n'est pas selectionner";

            //chouf la taile dyal fichier
        } else {
            /* if($image_size > 8000000)
             {
                 $errors[] = "<div> taile de fichier est plus grand</div>";
             }*/

            //chouf l'extention dyal fichier wach valid
            if (!in_array($extension, $allowed_extensions))
            {
                $errors[] = " le fichier n'est pas valid";
            }

        }

        if (empty($errors)) {

            $config = Config::getInstance();

            // var_dump($_SERVER['DOCUMENT_ROOT'] .'\tra\public\img\accueil\\');
            // die();

            move_uploaded_file($image_temp, $config->get('pathToUp').'/accueil/'. $image_name);
            //var_dump($image_name);
            // $img_path = $_SERVER['DOCUMENT_ROOT']. '\tr\img\apropos\\' .$image_name;
            $id = 1;
            // var_dump($photo);
            // die();
            switch ($photo)
            {
                case 'photo1':
                    $photo ='photo1';

                    break;
                case 'photo2':
                    $photo ='photo2';

                    break;
                case 'photo3':
                    $photo ='photo3';

                    break;
                case 'photo4':
                    $photo ='photo4';

                    break;

            }

            $sql = "UPDATE ".self::$table." SET ".$photo." = ? WHERE id = 1";
            // $sql = "INSERT INTO ".self::$table." SET ".$photo." = ? ";


            $oldimg = self::call()->prepare("SELECT ".$photo."  FROM " .self::$table. " WHERE id = ?",[$id],get_called_class(),true);

            $file   = $config->get("pathOfFile").self::$table."/".$oldimg->$photo;

            //var_dump($file);

            if(file_exists($file))
            {
                unlink($file);
                //var_dump($file);
            }
            return self::call()->prepare($sql,[$image_name],null,true);

            // echo "le fichier a ete uploader avec succes";
        }
       // var_dump($errors);
       // die();
        return isset($errors)? $_SESSION['errors'] = $errors : null ;
    }
}