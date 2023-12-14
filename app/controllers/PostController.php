<?php

include APP_ROOT . '/app/services/PostService.php';


class PostController
{


    public function get(){

        global $connection;

        $stdService = new PostService($connection);
        $post = $stdService->get($_GET['id']);
        include APP_ROOT . '/app/views/home/post/view.php';
    }

    public function index(){
        global $connection;
        include APP_ROOT . '/app/services/UserService.php';
        include APP_ROOT . '/app/services/CategoryService.php';
        $postService = new PostService($connection);
        $userService = new UserService($connection);
        $categoryService = new CategoryService($connection);
        $posts = $postService->getAllPosts();
//        $post = $stdService->totalPost();
//        $user = $userService->totalUser();
//        $category = $categoryService->totalCategory();
        //Hiển thị ra view nào? -> view này là của admin  != view post của user -> deep
        include APP_ROOT . "/app/views/admin/post/post.php";
    }
}

?>