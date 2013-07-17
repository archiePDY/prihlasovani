<?php

use Nette\Application\UI;

/**
 * Description of CommentsControl
 *
 * @author janikm
 */
class CommentsControl extends UI\Control
{
    private $service;
    
    private $articleId;
    
    private $isRated = null;
    
    public function setService(CommentsService $s){
        $this->service =$s;       
    }
    
    public function setArticleId($id){
        $this->articleId = $id;
        
    }
    public function beforeRender(){
        
    }



    public function render()
    {
        $this->template->setFile(__DIR__ . '/commentsControl.latte');
        $this->template->comments = $this->service->getComments($this->articleId);
        $this->template->isRated = $this->isRated;
        
        $this->template->render();
    }

    public function handleDelete($id)
    {
       $this->service->removeComment($id);  
       $this->presenter->flashMessage('Komentář smazán');
       if($this->presenter->isAjax()){
            $this->invalidateControl('comments');
            $this->invalidateControl('flash');
        }else{
            $this->redirect('this');
        }
    }
    
    public function handleUnlike()
    {
       $this->isRated ='';
       $this->presenter->flashMessage('U dont like it!');
       if($this->presenter->isAjax()){
            $this->invalidateControl('foo');
            $this->invalidateControl('flash');
        }else{
            $this->redirect('this');
        }

       
    }
    public function handleLike()
    {
       $this->isRated ='like';
       $this->presenter->flashMessage('U like it!');
       if($this->presenter->isAjax()){
            $this->invalidateControl('foo');
            $this->invalidateControl('flash');

        }else{
            $this->redirect('this');
        }
   
    }
   
    
   
    public function processChange(){
        if($this->presenter->isAjax()){
            $this->invalidateControl('foo');
        }else{
            $this->presenter->redirect('this');
        }
    }



    protected function createComponentAddCommentsForm()
    {

        $form = new UI\Form();
        $form->getElementPrototype()->class = 'ajax';
        $form->addText('name', 'Jméno');
        $form->addTextArea('text', 'text')
                ->setRequired();

        $form->addSubmit('send', 'Přidat komentář');
        $form->onSuccess[] = callback($this,'processForm');
        
        return $form;
    }
 
    
    public function processForm(UI\Form $form){
        
        $values = $form->values;
        $this->service->addComment($this->articleId, $values['name'],$values['text']);
        $this->presenter->flashMessage('Komentář vložen');
        
        
        
        if (!$this->presenter->isAjax()) {
        $this->redirect('this');
        } else {
        $form->setValues(array(), TRUE);
        $this->invalidateControl('form');
        $this->invalidateControl('comments');
        $this->invalidateControl('flash');
    }
       
      
         
        
         
        
        
    }
}

?>
