<?php 
include('crud.php');

$crud = new crud();

$events = $crud->events();


?>
<style type="text/css">
  .panel-body{
    color: black;
  }

  a:hover { 
    color: black;
  }
  a:active { 
    color: black;
}
</style>


<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

<?php for($i=0; $i<10; $i++){ ?>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne" style="text-align:center;">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#<?= $events[$i]['name'];?>" aria-expanded="false" aria-controls="collapseTwo">
          <?= $events[$i]['title']; ?>
        </a>
      </h4>
    </div>
    <div id="<?= $events[$i]['name']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <?= $events[$i]['details']; ?>
      </div>
    </div>
  </div>

  <?php } ?>



</div>