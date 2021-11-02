<?php

namespace Website\Controllers;


class BlogController {

	public function index() {
        
        $blogPosts = getAllBlogPosts();

		$template_engine = get_template_engine();
		return $template_engine->render('blog',['blog' => $blogPosts]);

	}

    public function showBlog($slug){

        $blogPost = getBlogPost($slug);
        $template_engine = get_template_engine();
        return $template_engine->render('blog_post',['blog_post' => $blogPost]);
    }
}