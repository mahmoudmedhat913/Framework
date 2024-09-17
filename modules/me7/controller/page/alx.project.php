<?php
namespace NSME7;

class ClsCtrlPageAlxProject extends \NSFWK\page{
    // here you can add any page you want
    // i enabled the auto save
    protected function do_Home() {// the system is incomplete use this way for now what way
        $this->Display('/modules/me7/view//template/page/home.tpl'); // the framework is still under mentain😂 so you need to use the old way
        return true;
    }

    protected function do_NewPage() {// seperate the name of the file by dots so NewPage -> new.page.tpl or new.page.js or new.page.php the system read the file dynamicly like this way
        $this->Display('/modules/me7/view//template/page/new.page.tpl');
        return true;
    }
}