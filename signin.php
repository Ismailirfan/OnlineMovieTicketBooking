<?php
include "connection.php";
include "function.php";
if(isset($_POST['btnsubmit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $q = "select * from `user` where email =  '$email' and password = '$password'";
    $excute = mysqli_query($con,$q);
    $session = mysqli_fetch_assoc($excute);
    if(isset($session))
    {
        $_SESSION['id'] = $session['id'];
        if($session['role_id'] == 1)
        {
            header("location:index.php");
            die;
        }
        elseif($session['role_id'] == 2)
        {
            header("location:admin/index.php");
            die;
        }
    }
}
headers();
?>
<div class="contaienr">
<div class="row">
<div class="col-md-6 mx-auto">
    <h1>Sign In</h1>    
    <?php
        if(!isset($session))
        {
            ?>
            <div class='alert alert-danger'>Your're not registor pleasse registor to you</div>
            <?php
        }    
    ?>
    <form method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" name="btnsubmit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
</div>
<?php
footers();
?>