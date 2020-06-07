<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
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
<form action="add.php" class="mt-3 needs-validation" method="POST" novalidate>
            <!-- TEXT FIELD GROUPS -->
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="Enter name" required>
                <div class="invalid-feedback">
          			Please enter your name
        		</div>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="Enter email" required>
                <!-- <small class="form-text text-muted">Your email will not ever be shared</small> -->
                <div class="invalid-feedback">
          			Please enter your email address
        		</div>
            </div>
            <div class="form-group">
                <label for="organization">Organization</label>
                <input class="form-control" type="text" name="organization" id="organization" placeholder="Enter company name" required>
                <div class="invalid-feedback">
          			Please enter the organization
        		</div>
            </div>
            <div class="form-group">
                <label for="rollno">Roll Number</label>
                <input class="form-control" pattern="((b|B|m|M|MS|ms|Ms)([0-9]{6})(cs|CS|Cs|ee|EE|Ee|EC|ec|Ec|ME|Me|me|CE|Ce|ce|CY|cy|Cy))|((PH|ph|PH)(cs|CS|Cs|ee|EE|Ee|EC|ec|Ec|ME|Me|me|CE|Ce|ce|CY|cy|Cy)([0-9]{5}))" type="text" name="rollno" id="rollno" placeholder="Roll Number" required>
                <div class="invalid-feedback">
        			Should be a valid roll number. Eg-B120001CS, M120001CS, MS120001CY, PHCS10001
      			</div>
            </div>
            <div class="form-group">
                <label for="lornoc">LOR/NOC</label>
                <select class="form-control" name="lornoc" id="lornoc">
                    <option>LOR</option>
                    <option>NOC</option>
                </select>
            </div>
            <!-- SELECT -->
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" name="gender" id="gender">
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
            

            <button class="btn btn-primary btn-block" class="submit" name="submit" name="submit">Submit</button>
        </form>



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
</body>
</html>


