<?php
//                #source_code_challenge 
//                  **** By:Sisi0x ***** 
                       

if(isset($_GET["name"])){
 
  $str = "echo \"Hello".$_GET["name"]."!!!!\";";

      eval($str);
      
   
}
?>

<body>
  
      <form action="" method="Get">
        <input type="search" name="name">
        <input type="submit" value="submit">
    </form>
    </h1>
</body>
</html>
	
