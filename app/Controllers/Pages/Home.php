<?php

namespace App\Controllers\Pages;

use \App\Utils\View;
use \App\Models\Entity\Organization;

class Home extends Page {

    public static function getHome(){
        $obOrganization = new Organization();

        $content = View::render('pages/home', [
            'name'          => $obOrganization->name,
            'description'   => $obOrganization->description,
            'site'          => $obOrganization->site
        ]);

        return parent::getPage('EMPRESA', $content);
    }
}