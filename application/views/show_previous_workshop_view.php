<?php
echo $json;
?>


<form method = "POST"  action = "<?php  echo base_url().'index.php/ftthcontroller/insert_previous_workshop_details';?>" enctype="multipart/form-data">
name : <input type = "text" name = "title"  class="input username"/>

description : <input type = "text" name = "description"  class="input username"/>

picture :<input type = "file" name ="uploadfile" class="button"/>

pdf :<input type = "file" name ="uploadfile2" class="button"/>

<input type = "submit" name="submit"  class="button"/>

</form>