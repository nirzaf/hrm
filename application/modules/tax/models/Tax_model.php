<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tax_model extends CI_Model {
 
    public function viewTaxsetup()
	{
		return $this->db->select('*')	
			->from('payroll_tax_setup')
			->order_by('start_amount', 'desc')
			->get()
			->result();
	}
	public function taxsetup_create($data = array())
	{
 

$this->db->insert('payroll_tax_setup',$data);
	}

	public function taxsetup_delete($id = null)
	{
		$this->db->where('tax_setup_id',$id)
			->delete('payroll_tax_setup');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 




public function update_taxsetup($data = array())
	{
		return $this->db->where('tax_setup_id', $data["tax_setup_id"])
			->update("payroll_tax_setup", $data);


	}
	public function taxsetup_updateForm($id){
        $this->db->where('tax_setup_id',$id);
        $query = $this->db->get('payroll_tax_setup');
        return $query->row();
    }//

    public function viewcollection()
	{
		return $this->db->select('*')	
			->from('payroll_tax_collection')
			->order_by('tax_coll_id', 'desc')
			->get()
			->result();
	}

	public function taxcollect_delete($id = null)
	{
		$this->db->where('tax_coll_id',$id)
			->delete('payroll_tax_collection');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

}
