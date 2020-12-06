<?php
use UK\UK_Controller;

class HomDatae extends UK_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function pageLoad(){
        $this->load($this->views_file->templates->header,[]);
        $this->load($this->views_file->templates->home,[]);
        $this->load($this->views_file->templates->footer,[]);
    }
}
