<?php
class Home extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('User','um');
    }
    
    public function index(){
       // echo "ok";
        $this->load->view('home');
    }
    //load about us page.......
    public function aboutus(){

    $this->load->view('aboutus');
    }
//for registration************************************
    public function registration(){
        /*uploading user information*/
        if ($this->input->post('btnReg')=='registration') {
            //print_r($this->input->post());
            $name=$this->security->xss_clean($this->input->post('t1'));
            $phone=$this->security->xss_clean($this->input->post('t2'));
            $email=$this->security->xss_clean($this->input->post('t3'));
            $address=$this->security->xss_clean($this->input->post('t4'));
            $pin=$this->security->xss_clean($this->input->post('t5'));
            $password=$this->security->xss_clean($this->input->post('p1'));
            $data=[
                'c_name'=>$name,
                'phone'=>$phone,
                'email'=>$email,
                'address'=>$address,
                'pin'=>$pin,
                'pass'=>$password
                ];
             $count=$this->um->insertUsers($data);
             if ($count==1) {
                $this->session->set_flashdata('msg',"<div class='alert alert-success'>You have Registered Successfully</div>");
                $this->load->view('loginPage');
             } else {
                $this->session->set_flashdata('msg',"<div class='alert alert-danger'>Registration Failed</div>");
                $this->load->view('registration');
             }
             

        } else {
            $this->load->view('registration');
        }
        
        
    }
//load home or the front page(as controller name and the function name should not be matched so I named it" front")
    public function front(){
        $this->load->view('home');
    }
//here we load login part*************
    public function login(){
    

      if($this->input->post('btnLogin')=='login'){
        
          //$this->load->model('User','um');
          $user = $this->um->loginUser(
            $this->input->post('uname'),
        ($this->input->post('pass1'))
          );
           //print '<pre>';
           //print_r($user);
           $info =[]; #Empty array
           if(count($user)!=0){
            //Let's Store some information using session
             $info =[
                'name'    =>$user[0]->c_name,
                'user_id' =>$user[0]->u_id,
                'role'    =>$user[0]->role
             ];
             //save this information in session
             $this->session->set_userdata('USER',$info);

             redirect(base_url()."index.php/home/index");
             //print_r($info);
           }else{
             $this->session->set_flashdata('msg',"<div class='alert alert-danger'>Invalid Username or Password</div>");
             redirect(base_url()."index.php/home/login");
           }
    }
       else{
          $this->load->view('loginPage');
      }
     }

public function profile(){

    $data=$this->session->all_userdata();
    /*profile Routing*/
    if ($data['USER']['role']=='Admin') {
        redirect(base_url()."index.php/home/showUsers");
    } elseif ($data['USER']['role']=='Regular') {
        redirect(base_url()."index.php/home/userProfile");
    }else{
        $this->session->set_flashdata('msg',"<div class='alert alert-danger'>You need to login first</div>");
        redirect(base_url()."index.php/home/login");
    }
    
    
    }


//here we load contact page
        public function contact(){
            $this->load->view('contact');
        }


//here we load logout part******************************
        public function logout(){
        
        $info =[
                'name'    =>NULL,
                'user_id' =>0,
                'role'    =>NULL
             ];

        $this->session->unset_userdata('USER',$info);
        $this->session->set_flashdata('msg',"<div class='alert alert-success'>You have Successfully Logged Out !</div>");
        redirect(base_url()."index.php/home/login");
        
      }


} 
?>
