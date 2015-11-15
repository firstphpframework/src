<?php

class index_controller{
    public function index()
    {
        echo 'hellow world!';
    
    }
    public function my()
    {
        //echo 'hellow my world!';
        loadclass('my');
        loadclass('my');
        loadclass('my');
        $my = new my();
        echo 'my class:'.$my->getname().'<br>';

        loadfunction('my');
        loadfunction('my');
        loadfunction('my');
        echo 'myfunc:',myfunc(time());
    }
}
