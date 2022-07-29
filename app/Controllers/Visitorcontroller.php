<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Visitorcontroller extends BaseController
{


   /**
     * This index method is used for show visitor index.
     * Method - get
   */ 

    public function index()
    {

        return view('visitor/index');
    }

  /**
     * End index.  
   */ 


   /**
     * This report method is used to get list of visitor and also used ajax datatable customization. 
     * Method - get
   */ 

    public function report()
    {
        $form_date=$this->request->getVar('form_date');
        $to_date=$this->request->getVar('to_date');
       
        $draw=$this->request->getVar('draw');
        $offset=$this->request->getVar('start');
        $limit=$this->request->getVar('length');
        
        if($draw)
        {
            $data['draw']= $draw; 
        }
        else
        {
          $data['draw']= 1;
        }
  
          $builder =$this->db->table('visitors');
          $builder->where('date >=',$form_date);
          $builder->where('date <=',$to_date);
          $query=$builder->get();
          $all_visitors=$query->getResult();
          $total=count($all_visitors);
          
          $data['recordsTotal']= $total;
          $data['recordsFiltered']= $total;

          if($offset)
          {
            $builder->offset($offset);
          }
          else
          {
            $builder->offset(0);//default 10
          }
          if($limit)
          {
            $builder->limit($limit);
          }
          else
          {
            $builder->limit(10);//default 0
          }

          //for search-------- 
          $search=$this->request->getVar('search[value]');
          if($search)
          {
            $builder->like(array('server_ip'=>$search));
            $builder->orLike(array('browser'=>$search));
            $builder->orLike(array('date'=>$search));
            } 

          $builder->where('date >=',$form_date);
          $builder->where('date <=',$to_date);
          $query=$builder->get();
          $visitors=$query->getResult(); 
      
          $data['data']=$visitors; 
    
        echo json_encode($data);

       
    }

   /**
     * End report.  
   */ 
}
