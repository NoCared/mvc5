<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Framework POO</title>
    <link rel="stylesheet" type="text/css" href="<?= $view->asset('css/style.css'); ?>">
  </head>
  <body>


    <header>
      <nav>
          <ul>
              <li><a href="<?= $view->path('home'); ?>">Home</a></li>
              <li><a href="<?= $view->path('contact'); ?>">Contact</a></li>
              <li><a href="<?= $view->path('articles'); ?>">Articles</a></li>
              <li><a href="<?= $view->path('article-add'); ?>">Ajout article</a></li>
              <li><a href="<?= $view->path('article-dashboard'); ?>">DashBoard articles</a></li>
              <li><a href="<?= $view->path('users'); ?>">Users</a></li>
              <li><a href="<?= $view->path('user-add'); ?>">Ajout user</a></li>
              <li><a href="<?= $view->path('user-dashboard'); ?>">DashBoard users</a></li>
          </ul>
      </nav>
    </header>

    <div class="container">
        <?= $content; ?>
    </div>

    <footer>

    </footer>

    <script src="<?= $view->asset('js/main.js'); ?>"></script>
  </body>
</html>
