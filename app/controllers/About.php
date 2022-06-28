<?php
// This is a direct controller of about page
Class About extends Controller
{
    //When setting direct controller, always set your method name index.. but your class name must be your The Document name.  
    function index()
    {
        $data['page_title'] = "About US Page";
        $this->view("About", $data);
    }
}