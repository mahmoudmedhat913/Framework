<?php
namespace NSME7;

class ClsCtrlPageAlxProject extends \NSFWK\page{
    protected function do_Home() {
        $this->Display('/modules/me7/view//template/page/home.tpl');
        return true;
    }

    protected function do_NewPage() {
        $this->Display('/modules/me7/view//template/page/new.page.tpl');
        return true;
    }
}