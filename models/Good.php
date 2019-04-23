<?php

namespace app\models;

use app\queries\GoodQuery;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

// ниже проперти обязательны и писать до класса
/**
 * @property int $id
 * @property string $title
 * @property string $price
 * @property string $amount
 * @property string $description
 * @property string $category_id
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 *
 */

class Good extends ActiveRecord
{

    const STATUS_ACTIVE = 'active';

    const STATUS_DISABLE = 'disable';


    public static function tableName()
    {
        return '{{%goods}}';
    }

    public function rules()
    {
        return [
            [['title', 'price', 'amount',  'status', 'category_id'], 'required' ],
            [['title'], 'unique'],
            [['title', 'status', 'category_id', 'description'], 'string'],
            [['price', 'amount' ], 'number']
        ];
    }

    public function attributeLabels()
    {
        return [
            'title' => 'Название',
            'price' => 'Цена',
            'amount' => 'Количество',
            'description' => 'Описание',
            'category_id' => 'Категория',
            'status' => 'Статус',
            'created_at' => 'Создан',
            'updated_at' => 'Изменен'
        ];
    }

    public static function getStatuses()
    {
        return [
            self::STATUS_ACTIVE => 'Активно',   //Возвращаем массив с ключами и значениями
            self::STATUS_DISABLE => 'Отключено'
        ];
    }

    public function getStatus()
    {
        $statuses = self::getStatuses();

        return isset($statuses[$this->status]) ? $statuses[$this->status] : null;
    }

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }


    public static function find()
    {
        return new GoodQuery(get_called_class());
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at' ],
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'updated_at',
                ],
                'value' => new Expression ('now()'),
            ]
        ];
    }

}