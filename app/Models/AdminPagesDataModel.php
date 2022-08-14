<?php 
 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
  
class AdminPagesDataModel extends Model
{
    protected $table = 'admin_pages_data';
    protected $allowedFields = ['admin_page_id', 'admin_page_name','admin_page_component_data_no','admin_page_component_name','admin_page_component_data'];
    protected $primaryKey = 'id'; 
     
    public function __construct() {
        parent::__construct();
        //$this->load->database();
        $db = \Config\Database::connect();
        
        $builder = $db->table('admin_pages_data');
    }
   public function getUniquePageIdDetails() {
        
        $db = \Config\Database::connect();
        $builder = $db->query("SELECT distinct admin_page_id,admin_page_name from admin_pages_master")->getResult();
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

    public function getUniquePageComponentNo($admin_page_id=null) {
        
        $db = \Config\Database::connect();
        $builder = $db->query("SELECT count( admin_page_component_data_no) AS admin_page_component_data_no from admin_pages_data where admin_page_id=".$admin_page_id)->getResult();
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