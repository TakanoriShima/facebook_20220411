<?php
    //(C)
    require_once 'filters/login_filter.php';
    // require_once 'models/Post.php';
    // $posts = array();
    // $posts = Post::all();
    // ログインしている自分の投稿だけを取得
    $posts = $login_user->posts();
    // var_dump($posts);
    $flush = $_SESSION['flush'];
    $_SESSION['flush'] = null;
  
    include_once 'views/mypage_view.php';