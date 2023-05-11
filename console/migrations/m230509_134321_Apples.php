<?php

use yii\db\Migration;

/**
 * Class m230509_134321_Apples
 */
class m230509_134321_Apples extends Migration
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
        $this->createTable('{{%apples}}', [
            'id' => $this->primaryKey(),
            //цвет яблока
            'color' => $this->string(100)->notNull(),
            //каждое яблоко растет и падает с какого-либо дерева
            'tree_id' => $this->integer()->notNull(),
            //по умолчанию яблоко на дереве
            'status' => $this->integer()->notNull()->defaultValue(0),
            //сколько в процентах от яблока было съедено
            'count_of_eat' => $this->float()->notNull(),
            //дата появления яблока
            'date_birth' => $this->bigInteger()->notNull(),
            //дата падения яблока с дерева
            'date_fall' => $this->bigInteger(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('{{%apples}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230509_134321_Apples cannot be reverted.\n";

        return false;
    }
    */
}
