<?php

use Phinx\Migration\AbstractMigration;

class LocalPolitics extends AbstractMigration
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
    public function create()
    {
        $table = $this->table('local_politics');

        $table->addColumn('state', 'string')
              ->addColumn('zip_code', 'integer')
              ->addColumn('city', 'string')
              ->addColumn('local_party_headquaters', 'string')
              ->addColumn('contact_id', 'int')
              ->addColumn('website', 'string')
              ->addColumn('party', 'string')
              ->addTimestamps()
              ->create();
    }
}
