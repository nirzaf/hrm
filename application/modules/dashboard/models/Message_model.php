<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Message_model extends CI_Model {

	private $table = 'message';

	public function create($data = [])
	{	 
		return $this->db->insert($this->table,$data);
	}
 
	public function inbox($id, $offset, $limit)
	{
		return $this->db->select("message.*, 
				CONCAT_WS(' ', user.firstname, user.lastname) as sender_name")
			->from("message")
			->join('user', 'user.id = message.sender_id','left')
			->where('message.receiver_id', $id)
			->where_not_in('message.receiver_status', 2)
			->order_by('message.id','desc')
			->order_by('message.datetime','desc')
			->limit($offset, $limit)
			->get()
			->result();
	} 
 
	public function sent($id, $offset, $limit)
	{
		return $this->db->select("message.*, 
				CONCAT_WS(' ', user.firstname, user.lastname) as receiver_name")
			->from("message")
			->join('user', 'user.id = message.receiver_id','left')
			->where('message.sender_id', $id)
			->where_not_in('message.sender_status', 2)
			->order_by('message.id','desc')
			->order_by('message.sender_status','asc')
			->limit($offset, $limit)
			->get()
			->result();
	} 
 
	public function inbox_information($id = null, $sender_id = null, $receiver_id = null)
	{ 
		return $this->db->select("message.*, 
				CONCAT_WS(' ', user.firstname, user.lastname) as sender_name")
			->from("message")
			->join('user', 'user.id = message.sender_id','left')
			->where('message.receiver_id', $receiver_id)
			->where('message.id', $id)
			->where_not_in('message.receiver_status', 2)
			->order_by('message.id','desc')
			->order_by('message.receiver_status','asc')
			->get()
			->row();
	} 
 
	public function sent_information($message_id = null, $id = null)
	{
		return $this->db->select("message.*, 
				CONCAT_WS(' ', user.firstname, user.lastname) as receiver_name")
			->from("message")
			->join('user', 'user.id = message.receiver_id','left')
			->where('message.sender_id', $id)
			->where('message.id', $message_id)
			->where_not_in('message.sender_status', 2)
			->order_by('message.id','desc')
			->order_by('message.sender_status','asc')
			->get()
			->row();
	} 
 
	public function update($data = [])
	{
		return $this->db->where('id',$data['id'])
			->update($this->table,$data); 
	} 
 
	public function delete($id = null, $condition = null)
	{
		$this->db->where('id',$id)
			->set($condition, 2)
			->update($this->table);

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 


	public function user_list($id = null)
	{
		$result = $this->db->select("id, CONCAT_WS(' ',firstname, lastname) AS fullname ")
			->from("user")
			->where_not_in('id', $id)
			->where('status',1)
			->order_by('fullname', 'asc')
			->get()
			->result();

		$list[''] = display('select_option');
		if (!empty($result)) {
			foreach ($result as $value) {
				$list[$value->id] = $value->fullname; 
			}
			return $list;
		} else {
			return false;
		}
	}


	
}


