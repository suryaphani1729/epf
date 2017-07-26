    <?php
    	
       require 'config.php';
    	require 'read.php';
    	
    	if(isset($_POST['upload_file']))
    	{
    		$user_file			=	$_FILES["car_info_file"]["name"];
    		upload_files($_FILES["car_info_file"]["name"]);
    		readingFile();
    	}
    	
    ?>
    <body>
    <form name="uploadfile" action="" method="post" enctype="multipart/form-data">
    	<div class="upload-box">
    		<div style='border-left-width:0px;border-right-width:0px;border-top-width:0px;border-bottom-width:1px;border-color:#C0C0C0;border-style: solid; background-color:#669900;text-align:center; width:'>
    			<a href="#">Upload File </a></div>
    		</div>
    		<div>
    			<table class="bodyBg" bgcolor="#333333">
    				<tr>
    					<td width="94" align><span class="style1">Upload Your Display </span></td>
    		      		<td width="246"><input type="file" name="car_info_file" id="car_info_file" style="height: 19px; width:100px; font-size:87%;"/></td>
    				</tr>
    				<tr>
    			 	 	<td colspan="2" align><input type="submit" name="upload_file" value="Upload" /></td>
    	  			</tr>
    			</table>
    		</div>
    	</div>
    </form>
    </body>