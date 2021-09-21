  <?php

        $conn = mysqli_connect("localhost", "root", "", "db");
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        $name = $_POST['t1'];
        $last = $_POST['t2'];
 	$email = $_POST['t3'];
        $pass = $_POST['t4'];
    
        $sql = "INSERT INTO login VALUES ('$name', '$last','$email', '$pass')";
          
        if(mysqli_query($conn, $sql)){
            echo "<script type='text/javascript'> document.location ='home.html'; </script>";

        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>