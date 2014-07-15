<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Accounts</title>
        
    </head>
    
    <body>
        
        <form action="index.php">
            
            <table>
                
                <th>Customers' Account Info Entry</th>
                
                <tr>
                    <td>Customer Name</td>
                    <td><input type="text" name="customerNameText"></td>
                </tr>
                
                <tr>
                    <td>Email Address</td>
                    <td><input type="text" name="emailAddressText"></td>
                </tr>
                
                <tr>
                    <td>Account Number</td>
                    <td><input type="text" name="accountNumberText"></td>
                </tr>
                
                <tr>
                    <td>Opening Date</td>
                    <td><input type="text" name="openingDateText"></td>
                </tr>
                
                 <tr>
                    <td></td>
                    <td><input type="submit" name="createAccountButton" value="Creat Account"></td>
                </tr>
            </table>
            
            <table>
                <th>Transaction</th>
                <tr>
                    <td>Amount</td>
                    
                     <td><input type="text" name="amountText"></td>
                     
                     <td><input type="submit" name="depositButton" value="Deposit"></td>
       
                    <td><input type="submit" name="withdrawButton" value="Withdraw"></td>
                </tr>
            </table>
            
        </form>
        
         <form action="details.php" method="Get">
            
            <input type="submit" name="submit" value="View Details">
            
        </form>
        
        <?php
        
        require_once 'customer.php';
        
        require_once 'account.php';
        
        session_start();
        
        if(isset($_GET['createAccountButton']))
        {
            
        $an_account = new Account($_GET['accountNumberText'], $_GET['openingDateText']);
        
        $a_customer = new Customer();
        
        $a_customer->set_customer_name($_GET['customerNameText']);
        
        $a_customer->set_email_address($_GET['emailAddressText']);
        
        $a_customer->set_customer_account($an_account);
        
        $_SESSION['an_account'] = $an_account;
        
        $_SESSION['a_customer'] =$a_customer;
        
        echo 'Account Created';
            
        }
        
        if(isset($_GET['depositButton']))
        {
            echo $_SESSION['a_customer']->get_customer_account()->deposit($_GET['amountText']);
        }
        
         if(isset($_GET['withdrawButton']))
        {
           echo $_SESSION['a_customer']->get_customer_account()->withdraw($_GET['amountText']);
        }
                
        
//        $a_customer->get_customer_account()->deposit(50000);
//        
//        echo  $a_customer->get_customer_account()->get_balance().'<br/>';
//        
//        $a_customer->get_customer_account()->withdraw(5000);
//        
//        echo  $a_customer->get_customer_account()->get_balance();
        
        ?>
    </body>
</html>
