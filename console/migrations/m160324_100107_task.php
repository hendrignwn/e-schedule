<?php

use yii\db\Schema;

class m160324_100107_task extends \yii\db\Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('task', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(11)->notNull(),
            'course_id' => $this->integer(11)->notNull(),
            'name' => $this->char(200)->notNull(),
            'date' => $this->datetime()->notNull(),
            'description' => $this->string(1000)->notNull(),
            'location' => $this->char(70)->notNull(),
            'status' => $this->integer(1)->notNull(),
            'created_at' => $this->datetime(),
            'created_by' => $this->integer(11),
            'updated_at' => $this->datetime(),
            'updated_by' => $this->integer(11),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('task');
    }
}
