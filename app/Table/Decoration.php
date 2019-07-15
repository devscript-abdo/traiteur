<?php
/**
 * User: Abdelghafour
 * Date: 18/01/2019
 * Time: 20:47
 * email : goldvision93@gmail.com
 * tele : +212677512753
 */

namespace App\Table;

use App\Config;

class Decoration extends Table
{

    protected static $table ="decoration";

    public static function addDecoration($file,$titre)
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
            if (!in_array($extension, $allowed_extensions)) {
                $errors[] = "le fichier n'est pas valid";
            }

        }

        if (empty($errors)) {

            $config = Config::getInstance();

            move_uploaded_file($image_temp, $config->get('pathToUp').'/decoration/' . $image_name);
            //var_dump($image_name);
            // $img_path = $_SERVER['DOCUMENT_ROOT']. '\tr\img\apropos\\' .$image_name;

            //  $sql = "UPDATE apropos SET ".$photo." = ? WHERE id = 1";

            $sql = "INSERT INTO ".self::$table." SET image = ? , titre = ? ";

            return self::call()->prepare($sql,[$image_name,$titre],null,true);

            // echo "le fichier a ete uploader avec succes";
        }

        return isset($errors)? $_SESSION['errors'] = $errors : null ;
    }


}