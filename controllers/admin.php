<?php


class Admin extends Controller
{

    function __construct()
    {
        parent::__construct();
        //Auth::handleLogin();
        Auth::isLoginAdmin();
        $this->checkPermission();
        //$this->view->js = array('dashboard/js/default.js');
    }

    function index()
    {
//        $this->_getUrl();
//        $c = $this->_url[0];
//        $m = isset($this->_url[1])? $this->_url[1]:'list';
  //      $this->model->havepermission($c,$m);
        $this->view->render('admin/index',false);
    }
    function admin_group()
    {
        $this->view->render('admin/admin_group',false);
    }
    function admin_Insert(){
        $admin_group = $this->model->get_admin_group();
        $this->view->render('admin/insert',true,["admin_group"=>$admin_group]);
        $this->model->admin_Insert();
    }
    function logout()
    {
        Session::destroy();
        header('location: ' . URL . 'login');
        exit;
    }

    function admin_group_Insert()
    {
        $this->model->admin_group_Insert();
    }

//    function xhrGetListings()
//    {
//        $this->model->xhrGetListings();
//    }
//
//    function xhrDeleteListing()
//    {
//        $this->model->xhrDeleteListing();
//    }

}