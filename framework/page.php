<?php

namespace NSFWK;
use Smarty\Smarty;

abstract class page extends \NSFWK\base{
    protected $_smarty;
    public function do_Action () {
        $do_Action = "do_" . $this->_data['action'];
        $befor_Action = "befor_" . $this->_data['action'];
        $after_Action = "after_" . $this->_data['action'];
        if (!method_exists($this, $do_Action)) {
            // add 404 page
            $this->methode404();
            return false;
        }
        
        if (method_exists($this, $befor_Action)) {
            return $this->$befor_Action();
        }

        $this->$do_Action();

        if (method_exists($this, $after_Action)) {
            return $this->$after_Action();
        }
        return true;
    }

    public function Display($path){
        $smarty = new Smarty();

        $smarty->setTemplateDir(TEMP_PATH . '/smarty/templates');
        $smarty->setCompileDir(TEMP_PATH . '/smarty/templates_c');
        $smarty->setCacheDir(TEMP_PATH . '/smarty/cache');
        $smarty->setConfigDir(TEMP_PATH . '/smarty/configs');

        $smarty->assign("PATH", str_replace(PROJECT_PATH_IN_HARD, "", $GLOBALS['pathToModule']));
        $smarty->display(ROOT_PATH .  $path);
        $smarty->registerFilter('pre', [$this, 'SmartyPrefilterAngular']);
    }

    protected function methode404 () {
        var_dump('byyyyyyyyyyyy');
        return true;
    }

    /* public function InitSmarty($template, $config, $cache, $compile){
        $this->_smarty = new \Smarty\Smarty();
        $this->_smarty->setTemplateDir($template);
        $this->_smarty->setConfigDir($config) ;
        $this->_smarty->setCacheDir($cache);
        $this->_smarty->setCompileDir($compile);
        
        $this->_smarty->compile_check = true;
        $this->_smarty->force_compile = false;
        $this->_smarty->debugging = false;

        $this->_smarty->assign('_Session', $this->_session);
        $this->_smarty->assign('_Language', $this->_sessionLang);
        $this->_smarty->assign('_LanguageFile', "lang.{$this->_sessionLang}.conf");
        $this->_smarty->assign('_LanguageSection', $this->_section);
        $this->_smarty->assign('_Direction', $this->_sessionLangDirection);
        $this->_smarty->assign('_ClientSideLanguage', PATH__LANG . "/lang.{$this->_sessionLang}.js");
        $this->_smarty->assign('_RootPath', WEB__ROOT__PATH);

        $this->_smarty->registerPlugin('modifier', 'date', 'date');
        $this->_smarty->registerPlugin('modifier', 'abs', 'abs');
        $this->_smarty->registerPlugin('modifier', 'array_intersect', 'array_intersect');
        
        if (RUN_MODE=='PRODUCTION'){
            $this->_smarty->registerFilter('output', [new  \Smarty\Filter\Output\TrimWhitespace(), 'filter']);
        }
        $this->_smarty->registerFilter('pre', [$this, 'SmartyPrefilterAngular']);
    } */

    public function SmartyPrefilterAngular($source){
        // Unify Line-Breaks to \n
        //$source = preg_replace("/\015\012|\015|\012/", "\n", $source);
        $source = preg_replace('/{{/','{literal}{{',$source);
        $source = preg_replace('/}}/','}}{/literal}',$source);
        return $source;
    }
}
