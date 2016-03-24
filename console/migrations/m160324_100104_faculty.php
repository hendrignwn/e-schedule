<?php

use yii\db\Schema;

class m160324_100104_faculty extends \yii\db\Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('faculty', [
            'id' => $this->primaryKey(),
            'name' => $this->char(70)->notNull(),
            'initial' => $this->char(20)->notNull(),
            'description' => $this->char(200)->notNull(),
            'status' => $this->integer(1)->notNull(),
            'created_at' => $this->datetime(),
            'created_by' => $this->integer(11),
            'updated_at' => $this->datetime(),
            'updated_by' => $this->integer(11),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('faculty');
    }
}
