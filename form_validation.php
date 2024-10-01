<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
   $nameErr = $emailErr = $genderErr = $websiteErr = "";
   $name = $email = $gender = $website = "";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["name"])) {
        $nameErr = "pls enter your name";
    } else{
         $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $nameErr = "Only letters and white space allowed";
        
    
    }
   }
    if (empty($_POST["email"])){
        $emailErr = "Email is required";
    } else {
       $email = test_input($_POST["email"]);

       if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr = "Invalid email format";
       }
    }

    if(empty($_POST["gender"])){
        $genderErr = "gender is required";
    } else{
        $gender = test_input($_POST["gender"]);

    }
    }
    if (empty($_POST["website"])){
        $websiteErr = "";
       } else {
        $website = test_input($_POST["website"])
        
            if (!preg_match("/\b(?:http?|ftp):\/\/|www\.)
            [-a-z0-9+&@#\/%?=~_|]i",$website)){
                $websiteErr = "invalid URL";
            }
        }
       if (empty($_POST["comment"])){
        $comment = "";

       }else{
        $gender = test_input($_POST["comment"]);
       }
    
function test_input($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    return data;

}
  ?>
  <h2> PHP Frorm Validation Example </h2>
 
</body>
</html>