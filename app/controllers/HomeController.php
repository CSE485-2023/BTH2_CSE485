<?php


class HomeController
{
    public function index(){
        global $connection;
        include APP_ROOT."/app/services/PostService.php";
        include APP_ROOT . '/app/services/UserService.php';
        include APP_ROOT . '/app/services/CategoryService.php';
        $postService = new PostService($connection);
        $posts = $postService->getAllPosts();
        $userService = new UserService($connection);
        $categoryService = new CategoryService($connection);
        //Hiển thị ra view nào
        include APP_ROOT . "/app/views/home/post/index.php";
    }
}