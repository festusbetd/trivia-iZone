<?php
    include('conn.php');
    $info = json_decode(file_get_contents("php://input"));
    if (count($info) > 0) {
        $fullname = mysqli_real_escape_string($conn, $info->fullname);
        $email = mysqli_real_escape_string($conn, $info->email);
		 $telephone = mysqli_real_escape_string($conn, $info->telephone);
        $btn_name = $info->btnName;
        if ($btn_name == "Register") {
            if ($conn->query("insert into  tbl_users (fullname, email,telephone) values ('$fullname', '$email', '$telephone')")) {
              echo "Member Added Successfully";
            } else {
                echo 'Failed';
				
            }
        }

     
    }
?>