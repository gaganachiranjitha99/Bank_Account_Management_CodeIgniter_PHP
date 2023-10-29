<?php
class BankCrud extends CI_controller{

     function __construct(){
        parent::__construct();
        $this->load->model('BankModel');
        $this->load->model('BankService');
     }


function index(){
    $BankService = new BankService();
    $data ['item']=$BankService->getall();
    $this->load->view("view_bank_account",$data);



}

function add_bank_account(){
    $this->load->view("add_bank_account");

}
function savedata(){

    $BankModel = new BankModel();
    $BankService = new BankService();
   
    $BankModel->set_bank_name($this->input->post("bank_name"));
    $BankModel->set_branch($this->input->post("branch"));
    $BankModel->set_account_number($this->input->post("account_number"));

    $BankService->savedetails($BankModel);

    echo "saved all";
}

function edit_bank_account($id){
    $BankService = new BankService();
   $data['item']= $BankService->getedit($id);
    $this->load->view("update_bank_account",$data);
}


function updatedata(){

    $BankModel = new BankModel();
    $BankService = new BankService();
   $BankModel->set_id($this->input->post("id"));
    $BankModel->set_bank_name($this->input->post("bank_name"));
    $BankModel->set_branch($this->input->post("branch"));
    $BankModel->set_account_number($this->input->post("account_number"));

    $BankService->updatedetails($BankModel);

    echo "data updated succesfully";
}

function delete($id){
    $BankService = new BankService();
    $BankService->deletedetails($id);
    echo "bank details deteted succesfully";
   // $this->load->view("");
}


} 