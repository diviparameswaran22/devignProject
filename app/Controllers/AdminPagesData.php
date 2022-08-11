<?php 
 
namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\AdminPagesDataModel;
  
class AdminPagesData extends Controller
{
  
    public function index()
    {    
        $model = new AdminPagesDataModel();
  
        $data['admin_pages_data_detail'] = $model->orderBy('id','admin_page_id desc,admin_page_component_data_no desc, admin_page_component_data desc')->findAll();
        $data['admin_pages_id_name_detail'] = $model->getUniquePageIdDetails(); 
        return view('admin/adminpagesdatalist', $data);
    }    
 
  
    public function store()
    {  
        helper(['form', 'url']);
          
        $model = new AdminPagesDataModel();
        $data['admin_pages_grand_master_detail'] = $model->orderBy('id','admin_page_id', 'DESC')->first();
       
        foreach($data as $row){
            $nextId=intval($row['id']+1);} 
        $data = [
            'id' => $nexId,
            'admin_page_id' => $this->request->getVar('admin_page_id'),
            'admin_page_component_data_no'  => $this->request->getVar('admin_page_component_data_no'),
            'admin_page_component_name'  => $this->request->getVar('admin_page_component_name'),
            'admin_page_component_data' => $this->request->getVar('admin_page_component_data'),
            ];
        $save = $model->insert_data($data);
        if($save != false)
        {
            $data = $model->and_where(array('admin_page_id'), $save)->first();
            echo json_encode(array("status" => true , 'data' => $data));
        }
        else{
            echo json_encode(array("status" => false , 'data' => $data));
        }
    }
  
    public function edit($admin_page_id = null, $admin_page_component_id = null, $admin_page_component_data_no = null)
    {
       
     $model = new AdminPagesGrandMasterModel();
     
     $data = $model->where(array('admin_page_id'=> $admin_page_id,'admin_page_component_id'=>$admin_page_component_id,'admin_page_component_data_no'=>$admin_page_component_data_no) )->first();
      
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
        $admin_page_component_id = $this->request->getVar('admin_page_component_id');
        $admin_page_component_data_no = $this->request->getVar('admin_page_component_data_no');
 
        $data = [
            'admin_page_id' => $this->request->getVar('admin_page_id'),
            'admin_page_component_id'  => $this->request->getVar('admin_page_component_id'),
            'admin_page_component_data_no'  => $this->request->getVar('admin_page_component_data_no'),
            'admin_page_component_data'  => $this->request->getVar('admin_page_component_data'),
            ];
 
        $update = $model->update(array($admin_page_id,$admin_page_component_id,$admin_page_component_data_no),$data);
        if($update != false)
        {
            $data = $model->and_where('admin_page_id'=> $admin_page_id,'admin_page_component_id'=>$admin_page_component_id,'admin_page_component_data_no'=>$admin_page_component_data_no)->first();
            echo json_encode(array("status" => true , 'data' => $data));
        }
        else{
            echo json_encode(array("status" => false , 'data' => $data));
        }
    }
  
    public function delete($admin_page_id= null){
        $model = new AdminPagesGrandMasterModel();
        $delete = $model->and_where('admin_page_id'=> $admin_page_id,'admin_page_component_id'=>$admin_page_component_id,'admin_page_component_data_no'=>$admin_page_component_data_no)->delete();
        if($delete)
        {
           echo json_encode(array("status" => true));
        }else{
           echo json_encode(array("status" => false));
        }
    }
}
 
?>