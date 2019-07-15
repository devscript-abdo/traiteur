<?php
/**
 * User: Abdelghafour(devscript)
 * Date: 03/02/2019
 * Time: 13:46
 * email :goldvision93@gmail.com
 * tele : +212677512753
 */

namespace App;


class Validator
{


    private $data ;

    private $errors = [] ;

    public function __construct($data)
    {

        $this->data = $data;
    }

    /**
     * @param $field
     * @return |null
     *
     * jbed les fields(les inputs ($_POST))
     */
    private function getField($field)
    {

        if(!isset($this->data[$field]))
        {
            // exemple : $_POST['zsffzefz']

            //  $this->errors[$field] = "sorry this field is not defined in your form ";
            return null;
        }
        return $this->data[$field]; // exemple : $_POST['titre']
    }

    /**
     * @param $field
     * @param $errorsMsg
     *
     * bayna ghi mn smytha
     */
    public function isAlpha($field , $errorsMsg)
    {

        if(!preg_match('/^[a-zA-Z]+$/',$this->getField($field)))
        {
            $this->errors[$field] = $errorsMsg;
        }
    }

    /**
     * @param $field
     * @param $errorsMsg
     *
     * bayna ghi mn smytha
     */
    public function isNumber($field , $errorsMsg)
    {

        if(!preg_match('/^[0-9]+$/',$this->getField($field)))
        {
            $this->errors[$field] = $errorsMsg;
        }
    }

    /**
     * @param $field
     * @param $errorsMsg
     * bayna ach kat3ni
     */
    public function isEmpty($field , $errorsMsg)
    {

        if(empty($this->getField($field)) || $this->getField($field) === '')
        {
            $this->errors[$field] = $errorsMsg;
        }
    }

    /**
     * @param $field
     * @param $table
     * @param $errorsMsg
     *
     * valide bli le chmape maykonch mdouble f database :p
     */
    public function isUnique($field,$table,$errorsMsg)
    {

        $record = App::getInstance()->getDb()->prepare("SELECT id FROM $table WHERE $field = ? ",[$this->getField($field)],null,true);

        if($record)
        {
            $this->errors[$field] = $errorsMsg;
        }

    }

    /**
     * @param $field
     * @param $errorsMsg
     *
     * byna ghi mn smytha
     */
    public function isEmail($field , $errorsMsg)
    {

        if(!filter_var($this->getField($field),FILTER_VALIDATE_EMAIL))
        {
            $this->errors[$field] = $errorsMsg;
        }
    }

    /**
     * @param $field
     * @param $errorsMsg
     *
     * chof wach $_POST['password'] == $_POST['password_confirm'] y3ni wach nefs la value :p
     */
    public function isConfirmed($field , $errorsMsg)
    {
        $value = $this->getField($field);

        if(empty($value) || $value != $this->getField($field.'_confirm')) // hhhh => $_POST['password_confirm']
        {
            $this->errors[$field] = $errorsMsg;
        }
    }

    /**
     * @return bool
     *
     * chof wach makayen hta error f tableu errors
     */
    public function isValid()
    {

        return empty($this->errors);
    }

    /**
     * @return array
     *
     * bayna ghi mn smytha
     */
    public function getErrors()
    {
        return $this->errors;
    }

}