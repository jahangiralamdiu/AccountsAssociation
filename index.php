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
        
        require_once 'customer.php';
        
        require_once 'account.php';
        
        $an_account = new Account('sv-255', '2014-05-07');
        
        $a_customer = new Customer();
        
        $a_customer->set_customer_name('Jahangir');
        
        $a_customer->set_email_address('jahangiralam@gmail.com');
        
        $a_customer->set_customer_account($an_account);
        
        $a_customer->get_customer_account()->deposit(50000);
        
        echo  $a_customer->get_customer_account()->get_balance().'<br/>';
        
        $a_customer->get_customer_account()->withdraw(5000);
        
        echo  $a_customer->get_customer_account()->get_balance();
        
        ?>
    </body>
</html>
