<?php

use Nette\Diagnostics\Debugger,
    Nette\Database\Connection;



Debugger::enable(); // aktivujeme Laděnku




/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{

    private $foo ='any value';
    private $test;
    

    protected function startup()
    {
        parent::startup();

    }
    
    public function actionDefault(){
     
        //Nette\Diagnostics\Debugger::dump($this->db);
        
    }
    protected function beforeRender()
    {
        
        if($this->isAjax()){
            $this->invalidateControl('flash');
        }
    }
    public function renderDefault()
    {
        
    }
    public function renderAjax()
    {
       $this->template->foo = $this->foo;
        
    }
    public function renderSession()
    {
       $session = $this->getSession('sesny');
       $this->template->session = $session->data;
       $this->template->test = $session->test;
        
    }
    public function handleChangeFoo(){
        $this->foo = 'pokus';
        if($this->isAjax()){
            $this->invalidateControl();
        }else{
            $this->redirect('this'); 
        }
    }
    public function handleSessionPrvni(){
        $session = $this->session->getSection('sesny')->setExpiration(1800);
        $session->data ='prvni';
        $this->test = 'test-prvni';
        $this->presenter->redirect('this');
    }
    public function handleSessionDruhy(){
        $session = $this->session->getSection('sesny')->setExpiration(1800);
        $session->data ='druhy';
        $this->test = 'test-druhy';
        $this->presenter->redirect('this');
    }
    public function handleReset()
    {
       $this->flashMessage('All ratings were throw away');
        if($this->isAjax()){
            $this->invalidateControl();
        }else{
            $this->redirect('this'); 
        }
   
    }
    protected function createComponentNode()
    {
        $control = new BoxControl();
        $control->addComponent(new BoxControl, 'a');
        $control->addComponent(new BoxControl, 'b');
        $control->addComponent(new BoxControl, 'c');

        $a = $control->getComponent('a');
        $a->addComponent(new BoxControl, 'x');
        $a->addComponent(new BoxControl, 'y');
        return $control;
    }



    protected function createComponentMenuArticles()
    {
        $control = new MenuArticles();

        return $control;
    }
    
    public function createComponentCertifikaty()
    {
        $control = new Certifikaty();
        

        return $control;
    }

}
