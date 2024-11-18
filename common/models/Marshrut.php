<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "marshrut".
 *
 * @property int $Код_маршрута
 * @property string $Пункт_назначения
 * @property string $Расст_до_пункта
 */
class Marshrut extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'marshrut';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Пункт_назначения', 'Расст_до_пункта'], 'required'],
            [['Пункт_назначения'], 'string', 'max' => 15],
            [['Расст_до_пункта'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Код_маршрута' => 'Код Маршрута',
            'Пункт_назначения' => 'Пункт Назначения',
            'Расст_до_пункта' => 'Расст До Пункта',
        ];
    }
}
