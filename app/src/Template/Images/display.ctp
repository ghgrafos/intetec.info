<div id="gallery">
    <?php foreach ($images as $image):?>
        <img alt="<?php echo $image->title;?>" src="/upload/thumb/<?php echo $image->url;?>"
        data-image="/upload/<?php echo $image->url;?>" data-tag=""
        data-description="<?php echo $image->description;?>" data-category="<?php echo $this->Galery->categoryToCss($image->categories);?>">
    <?php endforeach; ?>
</div>