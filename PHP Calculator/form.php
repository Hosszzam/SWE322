<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Calculator Form</title>
   <style>
    
* {
  box-sizing: border-box;
  font-family: Helvetica, Arial, sans-serif;
  padding: 10px 20px;
}

body {
  margin: 10;
  font-family: Helvetica, Arial, sans-serif;
  background-color: lightslategrey;
}


.content {
  background-color: #B0A0FC;
  display: block;
  text-align: center;
  color: #061C56;     
}

</style>
</head>


<body>
    
    <div class="content">
        
        <?php 

       echo "<h2> Enter 2 Numbers To Calculate </h2>";

        ?>
        
       <form method="GET" action="calculate.php">
          
       <input name="num1" type="text" class="form-control" style="width: 80px; display: inline" />
           
                <select name="action">
		        	<option value="+">+</option>
		            <option value="-">-</option>
		            <option value="*">*</option>
		            <option value="/">/</option>
		        </select>
           
       <input name="num2" type="text" class="form-control" style="width: 80px; display: inline" />
            
       <input name="submit" type="submit" value="Calculate" class="btn btn-primary"  />
     
	 </form>
 
</div>
    
    

</body>
</html>
