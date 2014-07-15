<?php
/**
 * Description of account
 *
 * @author bcc
 */
class Account {
    
    private $account_name;
    
    private $account_number;
    
    private $balance;
    
    function __construct($account_name, $account_number) {
        $this->account_name = $account_name;
        $this->account_number = $account_number; 
        $this->balance = 0;
    }
    
    public function get_account_name() {
        return $this->account_name;
    }

    public function get_account_number() {
        return $this->account_number;
    }

    public function get_balance() {
        return $this->balance;
    }

    public function set_account_name($account_name) {
        $this->account_name = $account_name;
    }

    public function set_account_number($account_number) {
        $this->account_number = $account_number;
    }

    public function set_balance($balance) {
        $this->balance = $balance;
    }
    
    public function deposit ($amount)
    {
        $this->balance = $this->balance + $amount;
        
        return $this->balance;
    }
    
    public function withdraw ($amount)
    {
        if($this->balance - $amount >=0 )
       {
            
       $this->balance = $this->balance - $amount; 
       
        return 'Withdrawn';
             
        }
        
    else 
    {
        
     return 'Insufficient Balance';
     
    }
       
    }

}
