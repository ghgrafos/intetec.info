<style>
  /*icon styles*/
  .fi-social-facebook {
    color: dodgerblue;
    font-size: 2rem;
  }
  .fi-social-youtube {
    color: red;
    font-size: 2rem;
  }
  .fi-social-pinterest {
    color: darkred;
    font-size: 2rem;
  }
  i.fi-social-instagram {
    color: brown;
    font-size: 2rem;
  }
  i.fi-social-tumblr {
    color: navy;
    font-size: 2rem;
  }
  .fi-social-twitter {
    color: skyblue;
    font-size: 2rem;
  }

</style>
<br>
<article class="grid-container">
  <div class="grid-x grid-margin-x">
    <div class="medium-8 cell">
      <p><?php echo $this->Html->image('/upload/image1.png', ['alt'=>'logo']);?></p>
    </div>
    <div class="medium-4 cell">
      <p><?php echo $this->Html->image('/upload/image2.png', ['alt'=>'logo']);?></p>
      <p><?php echo $this->Html->image('/upload/image3.png', ['alt'=>'logo']);?></p>
    </div>
  </div>


<hr>

<div class="text-center">
  <h4 style="margin: 0;" class="text-center">ÚLTIMAS NOTÍCIAS</h4>
</div>

<hr>
<article class="grid-container">
  <div class="grid-x grid-margin-x small-up-3 medium-up-4 large-up-5">

    <div class="cell">
    <?php echo $this->Html->image('/upload/image4.png', ['alt'=>'logo']);?>
    </div>

    <div class="cell">
    <?php echo $this->Html->image('/upload/image5.png', ['alt'=>'logo']);?>
    </div>

    <div class="cell">
    <?php echo $this->Html->image('/upload/image6.png', ['alt'=>'logo']);?>
    </div>

    <div class="cell show-for-medium">
    <?php echo $this->Html->image('/upload/image7.png', ['alt'=>'logo']);?>
    </div>

    <div class="cell show-for-large">
    <?php echo $this->Html->image('/upload/image8.png', ['alt'=>'logo']);?>
    </div>

  </div>


<?php echo "urlsBuilder";?>


</article>
<hr>

<div class="text-center">
  <h4 style="margin: 0;" class="text-center">STORIES</h4>
</div>

<hr>

<div class="grid-x grid-margin-x">
  <div class="large-8 cell" style="border-right: 1px solid #E3E5E8;">


    <div class="grid-x grid-margin-x">
      <div class="large-6 cell">
        <p><img src="https://picsum.photos/600/370" alt="image for article" alt="article preview image"></p>
      </div>
      <div class="large-6 cell">
        <h5><a href="#">'Death Star' Vaporizes Its Own Planet</a></h5>
        <p>
          <span><i class="fi-torso"> By Thadeus &nbsp;&nbsp;</i></span>
          <span><i class="fi-calendar"> 11/23/16 &nbsp;&nbsp;</i></span>
          <span><i class="fi-comments"> 6 comments</i></span>
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae impedit beatae, ipsum delectus aperiam nesciunt magni facilis ullam.</p>
      </div>
    </div>

    <hr>

    <div class="grid-x grid-margin-x">
      <div class="large-6 cell">
        <p><img src="https://picsum.photos/600/370" alt="image for article" alt="article preview image"></p>
      </div>
      <div class="large-6 cell">
        <h5><a href="#">NASA's SLS Rocket Sheds Saturn V Color Scheme in Design Review</a></h5>
        <p>
          <span><i class="fi-torso"> By Thadeus &nbsp;&nbsp;</i></span>
          <span><i class="fi-calendar"> 11/23/16 &nbsp;&nbsp;</i></span>
          <span><i class="fi-comments"> 6 comments</i></span>
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae impedit beatae, ipsum delectus aperiam nesciunt magni facilis ullam.</p>
      </div>
    </div>

    <hr>

    <div class="grid-x grid-margin-x">
      <div class="large-6 cell">
        <p><img src="https://picsum.photos/600/370" alt="image for article" alt="article preview image"></p>
      </div>
      <div class="large-6 cell">
        <h5><a href="#">Ingredients for Life Were Always Present on Earth, Comet Suggests</a></h5>
        <p>
          <span><i class="fi-torso"> By Thadeus &nbsp;&nbsp;</i></span>
          <span><i class="fi-calendar"> 11/23/16 &nbsp;&nbsp;</i></span>
          <span><i class="fi-comments"> 6 comments</i></span>
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae impedit beatae, ipsum delectus aperiam nesciunt magni facilis ullam.</p>
      </div>
    </div>

    <hr>

    <ul class="pagination margin-bottom-2" role="navigation" aria-label="Pagination">
      <li class="disabled">Previous <span class="show-for-sr">page</span></li>
      <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
      <li><a href="#" aria-label="Page 2">2</a></li>
      <li><a href="#" aria-label="Page 3">3</a></li>
      <li><a href="#" aria-label="Page 4">4</a></li>
      <li><a href="#" aria-label="Next page">Next <span class="show-for-sr">page</span></a></li>
    </ul>

  </div>
  <div class="grid-x large-4 cell">

    <aside>

      <div class="grid-x small-up-3">

        <div class="cell text-center">
          <i class="fi-social-facebook"></i>
          <h6>56,009</h6>
          <p><small>FOLLOWERS</small></p>
          <br>
        </div>

        <div class="cell text-center">
          <i class="fi-social-twitter"></i>
          <h6>76,905</h6>
          <p><small>FOLLOWERS</small></p>
          <br>
        </div>

        <div class="cell text-center">
          <i class="fi-social-instagram"></i>
          <h6>34,099</h6>
          <p><small>FOLLOWERS</small></p>
          <br>
        </div>

        <div class="cell text-center">
          <i class="fi-social-tumblr"></i>
          <h6>13,765</h6>
          <p><small>FOLLOWERS</small></p>
        </div>

        <div class="cell text-center">
          <i class="fi-social-pinterest"></i>
          <h6>9,283</h6>
          <p><small>FOLLOWERS</small></p>
        </div>

        <div class="cell text-center">
          <i class="fi-social-youtube"></i>
          <h6>99,000</h6>
          <p><small>FOLLOWERS</small></p>
        </div>

      </div>

      <br>

      <div class="grid-x cell">
        <p class="lead">FROM OUR FRIENDS</p>
        <p><img src="https://picsum.photos/400/300" alt="advertisement of ShamWow"></p>
      </div>

      <br>

      <div class="grid-x cell">
        <p class="lead">TRENDING POSTS</p>

        <div class="media-object">
          <div class="media-object-section">
            <img class="thumbnail" src= "https://placehold.it/100">
          </div>
          <div class="media-object-section">
            <h5>All I need is a space suit and I'm ready to go.</h5>
          </div>
        </div>

        <div class="media-object">
          <div class="media-object-section">
            <img class="thumbnail" src= "https://placehold.it/100">
          </div>
          <div class="media-object-section">
            <h5>Are the stars out tonight? I don't know if it's cloudy or bright.</h5>
          </div>
        </div>

        <div class="media-object">
          <div class="media-object-section">
            <img class="thumbnail" src= "https://placehold.it/100">
          </div>
          <div class="media-object-section">
            <h5>And the world keeps spinning.</h5>
          </div>
        </div>

        <div class="media-object">
          <div class="media-object-section">
            <img class="thumbnail" src= "https://placehold.it/100">
          </div>
          <div class="media-object-section">
            <h5>Cold hearted orb that rules the night.</h5>
          </div>
        </div>

      </div>

    </aside>

  </div>
</div>
</article>