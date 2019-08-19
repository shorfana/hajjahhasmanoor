<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pre_models{

  function create($modelName,$primaryKey,$tableName)
  {
    $string="<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class $modelName extends CI_Model
    {

        public \$table = '$tableName';
        public \$id = '$primaryKey';
        public \$order = 'DESC';

        function __construct()
        {
            parent::__construct();
        }

        // get all
        function get_all()
        {
            \$this->db->order_by(\$this->id, \$this->order);
            return \$this->db->get(\$this->table)->result();
        }

        //get field

        function get_field(){
          \$table=\$this->table;
          \$sql=\$this->db->query(\"SELECT * FROM `\$table`\"); //ganti * untuk custom field yang ditampilkan pada table
          return \$sql->list_fields();
        }

        // get data by id
        function get_by_id(\$id)
        {
            \$this->db->where(\$this->id, \$id);
            return \$this->db->get(\$this->table)->row();
        }

        // insert data
        function insert(\$data)
        {
            \$this->db->insert(\$this->table, \$data);
        }

        // update data
        function update(\$id, \$data)
        {
            \$this->db->where(\$this->id, \$id);
            \$this->db->update(\$this->table, \$data);
        }

        // delete data
        function delete(\$id)
        {
            \$this->db->where(\$this->id, \$id);
            \$this->db->delete(\$this->table);
        }

    }

    /* Crudlab by Kostlab */
    /* Please DO NOT modify this information : */
    /* Learn and Earn */
"; //ini isi pake syntax php
    return $string;
  }

}
