<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library_src {

    public function header_css()
    {	
    	$sources[] = base_url() . "assets/css/bootstrap.css";
    	$sources[] = base_url() . "assets/css/jquery.desoslide.css";
    	$sources[] = base_url() . "assets/css/style.css";
        $sources[] = base_url() . "assets/css/fontawesome-all.css";
        $sources[] = base_url() . "assets/css/jquery.datetimepicker.css";
        $sources[] = base_url() . "asset_admin/css/jquery.dataTables.min.css";
    	$sources[] = "https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800";
		return $sources;
    }

    public function footer_js()
    {
    	$sources[] = base_url() . "assets/js/jquery-2.2.3.min.js";
        $sources[] = base_url() . "assets/js/jquery.desoslide.js";
        $sources[] = base_url() . "assets/js/bootstrap.js";
        $sources[] = base_url() . "assets/js/build/jquery.datetimepicker.full.js";
    	$sources[] = base_url() . "assets/js/general.js";
		return $sources;
    }

    public function admin_form_js()
    {
        $sources[] = base_url() . "asset_admin/plugins/jquery-validation/jquery.validate.js";
        $sources[] = base_url() . "asset_admin/plugins/jquery-steps/jquery.steps.js";
        $sources[] = base_url() . "asset_admin/js/pages/forms/form-wizard.js";
        return $sources;
    }
}