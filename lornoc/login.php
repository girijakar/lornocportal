<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous">
  <title>LOR|NOC Portal</title>
</head>
<body>
<div class="container">
  <header>
  <nav class="navbar fixed-top navbar-dark bg-dark">
        <a href="#" class="navbar-brand">LOR|NOC</a>
    </nav>
</header>
<br>
        <br>
    <div class="col-md-6 mx-auto">
    <div class="card">
      <div class="card-body">
        <h1 class="text-center pb-4 pt-3">
          <span class="text-primary"><i class="fa fa-lock"></i> Admin</span> Login
        </h1>
                <form action="validation.php" class="mt-3 needs-validation" id="form" method ="post" novalidate>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Enter email" required>
                         <small class="form-text text-muted">Your email will not ever be shared</small> 
                        <div class="invalid-feedback">
                        Please enter your email address
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                        <div class="invalid-feedback">
                        Please enter your password
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" value="Submit" type="submit">Submit</button>
                </form>
               <!-- <form action = "validation.php" id="form" method = "post">-->
               <!--    <div class="input-field>"-->
               <!--   <label>Email  :</label><input type = "email" name = "email" id="email" required="Email" class="validate"/><br /><br /></div>-->
               <!--   <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />-->
               <!--   <input type = "submit" value = " Submit " class="btn"/><br />-->
               <!--</form>-->
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
</div>
</div>
</div>
</div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/246a8c1139.js"></script>
</body>
</html>


