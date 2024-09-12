<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
echo str_word_count("hello world!")
?>
<form action=<?php echo $_SERVER['PHP_SELF'];?> method="post">
    Name: <input type="text" name="fname">
    address: <input type="text" name="address">
    School: <input type="text" name="school">
    Age: <input type="text" name="age">
    <input type="submit" value="">
</form>
<?php
// $_REQUEST = ['fname' =>]
    $name = $_REQUEST['fname'];
    $address = $_REQUEST['address'];
    $school = $_REQUEST['school'];
    $age = $_REQUEST['age'];

    echo $name;
    echo $address;
    echo $school;
    echo $age;
    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = test_input($_POST["fname"]);
        $address = test_input($_POST["address"]);
        $school = test_input($_POST["school"]);
        $age = test_input($_POST["age"]);
    }
    function test_input($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }




// <form method="post" action="index.php">
//   Name: <input type="text" name="fname">
//   <input type="submit">
// </form>


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // collect value of input field
//     $name = htmlspecialchars($_REQUEST['fname']);
//     if (empty($name)) {
//         echo "Name is empty";
//     } else {
//         echo $name;
        
//     }
// }




// </body>
// </html>
?>