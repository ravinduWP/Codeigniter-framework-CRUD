<!DOCTYPE html>
<html>
<head>
    <title>Add details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <form name="myForm" action="" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="bname">Enter Bank Name:</label>
                <input type="text" class="form-control" id="bname" name="bname">
            </div>
            <div class="form-group">
                <label for="branch">Enter Branch Name:</label>
                <input type="text" class="form-control" id="branch" name="branch">
            </div>
            <div class="form-group">
                <label for="accno">Enter Account Number:</label>
                <input type="text" class="form-control" id="accno" name="accno">
            </div>
            <input type="submit" name="save" class="btn btn-primary" value="save data">
            <a href="http://localhost/mid_assignment/index.php/Bank/disbank" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
