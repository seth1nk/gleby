<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "avtomobili".
 *
 * @property int $Код_авто
 * @property string $Регистрационный_N_авто
 * @property string $Назв_авто
 * @property string $Год_выпуска_авто
 * @property string $Пробег
 * @property string $Категория
 */
class Avtomobili extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'avtomobili';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Регистрационный_N_авто', 'Назв_авто', 'Год_выпуска_авто', 'Пробег', 'Категория'], 'required'],
            [['Регистрационный_N_авто', 'Назв_авто'], 'string', 'max' => 25],
            [['Год_выпуска_авто'], 'string', 'max' => 10],
            [['Пробег'], 'string', 'max' => 15],
            [['Категория'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Код_авто' => 'Код Авто',
            'Регистрационный_N_авто' => 'Регистрационный N Авто',
            'Назв_авто' => 'Назв Авто',
            'Год_выпуска_авто' => 'Год Выпуска Авто',
            'Пробег' => 'Пробег',
            'Категория' => 'Категория',
        ];
    }
}
