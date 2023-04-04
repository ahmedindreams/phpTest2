<?php


// $string = "foo"."\n"."bar";
// echo nl2br($string);

// // md5()	Calculates the MD5 hash of a string
// // str_split()	Splits a string into an array
// // trim()	Removes whitespace or other characters from both sides of a string

// echo $_SERVER['HTTP_HOST'];

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

//         $numbers = array( 12,45 ,10,25);

//         //  $numbers[0] = 12;
//         //  $numbers[1] = 45;
//         //  $numbers[2] = 10;
//         //  $numbers[3] = 25;
  
//     echo array_sum($numbers);

//     $average = array_sum($numbers)/count($numbers);
//     echo $average;

//    echo rsort($numbers);
   

//    $txt = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);

//    foreach($txt as $key => $value)
//    {
//      echo $key." =>". $value;
//    }
//    echo nl2br("\n") ;
//    echo asort($txt);
//    foreach($txt as $key => $value)
//    {
//      echo $key." =>". $value;
//    }
//    echo nl2br("\n") ;
//    echo ksort($txt);
//    foreach($txt as $key => $value)
//    {
//      echo $key." =>". $value;
//    }
//    echo nl2br("\n") ;
//    echo arsort($txt);
//    foreach($txt as $key => $value)
//    {
//      echo $key." =>". $value;
//    }
//    echo nl2br("\n") ;
//    echo krsort($txt);
//    foreach($txt as $key => $value)
//    {
//      echo $key." =>". $value;
//    }
   
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="<?php $_PHP_SELF ?>" method = "POST">
        <span style="color:red">required field *</span><br/>
        Name: <input type = "text" name = "name" required /><span style="color:red">*</span><br/>
         Email: <input type = "email" name = "Email"  required/><span style="color:red">*</span><br/>
         Group #: <input type = "text" name = "GroupNo" /><br/>
         Class Details<textarea id="comment" name="ClassDetails" rows="4" cols="50"></textarea><br/>
         <input type="radio" id="male" name="gender" value="male" required>
          <label for="male">Male</label>
         <input type="radio" id="female" name="gender" value="female">
          <label for="female">Female</label><span style="color:red">*</span><br/>
          Select Courses<select name="Courses[]" id="Courses" multiple size="4"><br/>
           <option value="PHP">PHP</option>
          <option value="Javascript">Javascript</option>
         <option value="Mysql">Mysql</option>
         <option value="HTML">HTML</option>
          </select><br/>
          Agree <input type="checkbox" id="Agree" name="Agree" value="Agree" required><span style="color:red">*</span><br/>
         <input type = "submit" name = "submit" />
</form>

<?php
#2
//post method
if(isset($_POST['submit'])){
   if( $_POST["name"] && $_POST["Email"] ) {
      echo "Name : ". $_POST['name']. "<br />";
      echo "Email : ". $_POST['Email']. " <br />";
      echo "Group # : ". $_POST['GroupNo']. " <br />";
      echo "ClassDetails : ". $_POST['ClassDetails']. " <br />";

      // header("Content-Type: text/plain");
      

      echo "Gender : ". $_POST['gender']. " <br />";
      // echo "Your courses are : ". $_POST['Courses']. " <br />";

      echo "Courses : "; 
      foreach ($_POST['Courses'] as $selectedOption)
      echo $selectedOption."  ";

   }
  }
?>





<?php


$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'CMS'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'OS'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'OS'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'CMS'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'OS'],
];
?>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student) { ?>
            <tr>
                
                <?php if ($student['status'] == 'CMS') { ?>
                  <td style="color:red;"><?php echo $student['name']; ?></td>
                <td style="color:red;"><?php echo $student['email']; ?></td>
                    <td style="color:red;"><?php echo $student['status']; ?></td>
                <?php } else { ?>
                  <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['email']; ?></td>
                    <td><?php echo $student['status']; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>