<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trees".
 *
 * @property int $id
 * @property string $type
 * @property int|null $max
 */
class Tree extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type'], 'required'],
            [['max'], 'integer'],
            [['type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'max' => 'Max',
        ];
    }
}
