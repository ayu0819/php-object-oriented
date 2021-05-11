<?php
 abstract class PageAbstract {
     public function parentPage(){
         echo '親クラスです。';
     }

     abstract public function getPage();
     
 }

 class Page extends PageAbstract { 

 private $page = [];

 function __construct($page){ 
     $this->page = $page;
 }
 
 public function getpage(){
     echo $this->page;
 }
 }

 $instance = new Page('テスト');

 $instance->parentPage();
 echo '<br>';

 $instance->getPage();
 echo '<br>';

?>