<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SubscriberModel;
use \DrewM\MailChimp\MailChimp;

class Subscribercontroller extends BaseController
{


     /**
     * This subscriberList method is used for show list of subscriber. 
     * Method - get
     * Validates - counterValidate
     */

    public function subscriberList()
    {
        $models=new SubscriberModel();
        $data['subscriber_list']=$models->findAll();

        return view('subscriber/index',$data);
    }

    /**
       * End subscriberList 
    */


     /**
         * This delete method is used for delete a subscriber from a subscribers table. 
         * Method - get
         * It has a perameter known as "$id" used for which row will delete.
     */

    public function delete($id)
    {
       $models=new SubscriberModel();
       $models->delete($id);
       return redirect()->to(base_url('/admin/subscriber/list'));   
    }

     /**
       * End delete 
    */


    /**
         * This mail method is used for send email to subscriber.  
         * Method - get and post
         * It has a perameter known as "$id".This id's value pass row id or 'all'. This $id perameter used for how many subscriber we will send a mail.
     */

    public function mail($id)
    {
        if($id == 'all')
        {
            $all_values=$this->request->getVar('send_to');

        }
        else
        {
            $all_values[]=$id;
        } 

       if($this->request->getMethod() == 'post')
       {

            if (!$this->validate('mailValidate')) 
            {
                $datas['validation'] = $this->validator;
            } 
           else
            {
                $email_to=$this->request->getVar('send_to');

                $builder =$this->db->table('subscribers');     
                $query=$builder->get();
                $all_id=$query->getResult();
  
                $ids=array();
                foreach($all_id as $key=>$id)
                {
                  
                    $ids[]=$id->id;
       
                }

                
                foreach($email_to as $e)
                { 
                    if(in_array($e,$ids))
                    {

                        $builder =$this->db->table('subscribers');     
                        $builder->where('id',$e);
                        $query=$builder->get();
                        $mail=$query->getRow();
                        $mail_to[]=$mail->email_address;

                    }
                    else
                    {
                        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
                        
                    }  
                }
         
                foreach($mail_to as $m)
                {
                    $email=$m;
                    $email_subject=$this->request->getVar('mail_subject');
                    $email_body=$this->request->getVar('mail_body');

                    $hello=rs_email($email,$email_subject,$email_body);

                   
        
                }
                echo '<pre>';
                print_r($hello);
               die();
           
               
            } 
        }


       $datas['id']=$id;
       $datas['send_to']=$all_values;
       return view('subscriber/mail',$datas);
    }

   /**
       * End mail 
    */

    public function allMail()
    {
        $all_mail=$this->request->getVar('mail_id');
        
        return redirect()->to(base_url('/admin/subscriber/mail/'.$all_mail));  
        
    }
}
