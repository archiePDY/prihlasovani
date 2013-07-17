<?php
use Nette\Application\UI;

class BoxControl extends UI\Control
{
    public function render(){
        
        $this->template->setFile(__DIR__ . '/BoxControl.latte');
       
        $this->template->render();
    }
}

?>
