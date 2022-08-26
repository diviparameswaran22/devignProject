<?php 
 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
  
class BlogDataModel extends Model
{
    protected $table = 'blog_details';
    protected $allowedFields = ['blog_title', 'category','blog_description','blog_detail','author','created_date','modified_date'];
    protected $primaryKey = 'blog_id'; 
     
    public function __construct() {
        parent::__construct();
        //$this->load->database();
        $db = \Config\Database::connect();
        
        $builder = $db->table('category');
    }
   public function getCategoryList() {
        
        $db = \Config\Database::connect();
        $builder = $db->query("SELECT distinct category_id,category_name FROM category")->getResult();
        $array = json_decode(json_encode($builder), true);
        return $array ;
        
    }    
    public function getAllBlogDetails($blog_id) {
        
        $db = \Config\Database::connect();
        $builder = $db->query("SELECT * FROM blog_details WHERE blog_id= ".$blog_id)->getResult();
        $array = json_decode(json_encode($builder), true);
        return $array ;
        
    }   

    public function organizeCategory() {
        
        $db = \Config\Database::connect();
        $builder = $db->query("SELECT category, count(category) AS No_of_categories FROM blog_details group by category")->getResult();
        $array = json_decode(json_encode($builder), true);
        return $array ;
        
    } 

    public function getBlogCategory($acceptBlogCategory){
        $db = \Config\Database::connect();
        $builder = $db->query("SELECT * FROM blog_details WHERE category= ".$acceptBlogCategory)->getResult();
        $array = json_decode(json_encode($builder), true);
        return $array ;

    }


    public function getUniquePageNames() {
        
        $db = \Config\Database::connect();
        $builder = $db->query("SELECT distinct admin_page_id,admin_page_name from admin_pages_master where admin_page_name LIKE 'blog%'")->getResult();
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