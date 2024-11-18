<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "garaj".
 *
 * @property int $Код авто
 * @property int $Тип поломки
 * @property int $Вид запчасти
 * @property int $Цена запчасти
 * @property int $Дата начала ремонта
 * @property int $Дата конца ремонта
 */
class migration extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'garaj';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Код авто', 'Тип поломки', 'Вид запчасти', 'Цена запчасти', 'Дата начала ремонта', 'Дата конца ремонта'], 'required'],
            [['Код авто', 'Тип поломки', 'Вид запчасти', 'Цена запчасти', 'Дата начала ремонта', 'Дата конца ремонта'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Код авто' => 'Код Авто',
            'Тип поломки' => 'Тип Поломки',
            'Вид запчасти' => 'Вид Запчасти',
            'Цена запчасти' => 'Цена Запчасти',
            'Дата начала ремонта' => 'Дата Начала Ремонта',
            'Дата конца ремонта' => 'Дата Конца Ремонта',
        ];
    }
}
