<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Registration</title>
  </head>
  <body>
   

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Rgistration</h3>
                        
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('registration/add');?>" method="POST">

                          <div class="form-group">
                            <label for="">First name</label>
                            <input type="text" name="first_name" class="form-control">
                            <small><?php echo form_error('first_name')?></small>
                          </div>

                          <div class="form-group">
                            <label for="">Last name</label>
                            <input type="text" class="form-control" name="last_name">
                            <small><?php echo form_error('last_name')?></small>
                          </div>

                          <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" name="address">
                            <small><?php echo form_error('address')?></small>
                          </div>

                          <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" name="phone">
                            <small><?php echo form_error('phone')?></small>
                          </div>

                          <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email">
                            <small><?php echo form_error('email')?></small>
                          </div>

                          <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" class="form-control" name="password">
                            <small><?php echo form_error('password')?></small>
                          </div>


                          <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




 
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

  </body>
</html>