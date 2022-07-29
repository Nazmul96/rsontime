<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\SubscriberModel;

class Admincontroller extends BaseController
{


    /**
     * This login method shows login page for login and gives access authentic user to login and also check the user authentic or not.
     * Method - get and post
     * Validates - adminValidate
     */

    public function login()
    {
        $models=new AdminModel();

        $datas=array();

        if($this->request->getMethod() == 'post')
        { 
            
            if (!$this->validate('adminValidate')) 
            {
                $datas['validation'] = $this->validator;
            } 
            else
             {
                
                $email=$this->request->getVar('email');
                $password=md5($this->request->getVar('password'));
                $users= $models->where('email', $email)->where('password',$password)->first();
               
                if($users)
                {
                     
                    $session_data['login_info']=[
                        'email'=>$email,
                        'password'=>$password,
                        'loggedIn' => 'login',
                        'name'=>$users['full_name'],
                        'profile_image'=>$users['profile_image'],
                     ];
        
                    $this->session->set($session_data);
                    return redirect()->to(base_url('/admin/dashboard'));
                }
                else
                {
                    return redirect()->to(base_url('/admin/login'))->with('success','Sorry! emails or password are incorrect');
                 }
             }
        }
        return view('admin/login',$datas);
    }

    /**
     * End login
     */


     /**
     * This dashboard method is used for shows a dashboard and calculate how many subscriber and visitor in this site.
     * Method - get
     */ 

    public function dashboard()
    {
        $builder =$this->db->table('subscribers');
        $data['all_subscriber']=$builder->countAll();

        $year=date("Y");
       
        for($i=1; $i<=12; $i++)
        {
            $builder =$this->db->table('subscribers');
            $builder->where('YEAR(date)',$year);
            $builder->where('MONTH(date)',$i);
            $query=$builder->get();
            $total_year=$query->getResult();
            $value=Count($total_year);
            $monthly_subscriber[$i]=$value;
        }

          
        for($i=1; $i<=12; $i++)
        {
            $builder =$this->db->table('visitors');
            $builder->where('YEAR(date)',$year);
            $builder->where('MONTH(date)',$i);
            $query=$builder->get();
            $total_year=$query->getResult();
            $value=Count($total_year);
            $monthly_visitors[$i]=$value;
        }


        $data['monthly_subscriber']=$monthly_subscriber;
        $data['monthly_visitors']=$monthly_visitors;

        //currnet month subscriber----
        $builder =$this->db->table('subscribers');   
        $builder->where('MONTH(date)',date('m'));
        $query=$builder->get();
        $current_subscriber=$query->getResult();
        $data['current_month_subscriber']=Count($current_subscriber);
        
        //previous month subscriber------
        $newdate = date("m", strtotime("-1 months"));
        $builder =$this->db->table('subscribers');
        $builder->where('MONTH(date)',$newdate);
        $query=$builder->get();
        $previous_subscriber=$query->getResult();
        $data['previous_month_subscriber']=Count($previous_subscriber);
       
       
         //current month visitors---------
         $builder =$this->db->table('visitors');
         $builder->where('MONTH(date)',date('m'));
         $query=$builder->get();
         $current_visitors=$query->getResult();
         $data['current_month_visitors']=Count($current_visitors);
        
        //previous month subscriber------
        $newdate = date("m", strtotime("-1 months"));
        $builder =$this->db->table('visitors');
        $builder->where('MONTH(date)',$newdate);
        $query=$builder->get();
        $previous_visitors=$query->getResult();
        $data['previous_month_visitors']=Count($previous_visitors);

        $builder =$this->db->table('visitors');
        $data['all_visitors']=$builder->countAll();
        return view('admin/home',$data); 
    }

     /**
     * End dashboard
     */


      /**
     * This logout method is used for destroy information of a logged in user from session and redirect a user to login page.
     * Method - get
     */

    public function logout()
    {
        $session_data= $this->session->get('login_info');

        if($session_data['email'])
        {
            $this->session->destroy();
           return redirect()->to(base_url('/admin/login'));    

        }

    }

   /**
     * End logout
   */

}
