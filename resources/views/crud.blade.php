<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="card mx-auto bg-secondary mt-5 shadow p-3 mb-5 bg-secondary rounded">
            <div class="heading text-center text-white">
                <h1>crud operation</h1>
            </div><br>
            <div class="d-flex flex-row bg-secondary">
                <div class="col-sm-5 mx-auto mx-auto">
                    <form class="text-white mx-auto" method="POST">
                        <div class="editheadeing text-center">
                            <h1>Edit Details</h1>
                        </div>
                        <br>
                        <div class="name">
                            <label>Id</label>
                            <input type="text" name="name" class="form-control" >
                        </div>
                        <br>
                        <div class="name">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <br>
                        <div class="name">
                            <label>email</label>
                            <input type="email" name="name" class="form-control">
                        </div>
                    <br>
                        <div class="name">
                            <label>password</label>
                            <input type="password" name="name" class="form-control">
                        </div>
                        <br>
                        <div class="name">
                            <label>address</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <br>
                        <div class="buttonedit text-center">
                            <button class="btn btn-primary">Edit</button>
                        </div>
                    </from>
                </div>

                
                <div class="col-sm-7 text-white bg-secondary ">
                <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th >ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                    <th>1</th>
                                    <th>ram</th>
                                    <th>dss@gmail.com</th>
                                    <th>Pword</th>
                                    <th>Addasd asd sdfsfress</th>
                            </tr>
                        </tbody>

                    </table>
                </div>
                </div>
            </div>
        
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
} );

    </script>
</body>
</html>