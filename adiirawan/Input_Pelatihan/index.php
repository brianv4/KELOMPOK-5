<!DOCTYPE >
<html>
<head>
  <title>Input Materi</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Input Materi Pelatihan</div>
    <div class="panel-body">
    
       <form action="actionpelatihan.php" method="POST">
	        <div class="input-group control-group after-add-more">
	          <input type="text" name="addmore[]" class="form-control" placeholder="Materi Pelatihan">
	          <div class="input-group-btn"> 
	            <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
	          </div>
	        </div>
	        <div class="control-group text-center">
	            <br>
	            <button class="btn btn-success" type="submit">Submit</button>
	        </div>
 		</form>
 
        <!-- Copy Fields -->
        <div class="copy hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here">
            <div class="input-group-btn"> 
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Hapus</button>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
</body>
</html>