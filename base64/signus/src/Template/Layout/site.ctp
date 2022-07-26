<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Signus | Benvindos!</title>
    <?php
        echo $this->Html->css([
          '/css/foundation.css',
          '/css/style',
          '/css/foundation/foundation-icons.css'
        	]);
    ?>
</head>

<body>
<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-2195009-2', 'auto');
      ga('send', 'pageview');

      ga('create', 'UA-2195009-27', 'auto', {name: "foundation"});
      ga('foundation.send', 'pageview');

</script>


<header>
  <!-- Sub Navigation -->
  <div class="top-bar">
    <div class="top-bar-left">
      <ul class="menu">
        <li><a href="signus/category">GALERIA</a></li>
        <li><a href="/staticpages/about">SOBRE</a></li>
        <li><a href="/staticpages/contact">CONTATO</a></li>
        <li><a href="/pages">LOGIN</a></li>
      </ul>
    </div>
    <div class="top-bar-right">
      <ul class="menu">
        <li><input type="search" placeholder="Search"></li>
        <li><button type="button" class="button">Search</button></li>
      </ul>
    </div>
  </div>
  <!-- /Sub Navigation -->

  <!-- logo and ad break -->
  <br>
  
  <article class="grid-container">
    <div class="grid-x grid-margin-x">
      <div class="medium-4 cell">
      <p><a href="/"><?php echo $this->Html->image('/upload/logo-signus.png', ['alt'=>'logo']);?></a></p>
      </div>
      <div class="medium-8 cell">
      <p><?php echo $this->Html->image('/upload/banner.png', ['alt'=>'logo']);?></p>
      </div>
    </div>
  </article>
  <!-- / logo and ad break -->



</header>

<?= $this->fetch('content') ?>

<footer>
  <div class="grid-x grid-margin-x expanded callout secondary">

    <div class="large-4 cell">
      <h5>Web@Signus-sign-gallery</h5>
      <div class="grid-x small-up-4">
        <div class="cell"><img class="thumbnail" src="https://placehold.it/75" alt="image of space dog"></div>
        <div class="cell"><img class="thumbnail" src="https://placehold.it/75" alt="image of space dog"></div>
        <div class="cell"><img class="thumbnail" src="https://placehold.it/75" alt="image of space dog"></div>
        <div class="cell"><img class="thumbnail" src="https://placehold.it/75" alt="image of space dog"></div>
        <div class="cell"><img class="thumbnail" src="https://placehold.it/75" alt="image of space dog"></div>
        <div class="cell"><img class="thumbnail" src="https://placehold.it/75" alt="image of space dog"></div>
        <div class="cell"><img class="thumbnail" src="https://placehold.it/75" alt="image of space dog"></div>
        <div class="cell"><img class="thumbnail" src="https://placehold.it/75" alt="image of space dog"></div>
      </div>

    </div>

    <div class="large-4 cell">
      <h5>CATEGORIAS</h5>
      <span class="secondary label">Space</span>
      <span class="secondary label">Galaxies</span>
      <span class="secondary label">Milky Way</span>
      <span class="secondary label">Black Holes</span>
      <span class="secondary label">Rebels</span>
      <span class="secondary label">Death Star</span>
      <span class="secondary label">Republic</span>
      <span class="secondary label">R2D2</span>
    </div>

    <div class="large-4 cell">
      <h5>Signus Plataforma</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti quam voluptatum vel repellat ab similique molestias molestiae ea omnis eos, id asperiores est praesentium, voluptate officia nulla aspernatur sequi aliquam.</p>
    </div>

  </div>
  <div class="grid-x grid-margin-y expanded">

    <div class="medium-6 cell">
      <ul class="menu">
        <li><a href="#">Legal</a></li>
        <li><a href="#">Partner</a></li>
        <li><a href="#">Explore</a></li>
      </ul>
    </div>

    <div class="medium-6 cell">
      <ul class="menu align-right">
        <li class="menu-text">Copyright © 2019 Signus Plataforma</li>
      </ul>
    </div>
  </div>

</footer>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.js"></script>

<script>
      $(document).foundation();
</script>
</body>
</html>