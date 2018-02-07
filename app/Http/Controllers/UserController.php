<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

    }
    /**
     * param $userid int (0:new)
     * param isupdate default null , ture if user profile update others notfound
     * 
     */
    public function reroute($userid,$isupdate = NULL){
        if($isupdate!=NULL){
            if($isupdate === 'true')
            return $this->create_update($userid);
            else return view('layouts/notfound');
        }else{
            return $this->view_user($userid);
        }
    }
    public function create_update($userid){
        $data = array();
        $data['title'] = 'Create New User';
        $data['titledescription'] = '';
        if($userid!=0){
            $data['title'] = 'Update user info';
        }
        return view('users/user',$data);
    }
    
    public function view_user($userid){
        $data = array();
        $data['title'] = 'User Profile';
        $data['titledescription'] = '';
        return view('users/user',$data);
    }
}
