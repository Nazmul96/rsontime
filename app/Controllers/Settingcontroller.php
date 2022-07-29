<?php
   
namespace App\Controllers;


use App\Controllers\BaseController;
use App\Models\SettingModel;
use \DrewM\MailChimp\MailChimp;
use Ctct\ConstantContact;
use Getresponse\Sdk\GetresponseClientFactory;
use Getresponse\Sdk\Operation\Contacts\GetContacts\GetContacts;
use Getresponse\Sdk\Operation\Campaigns\GetCampaigns\GetCampaigns;


class Settingcontroller extends BaseController
{


     /**
         * This index method is used for set setting of rsontime project.Firstly, set general setting that are show title off/on, show subtitle off/on of view page etc..Secondly profile setting to change password,name,image and data keeps to database. Thirdly, Social,seo,chat setting information insert to database.
         * Method - get and post
         * Validates - settingValidate
     */

    public function index()
    {
        

        $builder =$this->db->table('admins');     
        $builder->where('id','1');
        $query=$builder->get();
        $datas['admins']=$query->getRow();

        $models=new SettingModel();
        
        if($this->request->getMethod() == 'post')
        { 

            if (!$this->validate('settingValidate')) 
            {
                $datas['validation'] = $this->validator;
            } 
            else
             {
                $post=$this->request->getVar();
              
                if(empty($post['show_title']))
                {
                    $post['show_title']='no'; 
                }
                if(empty($post['show_subtitle']))
                {
                    $post['show_subtitle']='no'; 
                }

                if(empty($post['show_description']))
                {
                    $post['show_description']='no'; 
                }

                if(empty($post['show_social']))
                {
                    $post['show_social']='no'; 
                }

                if(empty($post['show_menu']))
                {
                    $post['show_menu']='no'; 
                }

                if(empty($post['rtl_format'])){
                    $post['rtl_format']='no'; 
                }
                if(empty($post['show_chat']))
                {  
                    $post['show_chat']='no'; 
                }
    
                foreach ($post as $key=>$row)
                {
                    $builder =$this->db->table('settings');     
                    $builder->where('group_name','General_setting');
                    $builder->where('settings_name',$key);
                    $builder->update(['settings_value'=>$row]);
                }

                $password=md5($this->request->getVar('current_password')); 
                if($post['current_password'] == '' && $post['new_password'] == '' && $post['retype_new_password'] == '')
                {                           
                    $account_setting['full_name']=$this->request->getVar('full_name');
                    $account_setting['user_name']=$this->request->getVar('user_name');
                    $account_setting['email']=$this->request->getVar('email');
                }
                else
                {
                    $account_setting['full_name']=$this->request->getVar('full_name');
                    $account_setting['user_name']=$this->request->getVar('user_name');
                    $account_setting['email']=$this->request->getVar('email');
                     if($post['current_password'] != '')
                     {
                        if($password != $datas['admins']->password)
                        {
                            return redirect()->to(base_url('/admin/setting/index'))->with('error','current password is not valid');
                        }
                       else
                       {
                        if($post['new_password'] == '' && $post['retype_new_password'] == '')
                        {
                            return redirect()->to(base_url('/admin/setting/index'))->with('error1','new password is required')->with('error2','retype new password is required');
                        }       
                        else if($post['new_password'] == '')
                        {
                            return redirect()->to(base_url('/admin/setting/index'))->with('error1','new password is required');
                        }
                        else if($post['retype_new_password'] == '')
                        {
                           return redirect()->to(base_url('/admin/setting/index'))->with('error2','retype new password is required');

                        }
                        else if($post['new_password'] != '' &&  $post['retype_new_password'] != ''){
                            if($post['new_password'] != $post['retype_new_password'])
                            {
                             return redirect()->to(base_url('/admin/setting/index'))->with('error2','Retype password did not match with new password');

                            }
                            else
                            {
                                $account_setting['password']=md5($this->request->getVar('new_password')); 
                            }
                       }
                        
                        
                      }

                     }
                     else if($post['new_password'] != '' || $post['retype_new_password'] != '')
                     {
                        return redirect()->to(base_url('/admin/setting/index'))->with('error','current password is must required');
                     }


                }
              
                $file = $this->request->getFile('profile_image');
                $old_image=$this->request->getVar('old_profile_image');
                
                if($file != '')
                {

                    if(file_exists('./image/profile/'.$old_image))
                    {

                        unlink('./image/profile/'.$old_image);
                       
                    } 
                    $newName = $file->getRandomName();
                    $file->move(ROOTPATH.'/public/image/profile/', $newName );
                    $account_setting['profile_image']=$newName ;
                } 
                else{
                    $account_setting['profile_image']=$old_image ;
                }
                $favicon=$this->request->getFile('favicon');
                $old_favicon=$this->request->getVar('old_favicon');
               
                if($favicon != '')
                {
                    if(file_exists('./image/favicon/'.$old_favicon))
                    {
                        unlink('./image/favicon/'.$old_favicon);
                       
                    } 
                    $favicon_newName = $favicon->getRandomName();
                    $favicon->move(ROOTPATH.'/public/image/favicon/', $favicon_newName );
                    $account_setting['favicon']=$favicon_newName ;
                }
                else
                {
                    $account_setting['favicon']=$old_favicon ;
                }


               
                
                if($post['chat_name'] == 'smartsupp')
                {
                    $post['chat_content']=$post['text_smartsupp'];
                }
                else if($post['chat_name'] == 'facebook')
                {
                    $post['chat_content']=$post['text_facebook'];
                }
                else
                {
                    $post['chat_content']=$post['text_whatsapp'];
                }    
   
                foreach ($post as $key=>$row)
                {
                    $builder =$this->db->table('settings');     
                    $builder->where('group_name','chat_setting');
                    $builder->where('settings_name',$key);
                    $builder->update(['settings_value'=>$row]);
                } 


                $builder =$this->db->table('admins');     
                $builder->where('id','1');
                $builder->update($account_setting);
                
                
                foreach ($post as $key=>$row)
                {
                    $builder =$this->db->table('settings');     
                    $builder->where('group_name','Social_setting');
                    $builder->where('settings_name',$key);
                    $builder->update(['settings_value'=>$row]);
                 } 
                
            foreach ($post as $key=>$row)
            {
                $builder =$this->db->table('settings');     
                $builder->where('group_name','Seo_setting');
                $builder->where('settings_name',$key);
                $builder->update(['settings_value'=>$row]);
            }     
                
               
             }
        }     
        $builder =$this->db->table('timezones');
        $query   = $builder->get();
        $datas['timezone']=$query->getResult();

        $builder =$this->db->table('settings');
        $builder->where('group_name','General_setting');
        $query   = $builder->get();
        $datas['General_setting']=$query->getResult();

        $builder =$this->db->table('settings');
        $builder->where('group_name','Social_setting');
        $query   = $builder->get();
        $datas['Social_setting']=$query->getResult();

        $builder =$this->db->table('settings');
        $builder->where('group_name','Seo_setting');
        $query   = $builder->get();
        $datas['Seo_setting']=$query->getResult();
       

        
        $builder =$this->db->table('settings');
        $builder->where('group_name','chat_setting');
        $query   = $builder->get();
        $datas['chat_setting']=$query->getResult();
 
        return view('setting/index',$datas);
    }

     /**
     * End index
     */


    /**
         * This emailSetup method is used for insert to database of email setting.Such as host,port,password,encrption type etc.
         * Method - get and post
         * Validates - EmailValidate, smtpValidate, sendmail, mail
     */  

    public function emailSetup()
    {
        if($this->request->getMethod() == 'post')
        { 
            
            if (!$this->validate('EmailValidate')) 
            {
                $datas['validation'] = $this->validator;
            } 
            else{

                $email_setup=$this->request->getVar();
                if($email_setup['supported_mail_services']=='smtp')
                {
             
                    if (!$this->validate('smtpValidate')) 
                    {
                        $datas['validation'] = $this->validator;
                    }
                    else
                    {
                        foreach ($email_setup as $key=>$row)
                        {
                            $builder =$this->db->table('settings');     
                            $builder->where('group_name','Email_setup');
                            $builder->where('settings_name',$key);
                            $builder->update(['settings_value'=>$row]);
                            } 
                    }    
                }
                if($email_setup['supported_mail_services']=='sendmail')
                {
                    if (!$this->validate('sendmailValidate')) 
                    {
                        $datas['validation'] = $this->validator;
                    }
                    else
                    {
                        foreach ($email_setup as $key=>$row){
                            $builder =$this->db->table('settings');     
                            $builder->where('group_name','Email_setup');
                            $builder->where('settings_name',$key);
                            $builder->update(['settings_value'=>$row]);
                            } 
                    }

                }
               if($email_setup['supported_mail_services']=='mail')
               {
                foreach ($email_setup as $key=>$row)
                {
                    $builder =$this->db->table('settings');     
                    $builder->where('group_name','Email_setup');
                    $builder->where('settings_name',$key);
                    $builder->update(['settings_value'=>$row]);
                    } 
               }
            }

        }    
        $builder =$this->db->table('settings');
        $builder->where('group_name','Email_setup');
        $query   = $builder->get();
        $datas['Email_setup']=$query->getResult();

        return view('setting/email_setup',$datas);
    }

     /**
     * End emailSetup
     */


    /**
         * This mailchimpIndex method is used for show mailchimp api index.
         * Method - get
     */  

    public function mailchimpIndex()
    {
        
        $builder =$this->db->table('mailchimp');
        $query=$builder->get();
        $keys=$datas['keys']=$query->getResult();

        if(!empty($keys))
        {
        $MailChimp = new MailChimp($keys[0]->api_key);
        $datas['result'] = $MailChimp->get('lists');
        }    
        $builder =$this->db->table('mailchimp');
        $query=$builder->get();
        $datas['keys']=$query->getResult();
   
        return view('mailchimp/index',$datas);
    }

     /**
     * End mailchimpIndex
     */


    /**
         * This mailchimpSubmit method is used for insert mailchimp api information to database. 
         * Method - post
     */ 

    public function mailchimpSubmit()
    {
 
        $db = db_connect('default'); 
        
        $builder =$this->db->table('mailchimp');
        $query=$builder->get();
        $data=$query->getResult();
        

        if(empty($data))
        {
            $datas['api_key']=$this->request->getVar('api_key');
            $builder->insert($datas);

            $MailChimp = new MailChimp($datas['api_key']);
            $datas['result'] = $MailChimp->get('lists');

            echo json_encode($datas);
        }
        else
        {
           
                $data_two['list_id']=$this->request->getVar('list_id');
                $builder->where('id',$data[0]->id);
                $builder->update($data_two);
                echo json_encode($data_two);
          
        }
       
    }

     /**
     * End mailchimpSubmit
     */

    public function constantContactIndex()
    {
        $builder =$this->db->table('constant_contact');
        $query=$builder->get();
        $data=$query->getResult();
        $datas['values']=$query->getResult();

    
        $datas['clientId']="be21f5a5-f5f6-476d-b7a4-0fea71a12558";
        $datas['redirectURI']="rsontime.com";
        $clientSecret='41zAJ9oNgutJAyvOJEbMNA';
        $redirectURI='http://rsontime.com/admin/constant_contact/';
      
        if(isset($_GET['code']))
        {
            $client = new \PHPFUI\ConstantContact\Client($datas['clientId'], $clientSecret, $redirectURI);
            $value=$client->acquireAccessToken($_GET['code']);
        
           
            $data_two['api_key']=$datas['clientId'];
            $data_two['secret_key']=$clientSecret;
            $data_two['access_token']=$client->accessToken;
            $data_two['refresh_token']=$client->refreshToken;
            $data_two['expired_time']=time();
            $builder->insert($data_two);
                 
        }
        else{
            $client = new \PHPFUI\ConstantContact\Client($datas['clientId'], $clientSecret, $redirectURI);
            $client->accessToken = $data[0]->access_token;
            $client->refreshToken = $data[0]->refresh_token;

            $listEndPoint = new \PHPFUI\ConstantContact\V3\ContactLists($client);
            $contact_id=new \PHPFUI\ConstantContact\V3\Contacts($client);
            $contact = $contact_id->get();
            $lists = $listEndPoint->get();
           
            foreach($lists['lists'] as $key=>$list_new)
            {

                $list_id[$key]=$list_new['list_id'];
                $name[$key]=$list_new['name'];
                
            }
            $datas['list_id']=$list_id;
            $datas['name']=$name;
        }
        
        return view('constant_contact/index',$datas);
    }

    public function constantContactSubmit()
    {
        $builder =$this->db->table('constant_contact');
        $query=$builder->get();
        $data=$query->getResult();
      
        $new_datas['list_id']=$this->request->getVar('list_id');
        $builder->where('id',$data[0]->id);
        $builder->update($new_datas);
        
        return redirect()->to('/admin/constant_contact'); 
    }

        /***
     * @param $redirectURI -URL Encoded Redirect URI
     * @param $clientId - API Key
     * @return string - Full Authorization URL
     */

    function getAuthorization($clientId,$new_redirectURI=0) {
        $url='http://rsontime.com/admin/constant_contact/';
 
       $apiKey=$clientId;
       $secret="41zAJ9oNgutJAyvOJEbMNA";
       $tokenURL=$url;

        $client = new \PHPFUI\ConstantContact\Client($apiKey, $secret, $tokenURL);
     
        $link=$client->getAuthorizationURL();
       
        \header('location: ' . $link);
    
        die();
        
    }

    function getAccessToken($redirectURI, $clientId, $clientSecret, $code) {
        

        
        // Use cURL to get access token and refresh token
        $ch = curl_init();
    
        // Define base URL
        $base = 'https://idfed.constantcontact.com/as/token.oauth2';
    
        // Create full request URL
       $url = $base . '?code=' . $code . '&redirect_uri=' . $redirectURI . '&grant_type=authorization_code&scope=contact_data';
        curl_setopt($ch, CURLOPT_URL, $url);
        
       
        // Set authorization header
        // Make string of "API_KEY:SECRET"
        $auth = $clientId . ':' . $clientSecret;
        // Base64 encode it
        $credentials = base64_encode($auth);
        // Create and set the Authorization header to use the encoded credentials
        $authorization = 'Authorization: Basic ' . $credentials;
        curl_setopt($ch, CURLOPT_HTTPHEADER, array($authorization));
    
        // Set method and to expect response
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
        // Make the call
           $result = curl_exec($ch);
            curl_close($ch);
       
            return $result;
    }


    /**
     * This getResponseIndex method is used for show getresponse api index.
     * Method - get
   */ 

    public function getResponseIndex()
    {
        $builder =$this->db->table('get_response');
        $query=$builder->get();
        $data_two=$query->getResult();
        $datas['keys']=$query->getResult();

        if(!empty($data_two))
        {
            $getContactsOperation = new GetContacts();
            $client = GetresponseClientFactory::createWithApiKey($data_two[0]->api_key);
            $response = $client->call($getContactsOperation);
    
            // getData returns decoded data as an array
            $data = $response->getData();
    
            $abc=json_encode($data, JSON_PRETTY_PRINT);
            
    
            $abcd=json_decode($abc,true);
            
            foreach ($abcd as $key=>$rows)
            {
                $capaign_id[$key]=$rows['campaign']['campaignId'];
                $name[$key]=$rows['campaign']['name'];
            }

            $datas['campaign_id']=array_unique($capaign_id);
            $datas['name']=array_unique($name);
        }
        return view('get_response/index',$datas);
    }

  /**
   * End getResponseIndex
 */ 


    /**
         * This getResponseSubmit method is used for insert getresponse api information to database. 
         * Method - post
     */ 

    public function getResponseSubmit()
    {
        
        $builder =$this->db->table('get_response');
        $query=$builder->get();
        $data_two=$query->getResult();
     
        if(empty($data_two))
        {
            $datas_new['api_key']=$this->request->getVar('api_key');
            $builder->insert($datas_new);
        }
        else
        {

               $new_datas['campaign_id']=$this->request->getVar('list_id');
               $builder->where('id',$data_two[0]->id);
               $builder->update($new_datas);
            
        }

        return redirect()->to('/admin/get_response'); 
    }

    /**
     * End getResponseSubmit
     */ 


    /**
     * This moosendIndex method is used for show moosend api index.
     * Method - get
   */ 
    public function moosendIndex()
    {
    
        $builder =$this->db->table('moosend');
        $query=$builder->get();
        $data_two=$query->getResult();
        $datas['keys']=$query->getResult();
      
        if(!empty($data_two))
        {
            
            $api_instance = new \Swagger\Client\Api\MailingListsApi();
            $api_instance = new \Swagger\Client\Api\MailingListsApi();
            $format = "json";
            $apikey = $data_two[0]->api_key; 
            $with_statistics = "true";
            $short_by = "Name"; 
            $sort_method = "ASC";
            $result = $api_instance->gettingAllActiveMailingLists($format, $apikey, $with_statistics, $short_by, $sort_method);
            if($result)
            {
                $abc=json_decode($result,true);
               
                $all=$abc['Context']['MailingLists'];
                foreach ($all as $key=>$rows)
                {
                   
                    $email_list_id[$key]=$rows['ID'];
                    $name[$key]=$rows['Name'];
                }
                $datas['email_list_id']=array_unique($email_list_id);
                $datas['name']=array_unique($name);
            }
            else
            {
                echo 'Exception when calling CampaignsApi->getAllCampaigns: '; //$e->getMessage(), PHP_EOL;
            }
        }
        return view('moosend/index',$datas);
    }
   /**
     * End moosendIndex
    */ 


    /**
         * This moosendSubmit method is used for insert moosend api information to database. 
         * Method - post
     */ 
    public function moosendSubmit()
    {
        $builder =$this->db->table('moosend');
        $query=$builder->get();
        $data_two=$query->getResult();
       
      
     
        if(empty($data_two))
        {
            
            $data_new['api_key']=$this->request->getVar('api_key');
            $builder->insert($data_new);
        }
        else
        {
            $new_datas['mailing_list_id']=$this->request->getVar('mailing_list_id');
            $builder->where('id',$data_two[0]->id);
            $builder->update($new_datas); 
        }

        return redirect()->to('/admin/moosend'); 
    }

     /**
     * End moosendSubmit
    */ 
    
}
