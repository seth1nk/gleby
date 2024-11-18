<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dispet".
 *
 * @property int $Код_авто
 * @property string $Время_прибытия
 * @property string $Время_отбытия
 * @property string $Код_водителя
 * @property string $Путевка
 * @property string $Товар
 */
class Dispet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dispet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Время_прибытия', 'Время_отбытия', 'Код_водителя', 'Путевка', 'Товар'], 'required'],
            [['Время_прибытия', 'Время_отбытия'], 'string', 'max' => 10],
            [['Код_водителя'], 'string', 'max' => 100],
            [['Путевка', 'Товар'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Код_авто' => 'Код Авто',
            'Время_прибытия' => 'Время Прибытия',
            'Время_отбытия' => 'Время Отбытия',
            'Код_водителя' => 'Код Водителя',
            'Путевка' => 'Путевка',
            'Товар' => 'Товар',
        ];
    }
}
