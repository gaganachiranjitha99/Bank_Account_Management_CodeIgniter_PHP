<?php
class DeleteBankDetails extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('bank_model');
    }

    public function delete($id) {
        $this->bank_model->soft_delete_bank($id);
        redirect('view_bank_details');
    }
}
?>