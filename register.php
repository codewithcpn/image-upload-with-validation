<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Email Uploading</title>
</head>

<body>

    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <form method="POST" action="upload.php" enctype="multipart/form-data" style="border:1px solid #ccc">
                    <div class="container">
                        <h1>Sign Up</h1>
                        <p>Please fill in this form to create an account.</p>
                        <hr>

                        <label for="name"><b>Full name</b></label>
                        <input type="text" placeholder="Enter Username" name="username" required>
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" required>

                        <label for="phone"><b>Degree</b></label>
                        <input type="text" placeholder="Enter Degree" name="degree" required>

                        <label for="password"><b>Language</b></label>
                        <input type="text" placeholder="Enter language" name="language" required>

                        <label for="cpassword"><b>Upload Image</b></label>
                        <input type="file" name="pic" placeholder="Upload Images" required>


                        <div class="clearfix">
                            <button type="submit" name="signup" class="cancelbtn">Register</button>
                            <a href="show.php"><button type="button" class="signupbtn">Check
                                    Form</button></a>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
