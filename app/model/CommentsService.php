<?php
use \Nette\Database\Connection,
    \Nette\DateTime;
     

/**
 * Description of CommentsService
 *
 * @author janikm
 */
class CommentsService extends Nette\Object
{
    private $db;
    
    public function __construct(\Nette\Database\Connection $db)
    {
        $this->db = $db;
    }
            

    public function addComment($id, $name, $text)
    {
        $this->db->table('komentare')->insert(array(
            'jmeno' => $name,
            'text' => $text,
            'clanek_id' => $id
        ));
    }
    public function getComments($id)
    {
        $comments = $this->db->table('komentare')->select('*')->where('clanek_id', $id);
        
        return $comments;
    }
    
    public function removeComment($id)
    {
        $this->db->table('komentare')->where('id',$id)->delete();      
    }
    
}

?>
