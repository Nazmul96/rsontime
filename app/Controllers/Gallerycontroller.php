<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\SubscriberModel;

class Gallerycontroller extends BaseController
{


   /**
     * This index method is used for shows gallery image that are already saved in database. 
     * Method - get
   */

    public function galleryIndex()
    {
       
       $builder =$this->db->table('gallery_images');     
       $query=$builder->get();
       $data['files']=$query->getResult();

       return view('pages/gallery',$data);
    }

    /**
     * End galleryIndex
    */


    /**
     * This galleryImageUplaod method is used for upload and insert image and also used for resize image. 
     * Method - get
   */

    public function galleryImageUplaod()
    {
   
       $file=$this->request->getFile('file');
       $newName = $file->getRandomName();

       $file->move(ROOTPATH.'/public/image/gallery_image/', $newName);
       $data['images']=$newName ;
       
       $image = \Config\Services::image()
      ->withFile(ROOTPATH . '/public/image/gallery_image/' . $newName)
      ->resize(100, 100)
      ->save(ROOTPATH . '/public/image/gallery_image/thumbnail/' .'thum_'.$newName);

       $builder =$this->db->table('gallery_images');     
       $success=$builder->insert($data);
       
       if($success)
       {
        $response = [
            'success' => true,
            'submit_success' => 'Image successfully submitted'
        ];
        return $this->response->setJSON($response);
      }
      else
      {
        $response = [
            'success' => false,
            'submit_error' => 'Something Is wrong'
        ];
        return $this->response->setJSON($response);
      }
    }

    /**
     * End galleryImageUplaod
    */


    /**
     * This deleteGalleryImage method is used for delete an image . 
     * Method - get
   */
    public function deleteGalleryImage()
    {
       $id=$this->request->getVar('id');

       $builder =$this->db->table('gallery_images'); 
       $builder->where('id',$id);
       $query=$builder->get();
       $data=$query->getRow();
       
       if(file_exists('./image/gallery_image/'.$data->images))
       {       
          unlink('./image/gallery_image/'.$data->images);
          unlink('./image/gallery_image/thumbnail/'.'thum_'.$data->images);
       }

       $builder =$this->db->table('gallery_images'); 
       $builder->where('id',$id);
       $builder->delete();

       $response = [
        'success' =>'success',
      ];
      return $this->response->setJSON($response);
    }

     /**
     * deleteGalleryImage
    */


    /**
     * This getAllGalleryImage method is used for to get all image that are already insert in database. 
     * Method - get
   */
    
    public function getAllGalleryImage()
    {
       
      $builder =$this->db->table('gallery_images');     
      $query=$builder->get();
      $files=$query->getResult();

      echo json_encode($files);
    }

    /**
     * getAllGalleryImage
    */
}
