        
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/sweetalert.js" ></script>

    <?php
    if(isset($_SESSION['status']) && $_SESSION['status'] != ''){
      ?>
      <script>
          swal({
            title: "<?php echo $_SESSION['status'] ?>",
            icon: "<?php echo $_SESSION['status_code'] ?>",
            button: "OK",
            }); 
      </script>

      <?php
      unset($_SESSION['status']);
    } 
    ?>
  </body>
</html>