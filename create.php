<?php 
include('includes/header.php');
include('db.php');
if(isset($_POST['save_user'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    insertNewUser($name,$email,$password);
}

?>
<div class="container p-5">
   
<div class="card card-body">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Enter user name" autofocus>
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Enter user email" autofocus>
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Enter user password" autofocus>
                    </div>
                    
                    <input type="submit" name="save_user" class="btn btn-success btn-block" value="add user">
                </form>
            </div>
</div>
<?php
include('includes/footer.php');
?>