<?php

use Phinx\Migration\AbstractMigration;

class EventsTable extends AbstractMigration
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
        $table = $this->table('event');
        $table->addColumn('event', 'string')
              ->addColumn('city', 'string')
              ->addColumn('state', 'string')
              ->addColumn('zip_code', 'integer')
              ->addColumn('description', 'text')
              ->addColumn('date', 'date')
              ->addColumn('time', 'string')
              ->addColumn('event_uuid', 'blob')
              ->addColumn('created', 'datetime')
              ->addColumn('updated', 'datetime', array('null' => true))
              ->create();
    }
}
