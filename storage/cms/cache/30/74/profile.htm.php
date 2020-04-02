<?php 
class Cms5e863ca96f556195263978_dace407594a7fdef76ac734d4fbf4ce5Class extends Cms\Classes\LayoutCode
{
public function onLogout()
    {
       

        $this->session->onLogout();

        return Redirect::to("/");
    }     
}
