<?php 
 
namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\AdminPagesGrandMasterModel;
  
class AdminPagesGrandMaster extends Controller
{
  
    public function index()
    {    
        $model = new AdminPagesGrandMasterModel();
        $data['admin_pages_grand_master_detail'] = $model->orderBy('id', 'DESC')->findAll();
        $data['admin_pages_name_id_detail'] = $model->getUniquePageNames();
        return view('admin/adminpagesgrandmasterlist', $data);
    }    
 
  
    public function store()
    {  
        helper(['form', 'url']);
          
        $model = new AdminPagesGrandMasterModel();
        $data['admin_pages_grand_master_detail'] = $model->orderBy('id', 'DESC')->first();
       
        foreach($data as $row){
            if (isset($row['id'])){
                $nextPageId=intval($row['id']+1); 
            }
            else
            {
                $nextPageId=1;
            }
        }            
    $data = [
            'id' => $nextPageId,
            'admin_page_id'=> $this->request->getVar('admin_page_id'),
            'admin_page_name'  => $this->request->getVar('admin_page_name'),
            'admin_view_path_page'  => $this->request->getVar('admin_view_path_page'),
            ];
            $save = $model->insert_data($data);
        if($save != false)
        {
            $data = $model->where('id', $save)->first();
            echo json_encode(array("status" => true , 'data' => $data));
        }
        else{
            echo json_encode(array("status" => false , 'data' => $data));
        }
    }
  
    public function edit($id = null)
    {
       
     $model = new AdminPagesGrandMasterModel();
     
     $data = $model->where('id', $id)->first();
      
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
 
        $id = $this->request->getVar('id');
 
        $data = [
            'admin_page_id' => $this->request->getVar('admin_page_id'),
            'admin_page_name'  => $this->request->getVar('admin_page_name'),
            'admin_view_path_page'  => $this->request->getVar('admin_view_path_page'),
            ];
 
        $update = $model->update($id,$data);
        if($update != false)
        {
            $data = $model->where('id', $id)->first();
            echo json_encode(array("status" => true , 'data' => $data));
        }
        else{
            echo json_encode(array("status" => false , 'data' => $data));
        }
    }
  
    public function delete($id= null){
        $model = new AdminPagesGrandMasterModel();
        $delete = $model->where('id', $id)->delete();
        if($delete)
        {
           echo json_encode(array("status" => true));
        }else{
           echo json_encode(array("status" => false));
        }
    }
    public function getadminId($admin_page_name= null){
        $model = new AdminPagesGrandMasterModel();
        $data['admin_pages_id_detail'] = $model->getUniquePageId($admin_page_name);
        if($data)
        {
            
            echo json_encode($data['admin_pages_id_detail']);
        }else{
           echo json_encode(array("status" => false));
        }
    }    
}
 
?>