<?php 
 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
  
class HomeModel extends Model
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
   public function getUniquePageNames() {
        
        $db = \Config\Database::connect();
        $builder = $db->query("SELECT distinct admin_page_id,admin_page_name from admin_pages_master where admin_page_name LIKE 'home%'")->getResult();
        $array = json_decode(json_encode($builder), true);
        return $array ;
        
    }    

    public function getComponentData() {
        
        $db = \Config\Database::connect();
        $builder = $db->query("SELECT admin_page_name, admin_page_component_data_no, admin_page_component_name, admin_page_component_data from admin_pages_data")->getResult();
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