<?= $this->root()->select('SECTION')->each( function() { ?>
   <a class="item" href="<?= $this->path() ?>"><?= $this->Title ?></a>
<?php }) ?>
