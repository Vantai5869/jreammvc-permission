<?php


class Admin_Model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function admin_Insert()
    {
        if (isset($_POST['btn_insert_admin']))
        {
            $this->db->insert('admin', array(
                'id' => '',
                'admin_group_id' => $_POST['admin_group_id'],
                'username' => $_POST['username'],
                'password' => Hash::create('sha256',$_POST['password'], HASH_PASSWORD_KEY),
                'fullname' => '',
                'name' => '',
            ));
        }
    }


    public function admin_group_Insert()
    {

        $permission = $_POST;
        $permissions = serialize($permission);
        //$permissions = json_encode($permission);

        $this->db->insert('admin_group', array(
            'id' => '',
            'name' => $_POST['name'],
            'permissions' => $permissions,

        ));


//        $data = array('permissions' => $permission, 'id' => $this->db->lastInsertId());
//        echo "</pre>";
//        var_dump($data);
//        die();
    }
    public function get_admin_group()
    {
        $sth = $this->db->prepare("SELECT id,name FROM admin_group");
        $sth->execute();
        $data = $sth->fetchAll();
        //var_dump($data);
        return $data;
    }
    public function havepermission($c,$m)
    {

    }















//    public function xhrGetListings()
//    {
//        $result = $this->db->selectAll("SELECT * FROM data");
//        echo json_encode($result);
//    }
//
//    public function xhrDeleteListing()
//    {
//        $id = (int)$_POST['id'];
//        $this->db->delete('data', "id = '$id'");
//    }
}