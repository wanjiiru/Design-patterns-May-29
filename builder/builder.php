
<?php
class BookBuilder
{
    private $title;
    private $author;
    private $content;
    public function __construct($title, $author, $content)
    {
        $this->title;
        $this->author;
        $this->content;
    }
    public function getTitle():BookBuilder
    {
        return $this->title;
    }
    public function getAuthor():BookBuilder
    {
        return $this->author;
    }
    public function getContent():BookBuilder
    {
        return $this->content;
    }


 ?>
