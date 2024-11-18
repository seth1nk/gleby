<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "voditeli".
 *
 * @property int $Код_водителя
 * @property string $ФИО_водителя
 * @property string $N_паспорта
 * @property string $Место_прописки
 * @property string $Телефон
 */
class Voditeli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'voditeli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ФИО_водителя', 'N_паспорта', 'Место_прописки', 'Телефон'], 'required'],
            [['ФИО_водителя', 'N_паспорта'], 'string', 'max' => 30],
            [['Место_прописки', 'Телефон'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Код_водителя' => 'Код Водителя',
            'ФИО_водителя' => 'Фио Водителя',
            'N_паспорта' => 'N Паспорта',
            'Место_прописки' => 'Место Прописки',
            'Телефон' => 'Телефон',
        ];
    }
}
