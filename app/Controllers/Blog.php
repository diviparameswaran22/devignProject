<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BlogDataModel;

class Blog extends BaseController
 {

    public function add()
 {
        echo view( 'mainblog' );

    }

    public function showAdd() {
        helper( [ 'form', 'url' ] );
        $model = new BlogDataModel();
        // $data[ 'blog-details' ] = $model->orderBy( 'category_id', 'DESC' )->findAll();
        $data[ 'category_detail' ] = $model->getCategoryList();

        // echo view( 'navbar/dashnavbar', $data );
        $pageNames = $model->getUniquePageNames();

        $data = array( 'whichPages'=>$pageNames, );
        echo view( 'template', $data );

    }

    public function showDash()
 {
        helper( [ 'form', 'url' ] );
        $model = new BlogDataModel();
        $categoryDetails = $model->getCategoryList();
        $blogDetails=$model->orderBy( 'blog_id', 'DESC' )->findAll();
        $data=['category'=> $categoryDetails,
               'blogDetails'=>$blogDetails,
                        ];
        echo view( 'navbar/dashnavbar', $data );
    }

    public function store()
 {

        helper( [ 'form', 'url' ] );
        $model = new BlogDataModel();
        $data[ 'blog_details' ] = $model->orderBy( 'blog_id', 'DESC' )->first();
        foreach ( $data as $row ) {
            if ( isset( $row[ 'blog_id' ] ) ) {
                $nextId = intval( $row[ 'blog_id' ]+1 );

            } else {
                $nextId = 1;
            }
        }

        $todaydate = date( 'd/m/Y' );
        $data = [
            'blog_id' => $nextId,
            'blog_title' => $this->request->getVar( 'title' ),
            'category'  => $this->request->getVar( 'categorydropdown' ),
            'blog_description'  => $this->request->getVar( 'blog_description' ),
            'blog_detail'=> $this->request->getVar( 'blog_detail' ),
            'author'  => $this->request->getVar( 'author' ),
            'created_date'=>date( 'Y-m-d H:i:s' ),
            'modified_date'=> date( 'Y-m-d H:i:s' ),

        ];
        $save = $model->insert_data( $data );
        if ( $save != false )
 {
            $data = $model->where( 'blog_id', $save )->first();
            $pageNames = $model->getUniquePageNames();
            $data = array( 'whichPages'=>$pageNames, );
          //  echo view( 'template', $data );
             $this->showAll();
            //echo json_encode( array( 'status' => true, 'data' => $data ) );
        } else {
            echo json_encode( array( 'status' => false, 'data' => $data ) );
        }
    }

    public function showAll()
 {
        helper( [ 'form', 'url' ] );
        $model = new BlogDataModel();
        $data[ 'blog_details' ] = $model->orderBy( 'blog_id', 'DESC' )->findAll();
        
   //     $blogs=$this->getTheImage($data);
        $data = array( 'blogdata'=>$data[ 'blog_details' ] , );
        echo view('blogs/blogs-section3',$data);
      //  echo json_encode( array( 'status' => true, 'data' => $data ) );
 
        
    }
    public function blogDetail($acceptblogId)
 {
        helper( [ 'form', 'url' ] );
        $model = new BlogDataModel();
        $data[ 'blog_details' ] = $model->where('blog_id', $acceptblogId)->findAll();
 //     $blogs=$this->getTheImage($data);
        $data = array( 'blogdata'=>$data[ 'blog_details' ] , );
        echo view('blogs/blogDetail',$data);
      //  echo json_encode( array( 'status' => true, 'data' => $data ) );
 
        
    }

    public function getTheImage($data)
    {
        foreach ( $data['blog_details']  as $row )
        {
                   $dom =  new \DOMDocument('1.0', 'utf-8');
                   @$dom->loadHtml( $row['blog_detail'] );
                   $imageTags = $dom->getElementsByTagName('img');
                    $i=0;
     
                   foreach($imageTags as $tag) {
                   //    echo $tag->getAttribute('src');
                       $data=$tag->getAttribute('src');
                       
                       echo '+++++++++++++++++++++++++++++++++++++++++++++++++++++++++';
                       $i++;
                       echo $data;
                   }
                   
                          
                   //  echo '<img src="data:image/jpeg;base64,'.base64_decode( $row[ 'blog_detail' ] ).'"/>';
               }

               return $data;
               
               
               
    }


    public function edit($blog_id=null)
    {
       
     $model = new BlogDataModel();
     
     $data= $model->getAllBlogDetails($blog_id);

   //  $data = array( 'blogdata'=>$data[ 'blog_details' ] , ); 
    if($data){
        return json_encode($data);
            //echo json_encode(array("status" => true , 'data' => $data));
        }else{
            echo json_encode(array("status" => false));
        }
    }
  
    public function update()
    {  
  
        helper(['form', 'url']);
          
        $model = new BlogDataModel();
 
        $blog_id = $this->request->getVar('blog_id');
       // $formatted_text = str_replace(['<p>', '</p>'], '', $this->request->getVar('admin_page_component_data'));
        $data = [
            'blog_id' => $this->request->getVar('blog_id'),
            'blog_title'  => $this->request->getVar('blog_title'),
            'category'  => $this->request->getVar('category'),
            'blog_detail' => $this->request->getVar('blog_detail'),
            'blog_description'  => $this->request->getVar('blog_description'),
            'modified_date'  => date( 'Y-m-d H:i:s' ),
            ];
 
        $update = $model->update($blog_id,$data);
        if($update != false)
        {
            $data = $model->where('blog_id', $id)->first();
            echo json_encode(array("status" => true , 'data' => $data));
        }
        else{
            echo json_encode(array("status" => false , 'data' => $data));
        }
    }


}

?>