<?php

class Controller extends Model {

	function __construct() {
		//echo 'Main controller<br />';
		$this->view = new View();
        parent::__construct();
	}

	public function loadModel($name) {
		
		$path = 'models/'.$name.'_model.php';
		
		if (file_exists($path)) {
			require 'models/'.$name.'_model.php';
			
			$modelName = $name . '_Model';
			$this->model = new $modelName();
		}		
	}
    public function checkPermission() {
        $this->_getUrl();
        $c = $this->_url[0];
        $m = isset($this->_url[1])? $this->_url[1]:'list';
        @session_start();
        $sth = $this->db->prepare("SELECT permissions FROM admin_group WHERE
			id = :id");
        $sth->execute(array(
            ':id' =>  $_SESSION['adminid'],
        ));
        $data = $sth->fetch();
        $data = unserialize($data[0]);
        $count =  $sth->rowCount();
        if ($count > 0) {
            if(isset($data[$c][$m][0])) {// co ton tai list trong quyen ko?
                return true;
            }
            else
            {
                echo "ko ddu quyen";
                die();
                exit;
            }
        }
        else{
            echo "bạn không đủ quyền";
            die();
        }
        die();
	}

    private function _getUrl()
    {
        $this->_url = isset($_GET['url']) ? $_GET['url'] : null;
        $this->_url = str_replace('-', '', $this->_url);
        $this->_url = filter_var($this->_url, FILTER_SANITIZE_URL);
        $this->_url = rtrim($this->_url, '/');
        $this->_url = explode('/', $this->_url);
    }

}