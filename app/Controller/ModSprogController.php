<?php

class ModSprogController extends AppController  {
    
    public function index() {
        $this->set('content_for_layout', $this->paginate());
    }
}