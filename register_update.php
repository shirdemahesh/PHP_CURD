<?php include('includes/header.php')
?>
<?php
    $id = $_GET['id'];
    $query = "SELECT * FROM user_register WHERE id='$id' ";
    $result = mysqli_query($conn , $query);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            
            ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4>Update User Data</h4>
                </div>
                <div class="card-body">
                <form action="insert.php" method="POST">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="update_id" class="form-control">
                    <div class="mb-3">
                        <label>First Name</label>
                        <input type="text" value="<?php echo $row['fname']; ?>" name="first_name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Last Name</label>
                        <input type="text" value="<?php echo $row['lname']; ?>" name="last_name" class="form-control" >
                    </div>

                    <div class="mb-3">
                        <label>Email address</label>
                        <input type="email" value="<?php echo $row['email']; ?>" name="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" value="<?php echo $row['password']; ?>" name="password" class="form-control" >
                    </div>

                    <div class="mb-3">
                        <label>Mobile</label>
                        <input type="text" value="<?php echo $row['mobile']; ?>" name="mobile" class="form-control" >
                    </div>

                    <a href="index.php" class="btn btn-danger" >Cancle</a>
                    
                    <button type="submit" name="register_Update_btn" class="btn btn-info">Update Data</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
        }
    }else{
        "No Record Found";
    }
?>
<?php include('includes/footer.php') ?>