<?php
	
    $username = 'root';
	$password = '';
	$servername = 'localhost';
    $database = 'instagram';

	$con = mysqli_connect($servername , $username , $password , $database);

    // to determine the is successful.
    if($con){
        ?>
        <script>
            alert("connected");
            </script>
            <?php
    }else{
        echo "not connected";
    }

    ?>
