<html>
    <head>
        <title>display records</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-top: 50px;
        }
    </style>
    </head>
    <body>
        <div class=" d-flex justify-content-center">             
       <div class="container mt-5">
       <div class="row">
        <div class="col">
        <h1>ABC Company</h1> 
        </div>
        <div class="col  d-flex justify-content-end">
        <a href="http://localhost/Codeigniter-framework-CRUD/index.php/Bank/savebank" class="btn btn-primary align-self-end m-1" >+ add a bank</a>
        </div>
       </div >
            <table class="table table-primary table-striped " >
                <thead class="thead-dark">
                <tr>
                    <th>NO </th>
                    <th>Bank Name </th>
                    <th>Branch </th>    
                    <th>Account No</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    foreach ($data as $row) {
                        echo "<tr>";
                        echo "<td>".$i."</td>";
                        echo "<td>".$row->b_name."</td>";
                        echo "<td>".$row->branch."</td>";
                        echo "<td>".$row->account_no."</td>"; 
                        echo "<td><a class='btn btn-info'  href='http://localhost/Codeigniter-framework-CRUD/index.php/Bank/updatebank?id=".$row->id."'>update</a></td>";
                        echo "<td><a class='btn btn-danger' href='http://localhost/Codeigniter-framework-CRUD/index.php/Bank/deletebank?id=".$row->id."'>delete</a></td></tr>";
                        $i++;
                    }
                    ?>
                    
                </tbody>
            </table>
                
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>