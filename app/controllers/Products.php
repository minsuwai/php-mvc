<?php

class Products extends Controller{
    public function index($a='', $b=''){
        $this->view('products/products');
    }
}

