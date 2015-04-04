<?php
class ftthapi extends CI_Controller {

       public function __construct()
       {	
			 parent::__construct();
			$this->load->model('ftthmodel');
			header('Content-type: application/json');
	     }
		  
		  function getdata_byorder($databasename){
			echo json_encode($this->ftthmodel->getbyorder($databasename));
		}
		function getdatabyid($databasename){
			echo json_encode($this->ftthmodel->getbylatestid($databasename));
		
		}
		function getallapi(){
			$data['about'] = $this->ftthmodel->getbylatestid('about');
			$data['directors'] = $this->ftthmodel->getbyorder('directors');
			$data['committees'] = $this->ftthmodel->getbyorder('committees');
			$data['team'] = $this->ftthmodel->getbyorder('team');
			$data['conference_text'] = $this->ftthmodel->getbylatestid('conference_text');
			$data['upcoming'] = $this->ftthmodel->getbylatestid('upcoming');
			$data['conference_team'] = $this->ftthmodel->getbyorder('conference_team');
			$data['venue'] = $this->ftthmodel->getbylatestid('venue');
			$data['previous_venue'] = $this->ftthmodel->getbylatestid('previous_venue');
			$data['floorplan'] = $this->ftthmodel->getbylatestid('floorplan');
			$data['agenda'] = $this->ftthmodel->getbylatestid('agenda');
			$data['speakers'] = $this->ftthmodel->getbyorder('speakers');
			$data['sponsors'] = $this->ftthmodel->getbyorder('sponsors');
			$data['register'] = $this->ftthmodel->getbylatestid('register');
			$data['upcoming_workshop'] = $this->ftthmodel->getbylatestid('upcoming_workshop');
			$data['previous'] = $this->ftthmodel->getbylatestid('previous');
			$data['details'] = $this->ftthmodel->getbylatestid('details');
			$data['latest_studies'] = $this->ftthmodel->getbylatestid('latest_studies');
			$data['previous_studies'] = $this->ftthmodel->getbylatestid('previous_studies');
			$data['members'] = $this->ftthmodel->getbyorder('members');
			echo json_encode($data);
		}
}