<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CounterModel;

class Countercontroller extends BaseController
{


    /**
     * This index method is used for set and customize theme. 
     * Method - get and post
     * Validates - counterValidate
     */

    public function index()
    {
        $models=new CounterModel();

        if($this->request->getMethod() == 'post')
        { 

            if (!$this->validate('counterValidate')) 
            {
                $datas['validation'] = $this->validator;
            }
            else
            {
                $post=$this->request->getVar();

                
                if(empty($post['color_show']))  
                {
                    $post['color_show']='no'; 
                }
                if(empty($post['default_theme']))
                {
                    $post['default_theme']='no'; 
                }
                if(empty($post['video_show']))
                {
                    $post['video_show']='no'; 
                }

                if(empty($post['embedcode_or_video_active']))
                {  //embedcode_or_video_active
                    $post['embedcode_or_video_active']='no'; 
                }

                
            
                foreach ($post as $key=>$row)
                {
                    $builder =$this->db->table('settings');     
                    $builder->where('group_name','Counter_settings');
                    $builder->where('settings_name',$key);
                    $builder->update(['settings_value'=>$row]);
                } 
                $color=$this->request->getVar('background_color');
                

                $old_color=$this->request->getVar('old_color');

             

                if($color != '')
                {
             
                    $post['background_color']=$color ;
                }
                else
                {
                    $post['background_color']= $old_color;
                }

                $file = $this->request->getFile('background_image');
                
                $old_image=$this->request->getVar('old_background_image');


              
                
                if($file != '')
                {    
                    if(file_exists('./image/background_image/'.$old_image))
                    {
                 
                        unlink('./image/background_image/'.$old_image);
                        unlink('./image/thamnil/'.'thum_'.$old_image);
                    } 
                    $newName = $file->getRandomName();
                    
                    $file->move(ROOTPATH.'/public/image/background_image/', $newName );
                    $post['background_image']=$newName ;
                } 
                else
                {
                    $post['background_image']=$old_image ;
                }


                //video upload--------
                $back_video= $this->request->getFile('background_video');
                $old_back_video= $this->request->getVar('old_background_video');
 
                if($post['embedcode_or_video_active'] == 'yes')
                {
                if($back_video != '')
                {
                    
                    if(file_exists('./frontend/assets/video/'.$old_back_video))
                    {
                 
                        unlink('./frontend/assets/video/'.$old_back_video);
                        
                    } 
                    $newName = 'video_'.$back_video->getRandomName();
               
                    $back_video->move(ROOTPATH.'/public/frontend/assets/video', $newName);
                    
                    $post['background_embeded']=$newName ;
                } 
                else
                {
                    $post['background_embeded']=$old_back_video ;
                 }
               }              
              else
              {
                $embeded=$this->request->getVar('background_embeded');
                $old_embeded=$this->request->getVar('old_background_embeded');

                if($embeded != '')
                {
                   
                    $post['background_embeded']=$embeded ;
                }
                else
                {
                    
                    $post['background_embeded']= $old_embeded;
                } 
              }


                foreach ($post as $key=>$row)
                {
                    $builder =$this->db->table('settings');     
                    $builder->where('group_name','Custom_theme_settings');
                    $builder->where('settings_name',$key);
                    $builder->update(['settings_value'=>$row]);
                } 
            }


        } 
        
        $builder =$this->db->table('settings');
        $builder->where('group_name','Counter_settings');
        $query   = $builder->get();
        $datas['counter_settings']=$query->getResult(); 

        $builder->where('group_name','Custom_theme_settings');
        $query   = $builder->get();
        $datas['custom_theme_settings']=$query->getResult();
  
       
        return view('counter/index',$datas);
    }

     /**
     * End index
     */
}
