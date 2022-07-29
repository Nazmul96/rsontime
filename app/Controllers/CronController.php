<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use PHPFUI\ConstantContact;
use Ctct\Components\Contacts\Contact;
use Ctct\Exceptions\CtctException;
use Ctct\Components\Contacts;
use Ctct\Components\Library;



class CronController extends BaseController
{
    public function access_token_update()
    {

   
        $builder =$this->db->table('constant_contact');
        $query=$builder->get();
        $datas=$query->getResult();
        $redirectURI='http://rsontime.com/admin/constant_contact/';
    
        $time_new=$datas[0]->expired_time + 7200;
        $database_time_new=date("Y-m-d h:i:s",$time_new);
        $current_new_time=date("Y-m-d h:i:s",time());
        
        if($current_new_time > $database_time_new){
          
            $client = new \PHPFUI\ConstantContact\Client($datas[0]->api_key, $datas[0]->secret_key, $redirectURI);
            $client->accessToken = $datas[0]->access_token;
            $client->refreshToken = $datas[0]->refresh_token;
            $value=$client->refreshToken();

            $datas_three['access_token']=$client->accessToken;
            $datas_three['refresh_token']=$client->refreshToken;
            $datas_three['expired_time']=time();
            $builder->where('id',$datas[0]->id); 
            $builder->update($datas_three);
        }

    }

    
    function refreshToken($refreshToken, $clientId, $clientSecret) {
      
        // Use cURL to get a new access token and refresh token
        $ch = curl_init();
    
        // Define base URL
        $base = 'https://idfed.constantcontact.com/as/token.oauth2';
    
        // Create full request URL
        $url = $base . '?refresh_token=' . $refreshToken . '&grant_type=refresh_token';
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

    public function new_fun()
    {
        $cc = new ConstantContact('37b8cdd4-431b-48b0-adc2-cca90eca661a');

        // attempt to fetch lists in the account, catching any exceptions and printing the errors to screen
        try {
            //echo 'get'.'<br>';
            $lists = $cc->listService->getLists('f9yTihvrpTaw0yxeoPFquXXrWTCs');
            // echo '<pre>';
            // print_r($lists);
            // die();
        } catch (CtctException $ex) {
            foreach ($ex->getErrors() as $error) {
                print_r($error);
            }
            if (!isset($lists)) {
                $lists = null;
            }
        }

        // check if the form was submitted
        if (isset($_POST['email']) && strlen($_POST['email']) > 1) {
            $action = "Getting Contact By Email Address";
            try {
                // check to see if a contact with the email address already exists in the account
                $response = $cc->contactService->getContacts('f9yTihvrpTaw0yxeoPFquXXrWTCs', array("email" => $_POST['email']));

        // create a new contact if one does not exist
        if (empty($response->results)) {
            $action = "Creating Contact";

            $contact = new Contact();
            $contact->addEmail($_POST['email']);
            $contact->addList($_POST['list']);
            $contact->first_name = $_POST['first_name'];
            $contact->last_name = $_POST['last_name'];

            /*
             * The third parameter of addContact defaults to false, but if this were set to true it would tell Constant
             * Contact that this action is being performed by the contact themselves, and gives the ability to
             * opt contacts back in and trigger Welcome/Change-of-interest emails.
             *
             * See: http://developer.constantcontact.com/docs/contacts-api/contacts-index.html#opt_in
             */
            $returnContact = $cc->contactService->addContact('f9yTihvrpTaw0yxeoPFquXXrWTCs', $contact);

            // update the existing contact if address already existed
        } else {
            $action = "Updating Contact";

            $contact = $response->results[0];
            if ($contact instanceof Contact) {
                $contact->addList($_POST['list']);
                $contact->first_name = $_POST['first_name'];
                $contact->last_name = $_POST['last_name'];

                /*
                 * The third parameter of updateContact defaults to false, but if this were set to true it would tell
                 * Constant Contact that this action is being performed by the contact themselves, and gives the ability to
                 * opt contacts back in and trigger Welcome/Change-of-interest emails.
                 *
                 * See: http://developer.constantcontact.com/docs/contacts-api/contacts-index.html#opt_in
                 */
                $returnContact = $cc->contactService->updateContact('f9yTihvrpTaw0yxeoPFquXXrWTCs', $contact);
            } else {
                $e = new CtctException();
                $e->setErrors(array("type", "Contact type not returned"));
                throw $e;
            }
        }

        // catch any exceptions thrown during the process and print the errors to screen
            } catch (CtctException $ex) {
                echo '<span class="label label-important">Error ' . $action . '</span>';
                echo '<div class="container alert-error"><pre class="failure-pre">';
                print_r($ex->getErrors());
                echo '</pre></div>';
                die();
            }
        }
    }

    public function get_campaign()
    {
        $ch = curl_init();
    
        // Define base URL
        $base = 'https://api.cc.email/v3/emails';
    
        // Create full request URL
       // $url = $base . '?refresh_token=' . $refreshToken . '&grant_type=refresh_token';
        curl_setopt($ch, CURLOPT_URL,$base);
    
        // Set authorization header
        // Make string of "API_KEY:SECRET"
        //$auth = $clientId . ':' . $clientSecret;
        // Base64 encode it
        //$credentials = base64_encode($auth);
        // Create and set the Authorization header to use the encoded credentials
        $authorization = 'Authorization: Bearer' .'TK6EgDE4qcRdpNreVa87R0CTofBV';
        curl_setopt($ch, CURLOPT_HTTPHEADER, array($authorization));
    
        // Set method and to expect response
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '{
            "name": "December Newsletter for Cat Lovers",
            "email_campaign_activities": [
            {
            "format_type": 5,
            "from_email": "jdodge@example.com",
            "from_name": "Jake Dodge",
            "reply_to_email": "jdodge@example.com",
            "subject": "Our Holiday Specials",
            "html_content": "<html><body>[[trackingImage]] <a href=\"http://www.constantcontact.com\">Visit ConstantContact.com!</a></body></html>",
            "physical_address_in_footer": {
              "address_line1": "123 Maple Street",
              "address_line2": "Unit 1",
              "address_line3": "string",
              "address_optional": "Near Boston Fire Station",
              "city": "Boston",
              "country_code": "US",
              "country_name": "United States",
              "organization_name": "Jake Dodge Pet Supplies",
              "postal_code": "02451",
              "state_code": "MA"
            }
          }
            ]
          }');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
        // Make the call
        echo $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    
}
