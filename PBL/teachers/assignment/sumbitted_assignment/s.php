<?php while ($row = mysqli_fetch_assoc($result)) {
                    if($_SERVER["REQUEST_METHOD"]== "GET"){
                        $file_name= $_FILES['assignment-file']['name'];
                        $sql= "INSERT INTO assignment ('$file_name.'pdf'') VALUES ('$sumbit_file.pdf') WHERE assginemnt_title= '$row[assignment_title];'";
                        $result2=mysqli_query($conn, $sql);
                        if($result2){
                            if (isset($_FILES['profile-picture'])) {
                                $file_size = $_FILES['assignment-file']['size'];
                                $file_tmp = $_FILES['assignment-file']['tmp_name'];
                                $file_type = $_FILES['assignment-file']['type'];
                                move_uploaded_file($file_tmp, "assignment/sumbitted_assignment" . $file_name);
                            }
                        }
                    }
                ?>