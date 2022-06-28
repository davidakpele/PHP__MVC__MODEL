<?php
class PagesController extends Controller {

    private $namespacemodel;
    public function __construct() {
       @$this->namespacemodel = @$this->loadModel('LoginModel');
    }
 public function index(){
    @$data = [
                'page_title' => 'Application Portal',
                'meta_tag_content_Seo'=>'Mercy College Unversity Student Portal',
                'meta_tag_description'=>'Mercy College University Online Student Portal For Undergraduate, Postgraduate and Distance Learning Part Time Students'
            ];
    @$this->view('index', @$data);    
    
    }
    public function About(){
         @$this->view('About', @$data); 
    }

    public function Page2(){
         @$this->view('wallet/Page2', @$data); 
    }
}