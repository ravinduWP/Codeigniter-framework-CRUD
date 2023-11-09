<!DOCTYPE html>
<html>
<head>
    <title>Update Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .form-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 50px;
        }
    </style>
    <script>
        function validateForm() {
            var bankName = document.forms["myForm"]["bname"].value;
            var branchName = document.forms["myForm"]["branch"].value;
            var accNo = document.forms["myForm"]["accno"].value;

            if (bankName == "" || branchName == "" || accNo == "") {
                alert("All fields must be filled out");
                return false;
            }

            var regex = /^[0-9]+$/;
            if (!accNo.match(regex)) {
                alert("Account number must contain only numeric values");
                return false;
            }

            var regex2 = /^[a-zA-Z]+$/;
            if (!bankName.match(regex2)) {
                alert("Bank name should not contain numeric values");
                return false;
            }

            if (!branchName.match(regex2)) {
                alert("Branch name should not contain numeric values");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="container form-container">
        <?php
        $i = 1;
        foreach ($data as $row) {
        ?>
        <form method="post">
            <div class="form-group">
                <label for="bname">Enter Bank Name:</label>
                <input type="text" class="form-control" id="bname" name="bname" value="<?php echo $row->b_name; ?>">
            </div>
            <div class="form-group">
                <label for="branch">Enter Branch Name:</label>
                <input type="text" class="form-control" id="branch" name="branch" value="<?php echo $row->branch; ?>">
            </div>
            <div class="form-group">
                <label for="accno">Enter Account Number:</label>
                <input type="text" class="form-control" id="accno" name="accno" value="<?php echo $row->account_no; ?>">
            </div>
            <input type="submit" name="update" class="btn btn-primary" value="update Records">
            <a href="http://localhost/mid_assignment/index.php/Bank/disbank" class="btn btn-secondary">Cancel</a>
        </form>
        <?php } ?>
    </div>
</body>
</html>
