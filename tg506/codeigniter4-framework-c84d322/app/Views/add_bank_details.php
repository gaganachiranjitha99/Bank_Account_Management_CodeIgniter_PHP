<!DOCTYPE html>
<html lang="en">
<head>
<title>Add Bank Details</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
<h1>Add Bank Details</h1>
    <?= form_open('add_bank_details'); ?>
    <div class="form-group">
        <label for="bank_name">Bank Name:</label>
        <input type="text" name="bank_name" required>
    </div>

    <div class="form-group">
        <label for="branch">Branch:</label>
        <input type="text" name="branch" required>
    </div>

    <div class="form-group">
        <label for="account_number">Account Number:</label>
        <input type="text" name="account_number" required>
    </div>

    <button type="submit">Add Bank</button>
    </form>
    
</body>
</html>