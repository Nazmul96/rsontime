<?php
if ( ! function_exists('rs_email'))
{
	/**
	 * Formats a numbers as bytes, based on size, and adds the appropriate suffix
	 *
	 * @param	mixed	will be cast as int
	 * @param	int
	 * @return	string
	 */
	function rs_email($email_name,$subject,$body)
	{
	
                    $email = \Config\Services::email();
                    $setting = new App\Models\SettingModel();
                    
                    //echo $attach;

                //  echo $name;
                //  echo $email_name;
                //  $description;
                //   die();  
   
                  

                    $users= $setting->where('group_name','Email_setup')->findall();
                    // echo '<pre>';
                    // print_r($users);
                    // die();
          
                    // $CI->db->where('group_name','Email_setup');
                    // $settings=$CI->db->get('settings')->result();
                    
                     if($users[2]['settings_value'] == 'sendmail'){
                              $config['protocol'] = 'sendmail';
                              $config['mailpath'] = $users[7]['settings_value'];
                              $config['charset'] = 'iso-8859-1';
                              $config['wordwrap'] = TRUE;

                              $email->initialize($config);

                     }
                    else if($users[2]['settings_value'] == 'smtp')
                    {
                              $config['protocol'] = 'smtp';  
                              $config['smtp_user'] = $users[1]['settings_value'];  
                              $config['smtp_host'] = $users[3]['settings_value'];
                              $config['smtp_port'] = $users[4]['settings_value'];
                              $config['smtp_pass'] = $users[5]['settings_value'];
                              $config['smtp_crypto'] = $users[6]['settings_value'];
                             
                              $email->initialize($config);


                            
                    }

                    $email->setFrom($users[1]['settings_value'], $users[0]['settings_value']);
                    $email->setTo($email_name);
 
                    $email->setSubject($subject);
                    $email->setMessage($body);

                    $email->send();
                    if(!$email->send()){
                        return $email->printDebugger();
                    }else{
                        return "success";
                    }  

          }
    
     return;  
    
        
          
}          