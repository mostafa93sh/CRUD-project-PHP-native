<?php
include('db.php');
$selectedUser = '';
if (isset($_GET['id'])) {
    $selectedUser = selectOne($_GET['id']);
}

if (isset($_POST['update_user'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    updateUser($name, $email, $password);
}






include('includes/header.php');
?>
<div class="container p-5">
    <div>
        <h3>user <?php echo $selectedUser['name']; ?></h3>
    </div>
    <div class="card card-body">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form-group mb-3">
                <input type="text" name="name" class="form-control" placeholder="Enter user name" value="<?php echo $selectedUser['name']; ?>">
            </div>
            <div class="form-group mb-3">
                <input type="email" name="email" class="form-control" placeholder="Enter user email" value="<?php echo $selectedUser['email']; ?>">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="password" class="form-control" placeholder="Enter user password" value="<?php echo $selectedUser['password']; ?>">
            </div>

            <input type="submit" name="update_user" class="btn btn-success btn-block" value="update user">
        </form>
    </div>
</div>
<?php
include('includes/footer.php');
?>