
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
    <title><?=$judul;?></title>
</head>

<body>
    <nav class="navigation max-width-1 m-auto">
        <div class="nav-left">
            <a href="index.html">
                <span><img src="img/logo.png" width="94px" alt="loading..."></span>
            </a>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/kontak">Contact</a></li>
            </ul>
        </div>
        <div class="nav-right">
            <form action="search.html" method="get">
                <input class="form-input" type="text" name="query" placeholder="Article Search">
                <button class="btn">Search</button>
            </form>

        </div>

    </nav>

    <div class="max-width-1 m-auto">
        <hr>
    </div>
   

  <!-- ini adalah cara render halamaan codeigniter   -->
  <?= $this->renderSection('isi') ?>




    <div class="max-width-1 m-auto">
        <hr>
    </div>
    

    <div class="footer">
        <p>Copyright &copy; iBlog.com | All Rights Reserved </p>
    </div>
</body>

</html>