<?php
$dbLink = new mysqli('localhost', 'learn7sd', 'Learn@2019#', 'learn7sd_isro');
 // Fetching variables of the form which travels in URL
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
    echo "$id";
// 	$result=mysqli_query($db, "DELETE FROM applicants WHERE id=".$id);
// 	if($result){
// 	header('location: index.php');
// }
}
?>
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
	<nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark">
	    <div class="container">
        <a href="#" class="navbar-brand">LOR|NOC</a>
         <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
            </div>
    </nav>
</header>
<br>
<br>


        <table class="mt-5 table table-dark">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>RollNo</th>
                    <th>Organization</th>
                    <th>LOR/NOC</th>
                    <th>Gender</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
       <?php
// Connect to the database
$dbLink = new mysqli('localhost', 'learn7sd', 'Learn@2019#', 'learn7sd_isro');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
 
// Query for a list of all existing files
$sql = 'SELECT `id`, `name`, `rollno`, `organization`, `lornoc`, `gender`, `time` FROM `applicants`';
$result = $dbLink->query($sql);
 
// Check if it was successfull
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<p>There are no files in the database</p>';
    }
    else {
        // Print the top of a table
        // Print each file
        while($row = $result->fetch_assoc()) {?>
                <tr>
                    <td><?php echo "{$row['name']}"; ?></td>
                    <td><?php echo "{$row['rollno']}"; ?></td>
                    <td><?php echo "{$row['organization']}"; ?></td>
                    <td><?php echo "{$row['lornoc']}"; ?></td>
                    <td><?php echo "{$row['gender']}"; ?></td>
                    <td>
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
                            <button class="btn btn-primary btn-block" class="submit" name="submit">Submit</button>
                        </form>
                    </td>
                </tr>
      <?php  }
    }
 
    // Free the result
    $result->free();
}
else
{
    echo 'Error! SQL query failed:';
    echo "<pre>{$dbLink->error}</pre>";
}
 
// Close the mysql connection
$dbLink->close();
?>

      </tbody>
        </table>




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
</body>
</html>


