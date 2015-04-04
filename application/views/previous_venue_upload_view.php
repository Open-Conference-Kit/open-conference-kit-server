<?php
echo $json;
?>


<form method = "POST"  action = "<?php  echo base_url().'index.php/ftthcontroller/insert_previous_venue_details';?>" enctype="multipart/form-data">
name : <input type = "text" name = "name"  class="input username"/>

address : <input type = "text" name = "address"  class="input username"/>

url : <input type = "text" name = "url"  class="input username"/>

email : <input type = "text" name = "email"  class="input username"/>


description : <input type = "text" name = "description"  class="input username"/>

phone : <input type = "text" name = "phone"  class="input username"/>

longitude :<input type = "text" name = "longitude" class="input username" />

lattitude :<input type = "text" name = "lattitude" class="input username" />

picture :<input type = "file" name ="uploadfile" class="button"/>

pdf :<input type = "file" name ="uploadfile2" class="button"/>

<input type = "submit" name="submit"  class="button"/>

</form>