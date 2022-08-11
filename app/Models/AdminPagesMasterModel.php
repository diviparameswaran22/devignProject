<?php 
 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
  
class AdminPagesMasterModel extends Model
{
     protected $table = 'admin_pages_master';
     protected $allowedFields = ['admin_page_name'];
     protected $primaryKey = 'admin_page_id'; 
     
    public function __construct() {
        parent::__construct();
         $db = \Config\Database::connect();
          
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