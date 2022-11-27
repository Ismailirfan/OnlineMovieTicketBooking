<?php
include "connection.php";
include "function.php";
if(isset($_POST['btnsubmit']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dir = "img/";
    $image_name = basename($_FILES['image']['name']);
    $upload = move_uploaded_file($_FILES['image']['tmp_name'],$dir.$image_name);
    if(isset($upload))
    {
        $q = "insert into `user` values (null,'$username','$email','$password',1,'$image_name')";
        $excute = mysqli_query($con,$q);
    }
    if(isset($excute))
    {
        header("location:signin.php");
        die;
    }
}
headers();
?>
<div class="contaienr">
<div class="row">
<div class="col-md-6 mx-auto">
<h1>Sign Up</h1>
    <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Upload Image</label>
            <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <button type="submit" name="btnsubmit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
</div>
<?php
footers();
?>