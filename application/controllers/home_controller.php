<?php  

# This controller is for example
# This is controller that call by default
# You can set deafault controller at index.php ( location in root of this application directory )

class HomeController extends Controller {

	public function index(){

		$data_for_view = array();
		$data_for_model = array();

		# including library if needed
		$this->library('functions');

		# call view and send data for using in view
		# NOTE: please name your view file same as controller method
		$this->view('home/index', $data_for_view);

	}

}

# End of file