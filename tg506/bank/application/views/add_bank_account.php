<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>add bank details</title>
</head>
<body>
<form action="<?php echo base_url(); ?>bank/index.php/BankCrud/savedata" method="post">
Bank name<input type="text" name="bank_name"/></br>
Branch<input type="text" name="branch"/></br>
Account Number<input type="text" name="account_number"/></br>
    
<input type="submit" value="Save"/>
</form>
</body>
</html>