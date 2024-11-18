<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "garaj".
 *
 * @property int $Код_авто
 * @property string $Тип_поломки
 * @property string $Вид_запчасти
 * @property string $Цена_запчасти
 * @property string $Дата_начала_ремонта
 * @property string $Дата_конца_ремонта
 */
class Garaj extends \yii\db\ActiveRecord
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
            [['Тип_поломки', 'Вид_запчасти', 'Цена_запчасти', 'Дата_начала_ремонта', 'Дата_конца_ремонта'], 'required'],
            [['Тип_поломки', 'Вид_запчасти', 'Цена_запчасти'], 'string', 'max' => 25],
            [['Дата_начала_ремонта', 'Дата_конца_ремонта'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Код_авто' => 'Код Авто',
            'Тип_поломки' => 'Тип Поломки',
            'Вид_запчасти' => 'Вид Запчасти',
            'Цена_запчасти' => 'Цена Запчасти',
            'Дата_начала_ремонта' => 'Дата Начала Ремонта',
            'Дата_конца_ремонта' => 'Дата Конца Ремонта',
        ];
    }
}
