<?php

foreach($data as $row){
?>

<form method = "POST" name="login-form" class="login-form" action = "<?php  echo base_url().'index.php/ftthcontroller/insert_edit_role/'.$databasename.'/'.$row->id;?>" enctype="multipart/form-data">


name : <input type = "text" name = "name"  value = "<?php echo $row->name;?>" class="input username"/>

description :<input type = "text" name = "description"  value = "<?php echo $row->description;?>" class="input username" />

role : <input type = "text" name = "role" value = "<?php echo $row->role;?>"  class="input username"/>

order : <input type = "text" name = "order" value = "<?php echo $row->order;?>"  class="input username" />

picture :<img src = "<?php  echo base_url()."uploads/".$row->picture; ?>"height="54" width="44"/><input type = "file" name ="uploadfile" class="button"/>


<input type = "submit" value="delete"  name="delete"/>
<input type="submit" value="edit" name="edit" />

</form></br>
<?php 
}
?>