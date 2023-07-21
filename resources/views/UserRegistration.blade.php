<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="col-sm-6 mx-auto">
            <div class="card mt-5  shadow p-3 mb-5 bg-secondary rounded ">
            <form action="{{ route('registrations') }}" method="POST" class="row g-3 ">
                    @csrf
                    <div class="registrationheadeing text-center text-white">
                        <h1>registration Form</h1>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" name="password">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity" name="city">
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select" name="state">
                        <option selected>Choose...</option>
                        <option>UP</option>
                        <option>Delhi</option>
                        <option>Mp</option>
                        <option>Panjab</option>
                        </select>
                    </div>
                    
                    <div class="col-md-12">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="inputZip" name="zip">
                    </div>
                    <div class="col-md-12">
                        <label for="inputState" class="form-label">User Type</label>
                        <select id="inputUserType" class="form-select" name="utype">
                        <option selected>User</option>
                        <option>Admin</option>
                        </select>
                    </div>
                   
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary">Sign in</button><br><br>
                        <a href="{{ url('/') }}" class="text-white">Goto Login Page</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"></script>
    <scipt src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  </body>
</html>