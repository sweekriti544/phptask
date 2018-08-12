<script>

    alert("Registration success!!");

</script>

<h2> Your food menu consists of:</h2> 
<?php
if(isset($_GET['submit'])){
if(!empty($_GET['check_list'])){
foreach($_GET['check_list'] as $selected){
echo "<li>  $selected</li> \n";
}
}
}

?>