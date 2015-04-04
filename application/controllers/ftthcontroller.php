<?php
class ftthcontroller extends CI_Controller {

       public function __construct()
       {
            parent::__construct();
			$this->load->model('ftthmodel');
			$this->load->view('menu');
            // Your own constructor code
       }
	   public function index(){
			
	   }
	   /////////////////////about/////////////////
	   public function get_about(){
			$this->ftthmodel->get_about();
	   }
	   public function insert_about(){
			$this->ftthmodel->insert_about($_POST['about']);
	   }
	   function insert_conference_text(){
			$this->ftthmodel->insert_conference_text($_POST['about']);
	   }
	   	function insert_about_view(){
		$data['json'] =  json_encode($this->ftthmodel->getbylatestid('about'));
			$this->load->view('insert_about',$data);
		} 
		function insert_conference_text_view(){
		$data['json'] =  json_encode($this->ftthmodel->getbylatestid('conference_text'));
			$this->load->view('insert_conference_text_view',$data);
		}
		///////////////////about///////////////////////
		
		//////////////////directors///////////////////
		function get_directors(){
			echo json_encode($this->ftthmodel->get_directors());
		}
		function director_edit_view(){
			$data['directors'] = $this->ftthmodel->get_directors();
			$this->load->view('director_edit_view',$data);
		}
		//////////////////directors///////////////////
		
		/////////////////////get functions///////////
		function getdata_byorder($databasename){
			echo json_encode($this->ftthmodel->getbyorder($databasename));
		}
		function getdatabyid($databasename){
			echo json_encode($this->ftthmodel->getbylatestid($databasename));
		
		}
		
		
		
		
		
		
		
		
		
		
		
		
		//////////////////upload function////////////////////
		function show_latest_studies($databasename){
			$data['databasename'] = $databasename;
			$data['json'] =  json_encode($this->ftthmodel->getbylatestid($databasename));
			
			$this->load->view('insert_latest_studies',$data);
		}
		function show_picture_description_view($databasename){
			$data['databasename'] = $databasename;
			$data['json'] =  json_encode($this->ftthmodel->getbylatestid($databasename));
			
			$this->load->view('picture_description_view',$data);
		}
		function show_upload_view($databasename){
			$data['databasename'] = $databasename;
			$this->load->view('role_upload',$data);
		}
		function show_edit_view($databasename){
			$data['databasename'] = $databasename;
			$data['data'] = $this->ftthmodel->getbyorder($databasename);
			$this->load->view('edit_role',$data);
		}		
		function show_upload_categorical($databasename){
			$data['databasename'] = $databasename;
			$this->load->view('categorical_upload',$data);
		}
		function show_venue(){
			$data['json'] =  json_encode($this->ftthmodel->getbylatestid('venue'));
			$this->load->view('venue_upload_view',$data);
		}
		function show_previous_venue(){
			$data['json'] =  json_encode($this->ftthmodel->getbylatestid('previous_venue'));
			$this->load->view('previous_venue_upload_view',$data);
		}
		function show_previous_workshop_view(){
			$data['json'] =  json_encode($this->ftthmodel->getbylatestid('previous'));
			$this->load->view('show_previous_workshop_view',$data);
		}
		function show_register(){
			$data['json'] =  json_encode($this->ftthmodel->getbylatestid("register"));
			$this->load->view('insert_register',$data);
		}
		function show_role_view($databasename){
			$this->show_edit_view($databasename);
			$this->show_upload_view($databasename);
		}
		function show_categorical_view($databasename){
			$this->show_edit_categorical($databasename);
			$this->show_upload_categorical($databasename);
		}
		
		function show_edit_categorical($databasename){
			$data['databasename'] = $databasename;
			$data['data'] = $this->ftthmodel->getbyorder($databasename);
			$this->load->view('edit_categorical',$data);
		}
		
		function insert_edit_role($databasename,$id){
			if($_POST["delete"]) {
			  //User hit the save button, handle accordingly
			  $this->ftthmodel->delete_role($id,$databasename);
			}else if($_POST["edit"]) {
				$picture = $this->do_upload();	
				$this->ftthmodel->update_role($databasename,$id,$_POST['name'],$_POST['role'],$_POST['description'],$picture,$_POST['order']);
		
			  //User hit the Submit for Approval button, handle accordingly
			}
			$this->show_role_view($databasename);
		}
		
		
		
		
		function insert_data_role($databasename){
			$picture = $this->do_upload();	
			$this->ftthmodel->insert_by_roles($databasename,$_POST['name'],$_POST['role'],$_POST['description'],$picture,$_POST['order']);
			$this->show_role_view($databasename);
		}
		
		function insert_edit_categorical($databasename,$id){
			if($_POST["delete"]) {
			  //User hit the save button, handle accordingly
			  $this->ftthmodel->delete_role($id,$databasename);
			}else if($_POST["edit"]) {
				$picture = $this->do_upload();	
				$this->ftthmodel->update_catergoricals($databasename,$id,$_POST['name'],$_POST['category'],$picture,$_POST['order']);
		
			  //User hit the Submit for Approval button, handle accordingly
			}
			$this->show_categorical_view($databasename);
		}	
		function insert_data_catergoricals($databasename){
			$logo = $this->do_upload();
			$this->ftthmodel->insert_catergoricals($databasename,$_POST['category'],$logo,$_POST['name'],$_POST['order']);
			$this->show_categorical_view($databasename);
		} 
		
		function insert_picture_description_types($databasename){
		if($databasename == 'latest_studies'){
			//$picture = $this->do_upload();
			$this->ftthmodel->insert_picture_description_types($databasename,$_POST['link'],$_POST['description']);
			echo json_encode($this->getdatabyid($databasename));
		}else{
			$picture = $this->do_upload();
			$this->ftthmodel->insert_picture_description_types($databasename,$picture,$_POST['description']);
			echo json_encode($this->getdatabyid($databasename));
			}
		}
		function insert_venue_details(){
			$picture = $this->do_upload();
			$pdf = $this->do_upload2();
			$this->ftthmodel->insert_venue_details($_POST['name'],$_POST['url'],$_POST['address'],$_POST['email'],$picture,$_POST['description'],$_POST['lattitude'],$_POST['longitude'],$_POST['phone'],$pdf);
			echo json_encode($this->getdatabyid('venue'));
		}
		function insert_previous_venue_details(){
			$picture = $this->do_upload();
			$pdf = $this->do_upload2();
			$this->ftthmodel->insert_previous_venue_details($_POST['name'],$_POST['url'],$_POST['address'],$_POST['email'],$picture,$_POST['description'],$_POST['lattitude'],$_POST['longitude'],$_POST['phone'],$pdf);
			echo json_encode($this->getdatabyid('previous_venue'));
		}
		function insert_previous_workshop_details(){
			$picture = $this->do_upload();
			$pdf = $this->do_upload2();
			$this->ftthmodel->insert_previous_workshop($picture,$_POST['description'],$_POST['title'],$pdf);
			echo json_encode($this->getdatabyid('previous'));
		}
		function insert_register(){
			$this->ftthmodel->insert_register($_POST['description'],$_POST['link']);
			echo json_encode($this->getdatabyid('register'));
		}
		function do_upload()
		{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = '*';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload("uploadfile"))
			{
				$error = array('error' => $this->upload->display_errors());
					return "error";
				//$this->load->view('upload_form', $error);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				return $data ['upload_data']['file_name'];
				//$this->load->view('upload_success', $data);
			}
		}
		function do_upload2()
		{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = '*';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload("uploadfile2"))
			{
				$error = array('error' => $this->upload->display_errors());
					return "error";
				//$this->load->view('upload_form', $error);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				return $data ['upload_data']['file_name'];
				//$this->load->view('upload_success', $data);
			}
		}
	   }
?>