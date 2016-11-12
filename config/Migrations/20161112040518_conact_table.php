<?php

use Phinx\Migration\AbstractMigration;

class ConactTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
        $table = $this->table('contact');

        $table->addColumn('event_id', 'integer')
                ->addColumn('name', 'string')
                ->addColumn('email', 'string')
                ->addColumn('organization', 'string')
                ->addColumn('contact_uuid', 'blob')
                ->addColumn('created', 'datetime')
                ->addColumn('updated', 'datetime', array('null' => true))
                ->create();
    }
}
