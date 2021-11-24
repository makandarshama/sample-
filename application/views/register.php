
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
</head>
<body>
 <div class="container">





   <div class="col-md-6">
    <div class="card mt-5">
     <div class="card-header">
      <?php if(isset($_SESSION['msg'])){ ?>


        <div class="alert alert-success alert-block"><?php $_SESSION['msg'];?></div>
      <?php }
      ?>
      <form  method="Post" action="<?php echo base_url().'index.php/auth/register'?>">
        <div class="form-group ,mx-auto" >
         <h1>Sign Up</h1>
         <div class="form-group">
          <label for="fullname">Full Name</label>

          <input type="text" name="full_name" id="full_name" placeholder="Full Name" class="form-control <?php echo form_error('full_name') != "" ? 'is-invalid' : '';?>"  value="<?php echo set_value('full_name')?>">
          <p class="invalid-feedback"><?php echo form_error('full_name')?></p>
        </div>
        <div class="form-group">
          <label for="email">Email</label>

          <input type="email" name="email" id="email" placeholder="Email" class="form-control <?php echo form_error('email') != "" ? 'is-invalid' : '';?>"  value="<?php echo set_value('email')?>">
          <p class="invalid-feedback"><?php echo form_error('email')?></p>

        </div>
        <div class="form-group">
          <label for="password">Password</label>

          <input type="Password" name="password" id="password" placeholder="Password" class="form-control <?php echo form_error('password') != "" ? 'is-invalid' : '';?>"  value="<?php echo set_value('password')?>">
          <p class="invalid-feedback"><?php echo form_error('password')?></p>
        </div>
        <div class="form-group form-check">


        </div>
        <button type="submit" name="register" class="btn btn-lg btn-primary">CREATE ACCOUNT</button>
      </div>

    </div>
  </div>
</div>
</div>
</body>
</html>