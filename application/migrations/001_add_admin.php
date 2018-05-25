<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_admin extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'admin_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'admin_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'admin_password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('admin_id', TRUE);
                $this->dbforge->create_table('tbl_admin');
        }

        public function down()
        {
                $this->dbforge->drop_table('tbl_admin');
        }
}