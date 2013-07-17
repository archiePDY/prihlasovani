<?php

use Nette\Application\UI,
    Nette\Application\UI\Multiplier;


/**
 * Description of ComponentsPresenter
 *
 * @author janikm
 */
class ArticlesPresenter extends BasePresenter
{

    /**
     * (non-phpDoc)
     *
     * @see Nette\Application\Presenter#startup()
     */
    private $clanky;



    protected function startup()
    {
        parent::startup();
    }



    public function actionDefault()
    {
        /* @var $articleModel ArticleModel */
        //   $this->clanky = $this->context->articleModel->getArticles();
        $this->clanky = $this->context->createArticleModel()->getArticles();
        $this->template->clanky = $this->clanky;
    }



    public function actionArticle($id = 0)
    {
        // $this->clanky = $this->context->articleModel->getArticles();
        $this->clanky = $this->context->createArticleModel()->getArticle($id);

        $this->template->clanky = $this->clanky;
    }



    protected function createComponentComments()
    {
        $control = new CommentsControl();
        $control->setArticleId($this->clanky->id);
        $control->setService($this->context->createCommentsService());


        return $control;
    }



    protected function createComponentMagic()
    {
        $service = $this->context->createCommentsService();
        $control = new UI\Multiplier(function($name) use($service) {
                            $control = new CommentsControl();
                            $control->setArticleId('1');
                            $control->setService($service);
                        });

        return $control;
    }



    protected function createComponentShopForm()
    {
        $service = $this->context->createCommentsService();

        return new Multiplier(function ($name) use($service) {
                            $control = new Nette\Application\UI\Form;
                            $control = new CommentsControl();
                            $control->setArticleId($name);
                            $control->setService($service);
                            return $control;
                        });
    }

}