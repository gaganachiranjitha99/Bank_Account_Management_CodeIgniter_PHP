<?php

class BankModel extends CI_Model{

   
var $id;
var $bank_name;
var $branch;
var $account_number;
var $is_deleted;


 // Getter for 'id'
 public function get_id() {
    return $this->id;
}

// Setter for 'id'
public function set_id($id) {
    $this->id = $id;
    return $this;
}

// Getter for 'bank_name'
public function get_bank_name() {
    return $this->bank_name;
}

// Setter for 'bank_name'
public function set_bank_name($bank_name) {
    $this->bank_name = $bank_name;
    return $this;
}

// Getter for 'branch'
public function get_branch() {
    return $this->branch;
}

// Setter for 'branch'
public function set_branch($branch) {
    $this->branch = $branch;
    return $this;
}

// Getter for 'account_number'
public function get_account_number() {
    return $this->account_number;
}

// Setter for 'account_number'
public function set_account_number($account_number) {
    $this->account_number = $account_number;
    return $this;
}

// Getter for 'is_deleted'
public function get_is_deleted() {
    return $this->is_deleted;
}

// Setter for 'is_deleted'
public function set_is_deleted($is_deleted) {
    $this->is_deleted = $is_deleted;
    return $this;
}


}