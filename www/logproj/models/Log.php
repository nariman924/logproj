<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "log".
 *
 * @property int $id
 * @property string $ts
 * @property int $type
 * @property string $message
 */
class Log extends \yii\db\ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'log';
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['ts'], 'safe'],
            [['type'], 'required'],
            [['type'], 'integer'],
            [['message'], 'string'],
        ];
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ts' => 'Ts',
            'type' => 'Type',
            'message' => 'Message',
        ];
    }
}