<?php
?>

<form method = "POST" name="login-form" class="login-form" action = "<?php  echo base_url().'index.php/ftthcontroller/insert_data_role/'.$databasename?>" enctype="multipart/form-data">


name : <input type = "text" name = "name"  class="input username"/>

description :<input type = "text" name = "description" class="input username" />

role : <input type = "text" name = "role" class="input username"/>

order : <input type = "text" name = "order" class="input username" />

picture :<input type = "file" name ="uploadfile" class="button"/>


<input type = "submit" name="submit"  class="button"/>

</form>