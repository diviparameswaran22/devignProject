<?php 
 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
  
class AdminPagesGrandMasterModel extends Model
{
     protected $table = 'admin_pages_grand_master';
     protected $allowedFields = ['admin_page_id','admin_page_name','admin_view_path_page'];
     protected $primaryKey = 'id'; 
     
    public function __construct() {
        parent::__construct();
         $db = \Config\Database::connect();
          
    }
    public function getUniquePageNames() {
        
        $db = \Config\Database::connect();
       // $db->query("SELECT distinct admin_pages_master.admin_page_name from admin_pages_master")->getResult();
        $builder = $db->query("SELECT distinct admin_pages_master.admin_page_id ,admin_pages_master.admin_page_name from admin_pages_master")->getResult();
        $array = json_decode(json_encode($builder), true);
        return $array ;
        
    }
    public function getUniquePageId($admin_page_name) {
        
        $db = \Config\Database::connect();
     //   $db->query("SELECT distinct admin_pages_data.admin_page_id from admin_pages_data where admin_pages_data.admin_page_name=".$admin_page_name)->getResult();
        $builder = $db->query("SELECT distinct admin_pages_master.admin_page_id from admin_pages_master where admin_pages_master.admin_page_name="."'$admin_page_name'")->getResult();
        $array = json_decode(json_encode($builder), true);
        return $array ;
        
    }

 

    public function insert_data($data) {
        if($this->db->table($this->table)->insert($data))
        {
            return $this->db->insertID();
        }
        else
        {
            return false;
        }
    }
}
?>