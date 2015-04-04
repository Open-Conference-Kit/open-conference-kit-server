<?php

foreach($data as $row){
?>

<form method = "POST" name="login-form" class="login-form" action = "<?php  echo base_url().'index.php/ftthcontroller/insert_edit_categorical/'.$databasename.'/'.$row->id;?>" enctype="multipart/form-data">


name : <input type = "text" name = "name"  value = "<?php echo $row->name;?>" class="input username"/>

category :<input type = "text" name = "category"  value = "<?php echo $row->category;?>" class="input username" />

order : <input type = "text" name = "order" value = "<?php echo $row->order;?>"  class="input username" />

logo : <img src = "<?php  echo base_url()."uploads/".$row->logo; ?>"/> <input type = "file" name ="uploadfile" class="button"/>


<input type = "submit" value="delete"  name="delete"/>
<input type="submit" value="edit" name="edit" />

</form></br>
<?php 
}
?>