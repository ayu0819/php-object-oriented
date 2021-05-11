<?php
    trait PageTrait {
     public function getProduct() {
      echo 'PageTraitです';
     }
    }

   trait PageInfo {
    public function getNews() {
     echo 'PageInfoです';
    }
   }

   class Page {
    use PageTrait;
    use PageInfo;

    public function getInfo() {
     echo '子クラスです';
    }
  
    public function getChild() {
     echo '子クラスのニュースです';
    }
   }

    $instance = new Page();

    $instance->getInfo();
    echo '<br>';
    $instance->getProduct();
    echo '<br>';
    $instance->getChild();

   ?>