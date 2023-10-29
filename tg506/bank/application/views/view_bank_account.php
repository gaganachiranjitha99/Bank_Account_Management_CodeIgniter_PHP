<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>View bank details</title>
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">
 

</head>
<body>

<a href="http://localhost/tg506/bank/index.php/BankCrud/add_bank_account"> ADD NEW ACCOUNT</a>
<table id="myTable" class="display">
    <thead>
        <tr>
            <th>Bank Name</th>
            <th>Branch</th>
            <th>Account Number</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($item as $list){ ?>
        <tr>
            <td><?php echo $list->bank_name; ?></td>
            <td><?php echo $list->branch; ?></td>
            <td><?php echo $list->account_number; ?></td>
            <td><a href="<?php echo base_url(); ?>index.php/BankCrud/edit_bank_account/<?php echo $list->id; ?>">EDIT</a> | <a href="<?php echo base_url(); ?>bank/index.php/BankCrud/delete/<?php echo $list->id; ?>">DELETE</a></td>
        </tr>
       <?php } ?>

    </tbody>
</table>

</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>

<script>
$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>
</html>