<?php
include("includes/header.php")
?>
 
    <div class="container">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4>PHP - CURD 
                        <a href="register.php" class="btn btn-primary float-end" >Register / Add</a>
                    </h4>
                </div>
            </div>
            <div class="card-body">
                <?php
                    
                    $query = "SELECT * from user_register Where Status = '1' ";
                    $result = mysqli_query($conn,$query);

                    if(mysqli_num_rows($result) > 0){
                        ?>
                
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $id=1;
                            while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                        <th><?php echo $id; ?></th>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td>
                            <a href="register_update.php?id=<?php echo $row['id']; ?>" class="btn btn-info" >Update</a>
                        </td>
                        <td>
                            <form action="insert.php" method="POST">
                                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="register_delete_btn" class="btn btn-danger">Delete</button>
                            </form>
                
                        </td>
                        </tr>
                        <?php $id++; } ?>
                    </tbody>
                </table>
                <?php
                    }else{
                        echo "Sorry!! No Record Found";
                    }
                ?>
            </div>
        </div>
    </div>
        
<?php
include ("includes/footer.php");
?>

