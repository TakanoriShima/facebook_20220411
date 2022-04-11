<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <!-- ViewPort Setting -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- Original CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Favicon -->
        <link rel="icon" href="images/favicon.ico">
        <title>Topページ</title>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- Original JavaScript -->
        <script src="js/script.js"></script>
    </head>
    <body style="background: url(images/gray.jpg);">
        <?php include_once 'views/_navbar_view.php'; ?>
        <div class="container p-2">
            <div class="row mt-3 mb-3">
                <h1 class="col-sm-12 text-center text-primary"><?= $login_user->name ?>さんのMyPage</h1>
            </div>
            <div class="row mt-3 mb-3">
                <h2 class="col-sm-12 text-center text-success">投稿一覧</h2>
            </div>
            <?php include_once 'views/_flush_view.php'; ?>
            <div class="row mt-2">
                <?php if(count($posts) !== 0) : ?>
                <table class="table table-bordered table-striped">
                    <tr class="text-center">
                        <th>投稿番号</th>
                        <th>タイトル</th>
                        <th>内容</th>
                        <th>画像</th>
                        <th>投稿日時</th>
                    </tr>
                    <?php foreach($posts as $post): ?>
                    <tr class="text-center">
                        <td><a href="posts_show.php?id=<?= $post->id ?>"><?= $post->id ?></a></td>
                        <td><?= $post->title ?></td>
                        <td><?= $post->content ?></td>
                        <td><img src="uploads/posts/<?= $post->image ?>" alt="<?= $post->image ?>" class="post_img"></td>
                        <td><?= $post->created_at ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <?php else: ?>
                <h2 class="col-sm-12 text-center text-danger">投稿はまだありません</h2>
                <?php endif; ?>
            </div>
            
        </div>
    </body>
</html>