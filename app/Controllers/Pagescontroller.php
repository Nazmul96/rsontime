<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pagescontroller extends BaseController
{


      /**
         * This aboutUs method is used for insert information to database of about us page.
         * Method - get and post
         * Validates - aboutValidate
     */

    public function aboutUs()
    {
        $datas=array();
        if($this->request->getMethod() == 'post')
        { 
            
            if (!$this->validate('aboutValidate')) 
            {
                $datas['validation'] = $this->validator;
            } 
            else
             {
                $post=$this->request->getVar();

                foreach ($post as $key=>$row)
                {
                    $builder =$this->db->table('pages');     
                    $builder->where('group_name','About_us_details');
                    $builder->where('settings_name',$key);
                    $builder->update(['settings_value'=>$row]);
                } 
             }
          }

        $builder =$this->db->table('pages');  
        $builder->where('group_name','About_us_details');
        $query   = $builder->get();
        $datas['About_us_details']=$query->getResult(); 
       
        return view('pages/about_us',$datas);
    }

    /**
     * End aboutUs
     */


    /**
         * This contactUs method is used for insert information to database of contact us page.
         * Method - get and post
         * Validates - contactValidate
     */ 

    public function contactUs()
    {
        $datas=array();
        if($this->request->getMethod() == 'post')
        { 
            
            if (!$this->validate('contactValidate')) 
            {
                $datas['validation'] = $this->validator;
            } 
            else
             {
                $post=$this->request->getVar();
                $lat=$this->request->getVar('address_lat');
                $lang=$this->request->getVar('address_lang');
                $lat_lang=$lat.','.$lang;
               
                if(($lat != '')&&($lang != ''))
                {
                  $post['google_map_latlang']=$lat_lang;
                }
                else
                {
                    $post['google_map_latlang']=$this->request->getVar('google_map_latlang');
                }
               
                if(empty($post['show_recapcha']))
                {
                    $post['show_recapcha']='no'; 
                }

                if(empty($post['show_map']))
                {
                    $post['show_map']='no'; 
                }
       
                foreach ($post as $key=>$row)
                {
                    $builder =$this->db->table('pages');     
                    $builder->where('group_name','Contact_us_details');
                    $builder->where('settings_name',$key);
                    $builder->update(['settings_value'=>$row]);
                   } 
             }
          } 

        $builder =$this->db->table('pages');  
        $builder->where('group_name','Contact_us_details');
        $query   = $builder->get();
        $datas['Contact_us_details']=$query->getResult();
     
          
        return view('pages/contact_us',$datas);
    }

     /**
     * End contactUs
     */


      /**
         * This create method is used for create a page and also keeps information to database.
         * Method - get and post
         * Validates - aboutValidate
     */ 

    public function create()
    {
        $datas=array();
        if($this->request->getMethod() == 'post')
        { 
            
            if (!$this->validate('aboutValidate')) 
            {
                $datas['validation'] = $this->validator;
            } 
            else
             {

             }
             
        }     
        return view('pages/create_page',$datas);
    }

    /**
     * End create
    */
}
