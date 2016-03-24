<?php

use yii\db\Schema;

class m160324_100106_semester extends \yii\db\Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('semester', [
            'id' => $this->primaryKey(),
            'name' => $this->char(70)->notNull(),
            'initial' => $this->char(10)->notNull(),
            'description' => $this->char(200)->notNull(),
            'created_at' => $this->datetime(),
            'created_by' => $this->integer(11),
            'updated_at' => $this->datetime(),
            'updated_by' => $this->integer(11),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('semester');
    }
}
