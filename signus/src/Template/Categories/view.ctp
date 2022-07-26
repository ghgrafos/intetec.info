<div class="container">
    <div class="templatemo-slogan text-center">
        <span class="txt_darkgrey"><?php echo $categoria->titulo;?></span>
    </div>
    <div>
    	<small>Foram encontrados um total de <?php echo count($categoria->paginas);?> artigos</small>
    	<hr>
    </div>
    <div>
    	<?php foreach($categorie->pages as $v) : ?>
            <div>
                <h4><?php echo $v->title;?></h4>
                <p><?php
                    $body = strip_tags($v->conteudo);
                    echo mb_substr($body, 0, 300);
                ?></p>
                <p><?php echo $this->Html->link('Saiba mais', '/'.$v->url, ['class'=>'btn btn-green']);?></p>
                <hr>
            </div>
        <?php endforeach; ?>
    </div>
</div>