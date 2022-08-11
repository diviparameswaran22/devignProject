<?php 
 
namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\AdminPagesGrandMasterModel;
  
class AdminPagesGrandMaster extends Controller
{
  
    public function index()
    {    
        $model = new AdminPagesGrandMasterModel();
        $data['admin_pages_grand_master_detail'] = $model->orderBy('admin_page_id', 'DESC')->findAll();
        $data['admin_pages_name_detail'] = $model->getUniquePageNames();
        return view('admin/adminpagesgrandmasterlist', $data);
    }    
 
  
    public function store()
    {  
        helper(['form', 'url']);
          
        $model = new AdminPagesGrandMasterModel();
        $data['admin_pages_grand_master_detail'] = $model->orderBy('admin_page_id', 'DESC')->first();
       
        foreach($data as $row){
            $nextPageId=intval($row['admin_page_id']+1);} 
        $data = [
            'admin_page_id' => $nextPageId,
            'admin_page_name'  => $this->request->getVar('admin_page_name'),
            'admin_view_path_page'  => $this->request->getVar('admin_view_path_page'),
            ];
            $save = $model->insert_data($data);
        if($save != false)
        {
            $data = $model->where('admin_page_id', $save)->first();
            echo json_encode(array("status" => true , 'data' => $data));
        }
        else{
            echo json_encode(array("status" => false , 'data' => $data));
        }
    }
  
    public function edit($admin_page_id = null)
    {
       
     $model = new AdminPagesGrandMasterModel();
     
     $data = $model->where('admin_page_id', $admin_page_id)->first();
      
    if($data){
            echo json_encode(array("status" => true , 'data' => $data));
        }else{
            echo json_encode(array("status" => false));
        }
    }
  
    public function update()
    {  
  
        helper(['form', 'url']);
          
        $model = new AdminPagesGrandMasterModel();
 
        $admin_page_id = $this->request->getVar('admin_page_id');
 
        $data = [
            'admin_page_id' => $this->request->getVar('admin_page_id'),
            'admin_page_name'  => $this->request->getVar('admin_page_name'),
            'admin_view_path_page'  => $this->request->getVar('admin_view_path_page'),
            ];
 
        $update = $model->update($admin_page_id,$data);
        if($update != false)
        {
            $data = $model->where('admin_page_id', $admin_page_id)->first();
            echo json_encode(array("status" => true , 'data' => $data));
        }
        else{
            echo json_encode(array("status" => false , 'data' => $data));
        }
    }
  
    public function delete($admin_page_id= null){
        $model = new AdminPagesGrandMasterModel();
        $delete = $model->where('admin_page_id', $admin_page_id)->delete();
        if($delete)
        {
           echo json_encode(array("status" => true));
        }else{
           echo json_encode(array("status" => false));
        }
    }
}
 
?>