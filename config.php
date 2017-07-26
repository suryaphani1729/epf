    <?php 

  function upload_files($fil)
    {
    if((!empty($_FILES["car_info_file"])) && ($_FILES['car_info_file']['error'] == 0)) {
      //Check if the file is JPEG image and it's size is less than 350Kb
      $filename = basename($_FILES['car_info_file']['name']);
      $ext = substr($filename, strrpos($filename, '.') + 1);
      //echo $ext;
     // if (($ext == "xls") && ($_FILES["car_info_file"]["type"] == "text/xls" ) && ($_FILES["car_info_file"]["size"] < 2000000)) {
        //Determine the path to which we want to save this file
    	 // $newname = 'C:\xampp\htdocs\online_shopping\uploaded_images\$filename';
    	  $newname = $filename;
         // echo $newname;
    	  //Check if the file with the same name is already exists on the server
          if (file_exists($newname)) {
            
                chmod($newname,0755); //Change the file permissions if allowed
                unlink($newname); //remove the file

          }
            //Attempt to move the uploaded file to it's new place
            if ((move_uploaded_file($_FILES['car_info_file']['tmp_name'],$newname))) {
              // echo "It's done! The file has been saved and Uploaded as: ".$newname;
    		   echo "<div style='background-color:#C0C0C0;color:#0099CC;font-weight:bold;text-align:center;'>It's done! The file has been saved and Uploaded</div>";
            } else {
               echo "Error: A problem occurred during file upload!";
            }
         // }
        /*else {
             echo "Error: File ".$_FILES["car_info_file"]["name"]." already exists";
          }*/
      /*} else {
         echo "Error: Only .XLS files under 200000Kb are accepted for upload";
      }*/
    } else {
     echo "Error: No file uploaded";
    }
    }

?>