<?php
    include('conn.php');
    $info = json_decode(file_get_contents("php://input"));
    if (count($info) > 0) {
        $email = mysqli_real_escape_string($conn, $info->email);
        $btn_name = $info->btnLogin;
        if ($btn_name == "Login") {
            if ($conn->query("insert into  tbl_users (email) values ('$email')")) {
              echo "Member Added Successfully";
            } else {
                echo 'Failed';
				
            }
        }

     
    }
?>