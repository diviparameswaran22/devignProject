<?php 

namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\AdminPagesDataModel;
  
class AdminPagesData extends Controller
{
  
    public function __construct()
    {
        helper(['form', 'url']);
    }
    public function index()
    {    
        helper(['form', 'url']);
        $model = new AdminPagesDataModel();
  
        $data['admin_pages_data_detail'] = $model->orderBy('id', 'DESC')->findAll();
        $data['admin_pages_id_name_detail'] = $model->getUniquePageIdDetails(); 

        return view('admin/adminpagesdatalist', $data);
    }    
 
  
    public function store()
    {  
        helper(['form', 'url']);
        $model = new AdminPagesDataModel();
        $data['admin_pages_data_detail'] = $model->orderBy('id','DESC')->first();
        foreach($data as $row){
            if (isset($row['id'])){
                $nextId=intval($row['id']+1); 
            }
            else
            {
                $nextId=1;
            }
        }     

        $formatted_text = str_replace(['<p>', '</p>'], '', $this->request->getVar('admin_page_component_data'));
        $data = [
            'id' => $nextId,
            'admin_page_id' => $this->request->getVar('admin_page_id'),
            'admin_page_name'  => $this->request->getVar('admin_page_name'),
            'admin_page_component_data_no'  => $this->request->getVar('admin_page_component_data_no'),
            'admin_page_component_name'  => $this->request->getVar('admin_page_component_name'),
            'admin_page_component_data' => $formatted_text,
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
  
    public function edit($id=null)
    {
       
     $model = new AdminPagesDataModel();
     
     $data = $model->where('id',$id )->first();
      
    if($data){
            echo json_encode(array("status" => true , 'data' => $data));
        }else{
            echo json_encode(array("status" => false));
        }
    }
  
    public function update()
    {  
  
        helper(['form', 'url']);
          
        $model = new AdminPagesDataModel();
 
        $id = $this->request->getVar('id');
        $formatted_text = str_replace(['<p>', '</p>'], '', $this->request->getVar('admin_page_component_data'));
        $data = [
            'admin_page_id' => $this->request->getVar('admin_page_id'),
            'admin_page_component_id'  => $this->request->getVar('admin_page_component_id'),
            'admin_page_component_data_no'  => $this->request->getVar('admin_page_component_data_no'),
            'admin_page_component_name'  => $this->request->getVar('admin_page_component_name'),
            'admin_page_component_data'  => $formatted_text,
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
        $model = new AdminPagesDataModel();
        $delete = $model->where('id',$id)->delete();
        if($delete)
        {
           echo json_encode(array("status" => true));
        }else{
           echo json_encode(array("status" => false));
        }
    }
    public function getadminId($admin_page_name= null){
        $model = new AdminPagesDataModel();
        $data['admin_pages_id_detail'] = $model->getUniquePageId($admin_page_name);
        if($data)
        {
            
            echo json_encode($data['admin_pages_id_detail']);
        }else{
           echo json_encode(array("status" => false));
        }
    }    

    public function getComponentId($admin_page_id= null){
        $model = new AdminPagesDataModel();
        $data['admin_pages_component_detail'] = $model->getUniquePageComponentNo($admin_page_id);
        if($data)
        {
            
            echo json_encode($data['admin_pages_component_detail']);
            
        }else{
           echo json_encode(array("status" => false));
           
        }
    }    


}
 
?>