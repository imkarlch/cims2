
<?php
 
    session_start();

    if(!isset($_SESSION['user_session'])){

        header("location:../index.php");
    }
?>

<body>
 	 	<form method="POST" action="register.php?invoice_number=<?php echo $_GET['invoice_number']?>">
  	  	  <table id="table" style="width: 400px; margin: auto;overflow-x:auto; overflow-y: auto;">
  	  	 <tr>
         <td>Bar Code:</td>
         <td><input type="text" name="bar_code" id="bar_code" size="10" placeholder="Set a bar code"></td>
          </tr>
          <tr id="row1">
         <td>Product Name:</td>
         <td><input type="text" name="med_name"  id="med_name" size="10" required ></td>
        </tr>
        <tr>
                   <td>Category:</td>

          <td><input type="text" name="category" id="category" size="10"  required></td>
        </tr>
        <tr>
                   <td>Quantity:</td>
     
        <td><input type="number" style="width: 95px;" name="quantity">

             
        
        </tr> 
        <tr>
                   <td>Registered Date:</td>

          <td><input type="date"  name="reg_date" id="reg_date" size="5"  required>  </td>
        </tr>
        <tr>
                   <td>Expired Date:</td>

          <td><input type="date" name="exp_date" id="exp_date" size="5"  required></td>
        </tr>
        
       

        <tr>
          <td></td>
          <td> <input type="submit" name="submit" class="btn btn-success btn-large" style="width: 225px" value="Save"> </td>
        </tr>

  	  	 </table> 
        <br>
  	  	 </form><br>
</body>

<script type="text/javascript">
		$(document).ready(function(){

      $(document).on('keyup','#med_name', 

        function(){
             var med_name_cap = $("#med_name").val();
              
              $("#med_name").val(med_name_cap.charAt(0).toUpperCase()+med_name_cap.slice(1));
      
        });


      $(document).on('keyup','#category', 

        function(){
             var category_cap = $("#category").val();
              
              $("#category").val(category_cap.charAt(0).toUpperCase()+category_cap.slice(1));
      
        });



  	
  </script>
</html>

