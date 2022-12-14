<?php
require_once("./../db.php");
    $err ='';
		if(isset($_POST['form_submit']))
		{	
		     $filename = $_FILES["filename"]["name"];

            $tempname = $_FILES["filename"]["tmp_name"];  

            $folder = "./../assets/images/upload/".$filename;
                if (move_uploaded_file($tempname, $folder)) {
                 $sqlnsert = mysqli_query($conn, "INSERT INTO images(image_name) VALUES('$filename')");
                $err =  "Image uploaded successfully";
			  echo '<div class="success">Image Uploaded successfully</div>'; 
        }else{

            $err = "Failed to upload image";

    }
			
		}	
		
	?>
<!DOCTYPE >
<html>
<head>
	<meta charset="UTF-8">
    <link rel="icon" href="./assets/images/diamond.jpg" type="image/icon type">
    <title>Pune - Diamond International School</title>
    <link rel="icon" href="assets/img/favicon.png">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./../assets/css/style.css">

</head>
<body>
<div class="container">
	
	<div class="height-100 d-flex justify-content-center align-items-center">
 <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#exampleModal"> Upload </button> <!-- Modal -->
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <p class="body-desc"> 
						It will be easier for your friends to recognize you if you upload your real photo. You can upload the image in JPG, GIF or PNG format. </p>
                <div class="photo-input"> 
				<form action="" method="POST" enctype="multipart/form-data">
			<label>Image </label>
			<input type="file" name="filename" class="form-control mb-3" required>
			<button name="form_submit" class="btn-success btn"> Upload</button>
		</form>
				</div>
            </div>
            
        </div>
    </div>
    </div>
   
	<table cellpadding="10">
		<tr>
			<th> Image</th>
			<th>Action</th>
		</tr>
		<?php 
		$res=mysqli_query($conn,"SELECT* from images ORDER by id DESC");
			while($row=mysqli_fetch_array($res)) 
			{
				echo '<tr> 
                  <td><img src="./../assets/images/upload/'.$row['image_name'].'" height="200"></td> 
                  <td>
                  	 <a href=\'delete.php?id='.$row['id'].'\' onClick=\'return confirm("Are you sure you want to delete?")\'"><button class="btn-danger btn">Delete</button></a>
                  </td> 
				</tr>';
			 } 
		?>
		
	</table>
	 <div class="height-100 d-flex justify-content-center align-items-center">
<a href="./../index.php"><button type="button" class="btn btn-primary my-3"> Back to Home </button></a> 
</div>
	</div>
</body>
</html>