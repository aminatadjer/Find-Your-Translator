<?php

require_once ('GeneralComponents.php');
require_once ('Blog.php');
class routeurBlog
{
    public function affich(){
        $g=new GeneralComponents();
        $c=new blog();
        $title=$c->title;
        $content=$c;
        $g->affich($content,$title);

    }
}
$page=new routeurBlog();
$page->affich();