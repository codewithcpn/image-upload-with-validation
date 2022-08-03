<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

include 'db.php';
if(isset($_POST['signup']))
{
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $degree = mysqli_real_escape_string($conn, $_POST['degree']);
    $language = mysqli_real_escape_string($conn, $_POST['language']);
    $pic = $_FILES['pic'];

    $filename = $pic['name'];
    $filepath = $pic['tmp_name'];
    $fileerror = $pic['error'];

    $file_ext = explode('.', $filename);

    $divid_filename = strtolower(end($file_ext));

    $valid_ext = array('png', 'jpg', 'jpeg');


    if($fileerror == 0)
    {
        if(in_array($divid_filename, $valid_ext))
        {
            $destfile = 'upload/'.$filename; 
            move_uploaded_file($filepath, $destfile);
            
            $insertquery = "INSERT INTO registration(username, email, degree, language, pic) VALUES ('$username', '$email', '$degree', '$language','$destfile')";

            $result = mysqli_query($conn, $insertquery);
            if($result)
            {
                echo "registration succefully";
            }
            else
            {
                echo "Failed";
            }
        }
        else
        {
            echo "Please Upload jpg, png or jpeg";
        }
    }   
}
else
{
    echo "Not click Check Form Button";
}
 ?>

</body>

</html>
