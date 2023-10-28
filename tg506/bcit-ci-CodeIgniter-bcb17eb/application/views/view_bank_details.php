<html>
<head>
    <title>View Bank Details</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
    <h1>Bank Details</h1>
    <ul>
        <?php foreach ($bank_details as $bank) { ?>
            <li><?= $bank['bank_name'] ?>, <?= $bank['branch'] ?>, <?= $bank['account_number'] ?></li>
        <?php } ?>
    </ul>
</body>
</html>