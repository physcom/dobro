<?php 
class Cms5e88d7fd9af85725839655_e903dcf8baec4dc3aa71837352508bcdClass extends Cms\Classes\LayoutCode
{
public function onLogout()
    {
       

        $this->session->onLogout();

        return Redirect::to("/");
    }     
}
