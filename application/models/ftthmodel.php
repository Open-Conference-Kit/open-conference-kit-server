<?php
class ftthmodel extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    /////////////////////about/////////////////
    function get_about()
    {
        $query = $this->db->get('about');
        echo json_encode($query->result());
    }
	function insert_about($text){
		$data = array(
               'textaboutinfo' => $text
            );

		$this->db->where('id', '1');
		$this->db->update('about', $data); 

	}
	function insert_conference_text($text){
		$data = array(
               'text' => $text
            );

		//$this->db->where('id', '1');
		$this->db->insert('conference_text', $data); 

	}
	/////////////////////about/////////////////

	//////////////////directors///////////////////
	function get_directors(){
		$this->db->select('*');
		$this->db->from('directors');
		$this->db->order_by("order", "asc");
		$query = $this->db->get();
		 return $query->result();
	}
	function add_directors($name,$role,$description,$picture,$order){
		$data = array(
			'name'=>$name,
			'role'=>$role,
			'description'=>$description,
			'picture'=>$picture,
			'order'=>$order,
		);
		$this->db->insert($data,'directors');
	}
	function delete_role($id,$databasename){
		$this->db->where('id', $id);
		$this->db->delete($databasename);
	}
	function update_role($databasename,$id,$name,$role,$description,$picture,$order){
		if($picture == "error" || $picture == ""){
		$data = array(
			'name'=>$name,
			'role'=>$role,
			'description'=>$description,
			'order'=>$order,
		);
		}else{
		$data = array(
			'name'=>$name,
			'role'=>$role,
			'description'=>$description,
			'picture'=>$picture,
			'order'=>$order,
		);
		}
		$this->db->where('id', $id);
		$this->db->update($databasename, $data);
	}
	//////////////////directors///////////////////
	
	////////////////////////getfunctions///////////////////
	function getbyorder($databasename){
		 $this->db->select('*');
		 $this->db->from($databasename);
		 $this->db->order_by("order", "asc");
		 $query = $this->db->get();
		//$query = $this->db->query("Select * From ".$databasename." Order by ABS('order') ASC;");
		 return $query->result();
	}
	function getbylatestid($databasename){
		if($databasename == 'previous_studies'){
				$this->db->from($databasename);
		$this->db->order_by('id', 'DESC'); 
		//$this->db->limit(1);
		$query = $this->db->get();
		 return $query->result();
		}else{
		
		$this->db->from($databasename);
		$this->db->order_by('id', 'DESC'); 
		$this->db->limit(1);
		$query = $this->db->get();
		 return $query->result();
		 }
	}
	////////////////////////////////////////////////////////
	
	///////////////////insert functions //////////////////
	function insert_by_roles($database,$name,$role,$description,$picture,$order){
		//	echo $picture;
		/*echo $_POST['name'];
		echo $_POST['role'];
		echo $_POST['description'];
		echo $picture;
		echo $_POST['order'];
		echo $databasename;*/
		$data = array(
			'name'=>$name,
			'role'=>$role,
			'description'=>$description,
			'picture'=>$picture,
			'order'=>$order,
		);
		$this->db->insert($database,$data);
	}
	
	function insert_catergoricals($databasename,$category,$logo,$name,$order){
		$data = array(
			'category'=>$category,
			'logo'=>$logo,
			'name'=>$name,
			'order'=>$order,
		);
		$this->db->insert($databasename,$data);	
	}
	function update_catergoricals($databasename,$id,$name,$category,$picture,$order){
		if($picture == "error" || $picture == ""){
		$data = array(
			'name'=>$name,
			'category'=>$category,
			'order'=>$order,
		);
		}else{
		$data = array(
			'name'=>$name,
			'category'=>$category,
			'logo'=>$picture,
			'order'=>$order,
		);
		}
		$this->db->where('id', $id);
		$this->db->update($databasename, $data);
	}
	function insert_previous_workshop($picture,$description,$title,$pdf){
		$data = array(
			'picture'=>$picture,
			'description'=>$description,
			'title'=>$title,
			'pdf'=>$pdf,
		);
		$this->db->insert('previous',$data);
	}
	function insert_picture_description_types($databasename,$picture,$description){
		if($databasename == 'agenda' || $databasename == 'previous_studies' ){
		$data = array(
			'file' =>$picture,
			'description' =>$description,
		);
		$this->db->insert($databasename,$data);
		}else if ($databasename == 'latest_studies'){
			$data = array(
			'link' =>$picture,
			'description' =>$description,
		);
		$this->db->insert($databasename,$data);
		
		}else{
		$data = array(
			'picture' =>$picture,
			'description' =>$description,
		);
		$this->db->insert($databasename,$data);
		}
		

	}
	function insert_venue_details($name,$url,$address,$email,$picture,$description,$lattitude,$longitude,$phone,$pdf){
		$data = array(
			'picture' =>$picture,
			'description' => $description,
			'lattitude' => $lattitude,
			'longitude' => $longitude,
			'phone' => $phone,
			'pdf' => $pdf,
			'name' => $name,
			'address' =>$address,
			'url' =>$url,
			'email' =>$email,
		);
		$this->db->insert('venue',$data);
	 
	}
		function insert_previous_venue_details($name,$url,$address,$email,$picture,$description,$lattitude,$longitude,$phone,$pdf){
		$data = array(
			'picture' =>$picture,
			'description' => $description,
			'lattitude' => $lattitude,
			'longitude' => $longitude,
			'phone' => $phone,
			'pdf' => $pdf,
			'name' => $name,
			'address' =>$address,
			'url' =>$url,
			'email' =>$email,
		);
		$this->db->insert('previous_venue',$data);
	 
	}
	function insert_register($description,$link){
		$data = array(
			'description' =>$description,
			'link' =>$link,
		);
		$this->db->insert('register',$data);
	}
		
}
?>
