<?php


$string = $_GET['search'] ;

$string = urldecode($string) ;

$string = str_replace(['"' , "'"] , '' , $string) ;
$string = urldecode($string) ;

$q = "SELECT * FROM users WHERE user=$string" ;
$result = mysqli_query($conn , $q) ;

if (mysqli_num_rows($result)){
    $row = mysqli_fetch_assoc($result) ;
    $string = $row['Username'] ;
}

$regex = "/{|}|src|confirm|prompt|write|<|>|alert|print/" ;

?>
<script>
    
    window.test = {
        site: "Night" ,
        page: {
        name : "<?php echo  preg_replace( $regex, '' ,$string) ?>" ;    
    }
}    

</script>

<center>
    <form method="GET" >    
<label aria-hidden="true">Search For Anything</label>
    <input type="text" placeholder="Enter Something" name="search" >
    <button type="submit">Send</button>
</form>    

</center>
