<?php
//                #source_code_challenge 
//                  **** By:Sisi0x ***** 
                       

if(isset($_GET["name"])){
 
  $se = htmlentities($_GET["name"]);
  $str ="echo \"Hello".$se."!!!!\";";
    if($_GET['name'] !== ""){

      eval($se);
      
    }
     die();
}
?>

<body>
  
      <form action="" method="Get">
        <input type="search" name="messageId">
        <input type="submit" value="submit">
    </form>
    </h1>
</body>
</html>
	