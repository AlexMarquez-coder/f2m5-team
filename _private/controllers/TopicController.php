<?php

namespace Website\Controllers;


class TopicController {

    public function index(){

        $topics = getAllTopics();

        $template_engine = get_template_engine();
		echo $template_engine->render('topics/index', ['topics' => $topics]);
    }

    public function new(){

        $template_engine = get_template_engine();
		echo $template_engine->render('topics/new');
    }
    public function save(){
        
        $result = validateBlogData($_POST);
    }
}