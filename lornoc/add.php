<?php
$dbLink = new mysqli('localhost', 'learn7sd', 'Learn@2019#', 'learn7sd_isro');
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$organization = $_POST['organization'];
$rollno = $_POST['rollno'];
$lornoc = $_POST['lornoc'];
$gender = $_POST['gender'];
//Insert Query of SQL
// $query = mysql_query("insert into applicants(name, email, organization, rollno,lornoc,gender,time) values ('{$name}', '{$email}', '{$org}', '{$roll}', '{$lornoc}', '{$gender}', NOW())");
$query = "
            INSERT INTO `applicants` (
                `name`, `email`, `organization`, `rollno`, `lornoc`, `gender`, `time`
            )
            VALUES (
                '{$name}', '{$email}', '{$organization}', '{$rollno}','{$lornoc}','{$gender}', NOW()
            )";
 
        // Execute the query
        $result = $dbLink->query($query);
echo "<script>
alert('Your Details have been successfully captured');
window.location.href='http://learnbyexample.in/girija/lornoc/';
</script>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}

mysql_close($connection); // Closing Connection with Server
?>