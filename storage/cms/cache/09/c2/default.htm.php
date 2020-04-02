<?php 
class Cms5e856175241ca681346715_d773ab964038aad908647281bf62b393Class extends Cms\Classes\LayoutCode
{
public function onLogout()
{
   

    $this->session->onLogout();

    return Redirect::to("/");
}     
}
