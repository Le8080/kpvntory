<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{

    /**
     * reroute the user to create or update or just view the company
     *
     * @param [int] $companyid
     * @param [bool] $isupdate 
     * @return void
     */
    public function reroute($companyid,$isupdate = NULL){
        if($isupdate!=NULL){
            if($isupdate === 'true')
            return $this->create_update($companyid);
            else return view('layouts/notfound');
        }else{
            return $this->view_company($userid);
        }
    }
    /**
     * Create or update the company data
     *
     * @param [int] $companyid
     * @return void
     */
    public function create_update($companyid){
        $data = array();
        $data['title'] = 'Add New Company';
        $data['titledescription'] = '';
        if($companyid!=0){
            $data['title'] = 'Update company info';
        }
        return view('company/company',$data);
    }
    /**
     * view company info
     *
     * @param [type] $companyid
     * @return void
     */
    public function view_company($companyid){
        $data = array();
        $data['title'] = 'Company';
        $data['titledescription'] = '';
        return view('company/company',$data);
    }
}
