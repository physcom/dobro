<?php 
class Cms5e862253265ba153597596_7a6a2f4613100268fc1c520ac4d504d1Class extends Cms\Classes\LayoutCode
{
public function onLogout()
    {
       

        $this->session->onLogout();

        return Redirect::to("/");
    }     
}
