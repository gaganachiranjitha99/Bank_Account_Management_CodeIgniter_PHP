<?php
class AddBankDetails extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('bank_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->form_validation->set_rules('bank_name', 'Bank Name', 'required');
        $this->form_validation->set_rules('branch', 'Branch', 'required');
        $this->form_validation->set_rules('account_number', 'Account Number', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('add_bank_details');
        } else {
            $this->bank_model->add_bank();
            redirect('view_bank_details');
        }
    }
}
?>