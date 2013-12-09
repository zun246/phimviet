<div class="row">  
</div>
<div class="row">
  <div class="col-md-8"> 
    <ol class="breadcrumb">
      <li><a href="#">Phim Lẻ</a></li>  
    </ol> 
    <?php $i = 0; ?>
    <?php foreach ($cacphim as $p) : ?>
    <?php if ($i%4 == 0): ?>
    <?php if ($i != 0): ?>
  </div>
<?php endif;  ?>
<div class="row">
<?php endif; ?>


<div class="col-xs-4 col-md-3">
  <p class="thumbnail"> 
    <a href="#" class="thumbnail"> <img src="/app/webroot/img/phim/1.jpg"></a>   
    <a href="#"><strong><?php echo $p['Phim']['ten']; ?></strong></a><br/> 
    <?php echo $p['Phim']['name']; ?><br/>
    
      <span class="label label-warning">HD</span>
      <span class="label label-default">CAM</span>
      <span class="label label-danger">16</span>
      <span class="year" title="Năm" style="float:right">
          2013
     
  </p>
</div>
<?php $i++; endforeach; ?>
</div>
<div class="col-md-10"><hr /></div>
<div class="col-md-2"><button type="button" class="btn btn-xs btn-warning">Xem Thêm | <strong>></strong></button></div>
</div>

<div class="col-md-4">
 <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Cac the loai</h3>
  </div>  		
  <div class="panel-body">
    <ul>
     <?php foreach ($cactheloai as $tl) : ?>
     <li><?php echo $tl['Theloai']['ten']; ?></li> 
   <?php endforeach;?>
 </ul>
</div>
</div>  	
<div class="panel panel-primary">
  <div class="panel-heading">
   <h3 class="panel-title">Quoc Gia</h3>
 </div>
 <div class="panel-body">
   <ul>
    <?php foreach ($quocgia as $qg) : ?>
    <li><?php echo $qg['Quocgia']['ten'];?></li>
  <?php endforeach; ?>
</ul>
</div>
</div>

</div>
<div class="col-md-8"> 
    <ol class="breadcrumb">
      <li><a href="#">Phim Bộ</a></li>  
    </ol> 
    <?php $i = 0; ?>
    <?php foreach ($cacphim as $p) : ?>
    <?php if ($i%4 == 0): ?>
    <?php if ($i != 0): ?>
  </div>
<?php endif;  ?>
<div class="row">
<?php endif; ?>


<div class="col-xs-4 col-md-3">
  <p class="thumbnail"> 
    <a href="#" class="thumbnail"> <img src="/app/webroot/img/phim/1.jpg"></a>   
    <a href="#"><strong><?php echo $p['Phim']['ten']; ?></strong></a><br/> 
    <?php echo $p['Phim']['name']; ?><br/>
    
      <span class="label label-warning">HD</span>
      <span class="label label-default">CAM</span>
      <span class="label label-danger">16</span>
      <span class="year" title="Năm" style="float:right">
          2013
     
  </p>
</div>
<?php $i++; endforeach; ?>
</div>
<div class="col-md-10"><hr /></div>
<div class="col-md-2">
  <div class="col-md-2"><button type="button" class="btn btn-xs btn-warning">Xem Thêm | <strong>></strong></button></div>
  </div>
</div>
</div>
