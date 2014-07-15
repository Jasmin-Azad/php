<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'account.php';
        $account1=new account("sv-001","2014-07-14");
         $account1->deposit(3000);
         $account1->withdraw(400);
        $account2=new account("sv-002","2014-07-14");
         $account1->deposit(5000);
        $account3=new account("sv-003","2014-07-14");
         $account1->deposit(10000);
         $account1->withdraw(1500);
         
         $accounts=array();
         $accounts[]=$account1;
         $accounts[]=$account2;
         $accounts[]=$account3;
         foreach ($accounts as $an_account) {
             echo $an_account->get_account_number().' '.$an_account->get_opening_date()." ".$an_account->get_balance().'<br>';
             
         }
        ?>
    </body>
</html>
