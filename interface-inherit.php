<?php
 interface pageInterface {
   public function getpage();
 }

 interface NewsInterface {
    public function getNews();
  }

 class Page implements pageInterface,NewsInterface {

 private $page = [];

 function __construct($page){ 
     $this->page = $page;
 }

 public function getpage(){
    echo 'prodyctです。';
 }

  public function getNews(){
    echo 'ニュースです。';
}
 }

 $instance = new Page('テスト');

 $instance->getpage();
 echo '<br>';

 $instance->getNews();
 echo '<br>';
?>