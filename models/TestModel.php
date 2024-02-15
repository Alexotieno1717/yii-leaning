<?php

namespace app\models;

use yii\base\Model;

class TestModel extends Model
{
    public $name;
    public $surname;
    public $email;

    /**
     * @return array[]
     */
    public function rules(): array
    {
        return [
            [['name', 'surname'], 'required', 'message'=>'Please enter the correct credentials']
        ];
    }
}