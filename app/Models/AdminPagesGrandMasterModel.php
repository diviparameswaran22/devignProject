<?php 
 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
  
class AdminPagesGrandMasterModel extends Model
{
     protected $table = 'admin_pages_grand_master';
     protected $allowedFields = ['admin_page_name','admin_view_path_page'];
     protected $primaryKey = 'admin_page_id'; 
     
    public function __construct() {
        parent::__construct();
         $db = \Config\Database::connect();
          
    }
    public function getUniquePageNames() {
        
        $db = \Config\Database::connect();
        $db->query("SELECT distinct admin_page_name from admin_pages_grand_master")->getResult();
        $builder = $db->query("SELECT distinct admin_page_name from admin_pages_grand_master")->getResult();
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