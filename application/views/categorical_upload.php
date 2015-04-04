<?php
?>


<form method = "POST"  action = "<?php  echo base_url().'index.php/ftthcontroller/insert_data_catergoricals/'.$databasename?>" enctype="multipart/form-data">


name : <input type = "text" name = "name"  class="input username"/>

category :<input type = "text" name = "category" class="input username" />

order :<input type = "text" name = "order" class="input username" />

logo :<input type = "file" name ="uploadfile" class="button"/>

<input type = "submit" name="submit"  class="button"/>

</form>