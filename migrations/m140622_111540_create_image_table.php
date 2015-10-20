<?php

use yii\db\Schema;

class m140622_111540_create_image_table extends \yii\db\Migration
{
    public function up()
    {
        $this->createTable('image', [
            'id' => $this->primaryKey(),
            'filePath' => $this->string(400)->notNull(),
            'itemId' => $this->integer(20)->notNull(),
            'isMain' => $this->smallInteger(1),
            'modelName' => $this->string(150)->notNull(),
            'urlAlias' => $this->string(400)->notNull(),
        ]);

    }

    public function down()
    {
        $this->dropTable('image');
    }
}
