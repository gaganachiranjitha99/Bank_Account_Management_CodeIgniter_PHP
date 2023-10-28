<?php
class ViewBankDetails extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('bank_model');
    }

    public function index() {
        $data['bank_details'] = $this->bank_model->get_bank();
        $this->load->view('view_bank_details', $data);
    }
}
?>