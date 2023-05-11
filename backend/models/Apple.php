<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "apples".
 *
 * @property int $id
 * @property string $color
 * @property int $tree_id
 * @property int $status
 * @property float $count_of_eat
 * @property int $date_birth
 * @property int $date_fall
 */
class Apple extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'apples';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['color', 'tree_id', 'count_of_eat', 'date_birth', 'date_fall'], 'required'],
            [['tree_id', 'status', 'date_birth', 'date_fall'], 'integer'],
            [['count_of_eat'], 'number'],
            [['color'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'color' => 'Цвет',
            'tree_id' => 'ID дерева',
            'status' => 'Статус',
            'count_of_eat' => 'Сколько съедено (%)',
            'date_birth' => 'Дата появления',
            'date_fall' => 'Дата падения',
        ];
    }
}
