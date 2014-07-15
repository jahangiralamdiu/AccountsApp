<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Accounts App</title>
        
    </head>
    <body>
        
        <form action="index.php">
            
            Customer Name : <input type="text" name="customerNameText"><br/>
            
            Account Number : <input type="text" name="accountNumberText">
            
            <input type="submit" name="createButton" value="Create">
            
            Amount : <input type="text" name="amountText"><br/>
            
             <input type="submit" name="depositButton" value="Deposit">
             
             <input type="submit" name="withdrawButton" value="Withdraw">
              
             <input type="submit" name="showReportButton" value="Show Report">
            
        </form>
        
        <?php
        
        require_once 'account.php';
        
        session_start();        
       
        if(isset($_GET['createButton']))
        {
            $account = new Account($_GET['customerNameText'], $_GET['accountNumberText']);
            
            echo 'Account Created';
            
            $_SESSION ['an_account'] = $account;
        }        
             
        if(isset($_GET['depositButton']))
        {
            $_SESSION ['an_account']->deposit($_GET['amountText']);
            echo "Diposited";
        }
        
        if(isset($_GET['withdrawButton']))
        {
            echo $_SESSION ['an_account']->withdraw($_GET['amountText']);
            
        }
        
        if(isset($_GET['showReportButton']))
        {
            echo $_SESSION ['an_account']->get_account_name().', account no '.$_SESSION ['an_account']->get_account_number()."<br/>".' Your Balance is : '.$_SESSION ['an_account']->get_balance();
        }
        
        
        ?>
    </body>
</html>
