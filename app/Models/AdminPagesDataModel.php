<?php 
 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
  
class AdminPagesDataModel extends Model
{
    protected $table = 'admin_pages_grand_master';
    protected $allowedFields = ['admin_page_id','admin_page_name','admin_view_path_page'];
    protected $primaryKey = 'admin_page_id'; 
     
    public function __construct() {
        parent::__construct();
        //$this->load->database();
        $db = \Config\Database::connect();
        
        $builder = $db->table('admin_pages_grand_master');
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