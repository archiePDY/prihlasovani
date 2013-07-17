<?php

use Nette\Database\Connection,
    Nette\Database\Table\Selection;


/**
 * Třída, která reprezentuje tabulku se seznamy úkolů.
 */
class ArticleModel extends Nette\Object
{

    private $db;



    public function __construct(\Nette\Database\Connection $db)
    {
        
        $this->db = $db;
        dump($this->db);die();
    }



    public function getArticles()
    {
        $article = $this->db->table('clanky')->select('*');

        return $article;
    }



    public function getArticle($id)
    {
        $article = $this->db->table('clanky')->select('*')->where('id', $id)->fetch();

        return $article;
    }



}