<?php
echo $json;
?>


<form method = "POST"  action = "<?php  echo base_url().'index.php/ftthcontroller/insert_picture_description_types/'.$databasename?>" enctype="multipart/form-data">


description : <input type = "text" name = "description"  class="input username"/>



link :<input type = "text" name ="link" class="button"/>

<input type = "submit" name="submit"  class="button"/>

</form>