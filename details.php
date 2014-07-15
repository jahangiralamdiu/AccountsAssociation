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
        <form action="index.php">
            
            <input type="submit" name="backButton" value="Back">
            
        </form>
        <?php
       require_once 'customer.php';
        
        require_once 'account.php';
        
        session_start();
        
        $customer = $_SESSION['a_customer'];
        
        
        
       echo  'Acc No. '.$customer->get_customer_account()->get_account_number().'<br/>';
       
       echo  'Name. '.$customer->get_customer_name().'<br/>';
       
       echo  'Opening Date. '.$customer->get_customer_account()->get_opening_date().'<br/>';
       
       echo  'Balance. '.$customer->get_customer_account()->get_balance().'<br/>';
        
        ?>
    </body>
</html>
