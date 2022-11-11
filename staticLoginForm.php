<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Static Login Form</title>
    
</head>
<body>
<?php
    $users = array(
        array(
            'UserType' => 'Admin',
            'Username' => 'admin',
            'Password' => 'Pass1234'

        ),

        array(
            'UserType' => 'Admin',
            'Username' => 'renmark',
            'Password' => 'Pogi1234'
            
        ),

        array(
            'UserType' =>'Content Manager',
            'Username' => 'pepito',
            'Password' => 'manaloto'
            
        ),

        array(
            'UserType' => 'Content Manager',
            'Username' => 'juan',
            'Password' => 'delacruz'
            
        ),

        array(
            'UserType' => 'System User',
            'Username' => 'pedro',
            'Password' => 'penduko'
            
        )

      
);
if (isset($_POST['Signin'])) {
    $user = $_POST['userSelect'];
    $name = $_POST['userName'];
    $password = $_POST['password'];

    if ($user && $name && $password){
        if ($name == $users[0]['Username']){
        if ($password == $users[0]['Password']){
                echo
                '<div  class = "alert alert-seccess" role="alert">
                    Welcome, You are Successfully Login '. $name . '
                </div>';
            }
            else{
                echo
                '<div class="alert alert-daner" role="alert">
                    Invalid Username / Password
                </div>';
            }
        }
        
        }
        if ($user == $users[1]['UserType']){
            if ($name == $users[1]['Username']){
                if ($password == $users[1]['Password']){
                    echo
                    '<div  class = "alert alert-seccess" role="alert">
                        Welcome, You are Successfully Login '. $name . '
                    </div>';
                }
                else{
                    echo
                    '<div class="alert alert-daner" role="alert">
                        Invalid Username / Password
                    </div>';
                }
            
            }
        
        }
        if ($user == $users[2]['UserType']){
            if ($name == $users[2]['Username']){
                if ($password == $users[2]['Password']){
                    echo
                    '<div  class = "alert alert-seccess" role="alert">
                        Welcome, You are Successfully Login '. $name . '
                    </div>';
                }
                else{
                    echo
                    '<div class="alert alert-daner" role="alert">
                        Invalid Username / Password
                    </div>';
                }
            
            }
        
        }
        if ($user == $users[3]['UserType']){
            if ($name == $users[3]['Username']){
                if ($password == $users[3]['Password']){
                    echo
                    '<div  class = "alert alert-seccess" role="alert">
                        Welcome, You are Successfully Login '. $name . '
                    </div>';
                }
                else{
                    echo
                    '<div class="alert alert-daner" role="alert">
                        Invalid Username / Password
                    </div>';
                }
            
            }
        
        }
        if ($user == $users[4]['UserType']){
            if ($name == $users[4]['Username']){
                if ($password == $users[4]['Password']){
                    echo
                    '<div  class = "alert alert-seccess" role="alert">
                        Welcome, You are Successfully Login '. $name . '
                    </div>';
                }
                else{
                    echo
                    '<div class="alert alert-daner" role="alert">
                        Invalid Username / Password
                    </div>';
                }
            
            }
        
        }

    
        
    }

?>      

    <div class ="container w-25">
        <div class="card ">
            <div class="card-body">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post">

            <br>
            <select name="userSelect"  class="form-control" id="userSelect">
                    <option value="Admin">Admin</option>
                    <option value="Content Manager">Content Manager</option>
                    <option value="System User">System User</option>
            </select>
            <br>
                <input type="text" name="userName" id="inputEmail" class="form-control" placeholder="User Name" required autofocus>
                <input type="password"  name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="Signin">Sign in</button>
            </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>