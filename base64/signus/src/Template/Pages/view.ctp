<div class="container">
    <div class="templatemo-slogan text-center">
        <span class="txt_darkgrey"><?php echo $page->title;?></span>
    </div>	
    <div>
    	<small>Pertence a categoria: <?php echo $page->category->title;?></small>
    	<hr>
    </div>
    <div>
    	<?php echo $page->body;?>
    </div>
</div>