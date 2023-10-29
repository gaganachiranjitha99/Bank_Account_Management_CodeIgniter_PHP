<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>edit bank details</title>
</head>
<body>
    <!-- <?php print_r($item);?> -->

<form action="<?php echo base_url(); ?>index.php/BankCrud/updatedata" method="post">
    id<input type="text" value="<?php echo $item[0]->id; ?>"name="id"/></br>
Bank name<input type="text" value="<?php echo $item[0]->bank_name; ?>"name="bank_name"/></br>
Branch<input type="text" value="<?php echo $item[0]->branch; ?>" name="branch"/></br>
Account Number<input type="text" value="<?php echo $item[0]->account_number; ?>" name="account_number"/></br>
    
<input type="submit" value="Save"/>
</form>
</body>
</html>