<?php
class Bank_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function add_bank() {
        $data = array(
            'bank_name' => $this->input->post('bank_name'),
            'branch' => $this->input->post('branch'),
            'account_number' => $this->input->post('account_number')
        );

        $this->db->insert('bank_accounts', $data);
    }

    public function get_bank() {
        $this->db->where('is_deleted', 0); // Only fetch active (not deleted) records
        $query = $this->db->get('bank_accounts');
        return $query->result_array();
    }

    public function soft_delete_bank($id) {
        $data = array(
            'is_deleted' => 1
        );

        $this->db->where('id', $id);
        $this->db->update('bank_accounts', $data);
    }
}
?>