<?php
              //  #source_code_challenge 
              //  **** By:Sisi0x ***** 
                    
         

$messageId=$_GET['messageId'];

function generateSenderHTML($messageId){
    return "<div class='messageSender'>{$messageId}</div>";
  }
  echo generateSenderHTML($messageId);

 ?> 
<body>
  
      <form action="" method="Get">
        <input type="search" name="messageId">
        <input type="submit" value="submit">
    </form>
    </h1>
</body>
</html>
	
