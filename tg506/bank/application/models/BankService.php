<?php


class BankService extends CI_Model{

  function getall(){
    $this->db->select("*");
    $this->db->from("bank_accounts");
    $query = $this->db->get();
    return $query->result();
  } 

  function getedit($id){
    $this->db->select("*");
    $this->db->from("bank_accounts");
    $this->db->where("id" ,$id);
    $query = $this->db->get();
    return $query->result();
  } 


  
  function savedetails($BankModel){
    $data=array('bank_name'=>$BankModel->get_bank_name(), 'branch'=>$BankModel->get_branch(), 'account_number'=>$BankModel->get_account_number(), 'is_deleted'=>$BankModel->get_is_deleted()) ;

    return $this->db->insert('bank_accounts',$data) ;
  }
  function updatedetails($BankModel){

    $data=array('bank_name'=>$BankModel->get_bank_name(), 'branch'=>$BankModel->get_branch(), 'account_number'=>$BankModel->get_account_number(), 'is_deleted'=>$BankModel->get_is_deleted()) ;
    return $this->db->where("id=".$BankModel->get_id())->update("bank_accounts",$data) ;

  }
  function deletedetails($id){

$this->db->where('id='.$id);
return $this->db->delete('bank_accounts') ;

  }
  


}