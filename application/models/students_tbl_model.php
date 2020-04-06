<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students_tbl_model extends CI_Model {

    public $variable;

    public function __construct()
    {
        parent::__construct();
    }
    public function add($row, $dateCreated = FALSE) {
        $this->db->insert('tbl_students', $row);
        return $this->db->insert_id();
    }
    
    public function getAll()
    {
        return $this->db->select('*')   
            ->from('tbl_students')
            ->order_by('id', 'desc')
            ->get()
            ->result();
    }
}
