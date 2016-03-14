<?php

    use yii\db\Migration;

    class m160303_113002_install_blog_tables extends Migration
    {
        public function up()
        {
            $this->createTable('{{%article}}', [
                'id'         => $this->primaryKey(),
                'key'        => $this->string()->unique()->notNull(),
                'title'      => $this->string()->notNull(),
                'desc'       => $this->text(),
                'text'       => $this->text(),
                'updated_at' => $this->timestamp(),
                'created_at' => $this->timestamp(),
            ]);

            $this->createTable('{{%tag}}', [
                'id'   => $this->primaryKey(),
                'key'  => $this->string()->unique()->notNull(),
                'name' => $this->string()->notNull(),
            ]);

            $this->createTable('{{%article_tag}}', [
                'id'         => $this->primaryKey(),
                'article_id' => $this->integer()->notNull(),
                'tag_id'     => $this->integer()->notNull(),
            ]);

            $this->addForeignKey('article_to_tag', '{{%article_tag}}', 'article_id', '{{%article}}', 'id', 'CASCADE',
                'CASCADE');
            $this->addForeignKey('tag_to_article', '{{%article_tag}}', 'tag_id', '{{%tag}}', 'id', 'CASCADE',
                'CASCADE');
        }

        public function down()
        {
            $this->dropTable('{{%article}}');
            $this->dropTable('{{%tag}}');
            $this->dropTable('{{%article_tag}}');
        }
    }
