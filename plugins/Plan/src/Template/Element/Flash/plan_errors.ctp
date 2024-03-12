<?php

if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-danger" onclick="this.classList.add('hidden');">
<?php 
if(isset($message["name"]['_empty'])){
    echo "<p><b>Book Name: </b> ".$message["name"]['_empty']."</p>";
}
if(isset($message["name"]['length'])){
    echo "<p><b> Name length</b>: ".$message["name"]['length']."</p>";
}

?>
</div>
