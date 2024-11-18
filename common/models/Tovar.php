<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tovar".
 *
 * @property int $Код_товара
 * @property string $Наим_товара
 * @property string $КолBо_товара
 * @property string $Цена_товара
 */
class Tovar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tovar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Наим_товара', 'КолBо_товара', 'Цена_товара'], 'required'],
            [['Наим_товара'], 'string', 'max' => 25],
            [['КолBо_товара', 'Цена_товара'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Код_товара' => 'Код Товара',
            'Наим_товара' => 'Наим Товара',
            'КолBо_товара' => 'Кол Bо Товара',
            'Цена_товара' => 'Цена Товара',
        ];
    }
}
