<?php

use yii\db\Migration;

/**
 * Class m230509_134343_Trees
 */
class m230509_134343_Trees extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        //таблица блюд
        $this->createTable('{{%trees}}', [
            'id' => $this->primaryKey(),
            //какого цвета яблоки могут расти
            'type' => $this->string()->notNull(),
            //максимальное количество яблок на 1м дереве
            // от 0 до 50
            'max' => $this->integer(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('{{%trees}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230509_134343_Trees cannot be reverted.\n";

        return false;
    }
    */
}
