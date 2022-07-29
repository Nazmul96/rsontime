<?php

namespace App\Controllers;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\SubscriberModel;
use \DrewM\MailChimp\MailChimp;
use Getresponse\Sdk\GetresponseClientFactory;
use Getresponse\Sdk\Operation\Contacts\CreateContact\CreateContact;
use Getresponse\Sdk\Operation\Model\CampaignReference;
use Getresponse\Sdk\Operation\Model\NewContact;


class Homecontroller extends BaseController
{


      /**
     * This index method is used for many things.Firstly, insert infromation of a vistor to database. Secondly, work with several third party email api which names are moosend, getresponse, mailchimp.Thirdly, working with google recapcha for validation.    
     * Method - get and post
     * Validates - subscriberValidate,contactusValidate, contactusValidate_without_capcha
   */

    public function index()
    {
        date_default_timezone_set('Asia/Dhaka');
        $datas=array();
  
       
        $ip=$datatwo['server_ip']=$_SERVER['SERVER_ADDR'];
        $browser=$datatwo['browser']=$_SERVER['HTTP_USER_AGENT'];
        $datatwo['date']=date('Y-m-d');
        $datatwo['time']=time();
     
        $builder =$this->db->table('visitors');
        $builder->where('date',date('Y-m-d'));
        $builder->where('server_ip',$ip);
        $query=$builder->get();
        $visitor=$query->getResult();

       
       
      
        if(!empty($visitor))
        {
             
          foreach($visitor as $visitors)
          {        
            if(($ip == $visitors->server_ip)&&(date('Y-m-d')==$visitors->date)&&($browser == $visitors->browser))
            {
               
            }
            else if(($ip == $visitors->server_ip) && (date('Y-m-d')==$visitors->date) && ($browser != $visitors->browser))
            {
                $builder->insert($datatwo);
            }
         }
       }
       else
       {
         $builder->insert($datatwo); 
       }
        
        if($this->request->getMethod() == 'post')
        {
            $contact=$this->request->getVar('contact');
            $subscribe=$this->request->getVar('subscribe');
             if($subscribe == 'subscribe')
             {
            
                if (!$this->validate('subscriberValidate')) 
                {
                    $validation= $this->validator;
                    $response = [
                        'success' => false,
                        'msg' => $validation->getError('email_address'),//
                    ];
                    return $this->response->setJSON($response);
                } 
                else
                {
                    
                    $builder =$this->db->table('mailchimp');
                    $query=$builder->get();
                    $data=$query->getResult();

                    $builder =$this->db->table('get_response');
                    $query=$builder->get();
                    $new_data=$query->getResult();

                    $builder =$this->db->table('moosend');
                    $query=$builder->get();
                    $new_data_two=$query->getResult();


                    $models=new SubscriberModel();

                    $data['date']=date("Y-m-d");
                    $data['time']=date("h:i");
                    $data['email_address']=$this->request->getVar('email_address');

                    //Mailchimp Api----------
                    $MailChimp = new MailChimp($data[0]->api_key);
                    $list_id=$data[0]->list_id;
                    $result = $MailChimp->post("lists/$list_id/members", [
                        'email_address' => $data['email_address'],
                        'status'        => 'subscribed',
                    ]);

                    //Getresponse Api----------
                    $createContact = new NewContact(
                        new CampaignReference($new_data[0]->campaign_id),
                        $data['email_address']
                    );
                    
                    $createContactOperation = new CreateContact($createContact);
                    $client = GetresponseClientFactory::createWithApiKey($new_data[0]->api_key);
                    $response = $client->call($createContactOperation);
                    
                    if ($response->isSuccess()) {
                    }

                    //Moosend Api---------
                    $api_instance = new \Swagger\Client\Api\SubscribersApi();
                    $format = "json";
                    $mailing_list_id = $new_data_two[0]->mailing_list_id;
                    $apikey = $new_data_two[0]->api_key;

                    $body = new \Swagger\Client\Model\AddingSubscribersRequest();
                    $body=[
                       "Email"=>$data['email_address']
                    ];

                    $result = $api_instance->addingSubscribers($format, $mailing_list_id, $apikey, $body);

                    
                    //Constant Contact Api------------           
                    
                        $models->insert($data); 
                        $response = [
                            'success' => true,
                            'message'=>'successfully subscribed!'
                        ];
                       
                        return $this->response->setJSON($response);     
                    
                }
             }
             if($contact == 'contact')
             {

                $builder =$this->db->table('pages');
                $query=$builder->get();
                $data=$query->getResult();

            
                if($data[12]->settings_value == 'yes')
                {
                    if (!$this->validate('contactusValidate')) 
                    {   
                        $validation = $this->validator;
                        $response = [
                            'success' => false,
                            'msg1' => $validation->getError('name'),
                            'msg2' => $validation->getError('email'),
                            'msg3' => $validation->getError('description'),
                            'capcha_error'=>$validation->getError('recaptcha')
                        ];
        
                        return $this->response->setJSON($response);
                    }
                    else
                    {
                        
                        $name=$this->request->getVar('name');
                        $email=$this->request->getVar('email');
                        $description=$this->request->getVar('description');
                        $subject='A new contact';
                        $body='Hello '.$name.'
    
                        Thanks for being with us.
                        
                        Regards,
                        
                        Thanks & Regards,
                        Rs Software';
                        $hello=rs_email($email,$subject,$body);
    
                        $captcha_response = trim($_POST['recaptcha']);
    
                        $builder =$this->db->table('pages');
                        $query=$builder->get();
                        $pages=$query->getResult();
    

                        $secret=$pages[14]->settings_value;
           
                        $credential = array(
                                'secret' => $secret,
                                'response' => $_POST['recaptcha']
                            );
    
                            $verify = curl_init();
                            curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
                            curl_setopt($verify, CURLOPT_POST, true);
                            curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($credential));
                            curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
                            curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
                            $response = curl_exec($verify);
                       
                            $status= json_decode($response, true);
            
    
                        if($status['success'])
                        { 
                            $response = [
                                'success' => true,
                                'message'=>'successfully submit!'
                            ];
                             return $this->response->setJSON($response);
                           }else{
                            $response = [
                                'success' => false,
                                'error_message'=>'Something goes to wrong!'
                            ];
                             return $this->response->setJSON($response);
                           
                           }

                    }
                }
                else if($data[12]->settings_value == 'no'){
  
                    if (!$this->validate('contactusValidate_without_capcha')) 
                    {   
                        
                        $validation = $this->validator;
                        $response = [
                            'success' => false,
                            'msg1' => $validation->getError('name'),
                            'msg2' => $validation->getError('email'),
                            'msg3' => $validation->getError('description'),
                        ];
        
                        return $this->response->setJSON($response);
                    }

                    else{
                    
                        $name=$this->request->getVar('name');
                        $email=$this->request->getVar('email');
                        $description=$this->request->getVar('description');
                        $subject='A new contact';
                        $body='Hello '.$name.'
    
                        Thanks for being with us.
                        
                        Regards,
                        
                        Thanks & Regards,
                        Rs Software';
                        $hello=rs_email($email,$subject,$body);
    
    
                        $builder =$this->db->table('pages');
                        $query=$builder->get();
                        $pages=$query->getResult();
    
    
    
                        if($hello)
                        { 
                            $response = [
                                'success' => true,
                                'message'=>'successfully submit!'
                            ];
                             return $this->response->setJSON($response);
                           }
                           else
                           {
                            $response = [
                                'success' => false,
                                'error_message'=>'Something goes to wrong!'
                            ];
                             return $this->response->setJSON($response);
                           
                           }
      
                    }
                } 

            }
          

        }

        $builder =$this->db->table('settings');
        $builder->where('group_name','General_setting');
        $query   = $builder->get();
        $datas['General_setting']=$query->getResult();

        $builder->where('group_name','Social_setting');
        $query   = $builder->get();
        $datas['social_setting']=$query->getResult();

        $builder->where('group_name','Seo_setting');
        $query   = $builder->get();
        $datas['Seo_setting']=$query->getResult();

        $builder->where('group_name','Counter_settings');
        $query   = $builder->get();
        $datas['Counter_settings']=$query->getResult();

        $builder->where('group_name','Custom_theme_settings');
        $query   = $builder->get();
        $datas['Custom_theme_settings']=$query->getResult();

        $builder->where('group_name','chat_setting');
        $query = $builder->get();
        $datas['chat_setting']=$query->getResult();

        $builder1 =$this->db->table('pages');
        $builder1->where('group_name','About_us_details');
        $query1   = $builder1->get();
        $datas['About_us_details']=$query1->getResult();

        $builder1 =$this->db->table('pages');
        $builder1->where('group_name','Contact_us_details');
        $query1   = $builder1->get();
        $datas['Contact_us_details']=$query1->getResult();
       
  
        //for google map show----------
        $lat_lang=$datas['Contact_us_details'][8]->settings_value;
        $lat_lang_new=explode(",",$lat_lang);
        $datas['lat']=$lat_lang_new[0];
        $datas['lang']=$lat_lang_new[1];


        $date=date_create($datas['Counter_settings'][1]->settings_value);
        $datas['release_time']=date_format($date, 'H:i:s');

        //$today_date=;
        $database_date=$datas['Counter_settings'][0]->settings_value;
        $date1=date_create(date("Y-m-d"));
        $date2=date_create($database_date);
        $diff=date_diff($date1,$date2);
        $datas['days']=$diff->format("%a");
        

        
        if(($datas['Counter_settings'][5]->settings_value == 'theme1'))
        {
            return view('theme/theme1',$datas);
        }
        if(($datas['Counter_settings'][5]->settings_value== 'theme2'))
        {
            return view('theme/theme2',$datas);
        }
        if(($datas['Counter_settings'][5]->settings_value== 'theme3'))
        {
            return view('theme/theme3',$datas);
        }
        if(($datas['Counter_settings'][5]->settings_value == 'theme4'))
        {
            return view('theme/theme4',$datas);
        }
        if(($datas['Counter_settings'][5]->settings_value == 'theme5'))
        {
            return view('theme/theme5',$datas);
        }
        if(($datas['Counter_settings'][5]->settings_value == 'theme6'))
        {
            return view('theme/theme6',$datas);
        }
   
    }

     /**
     * End index
     */

}
