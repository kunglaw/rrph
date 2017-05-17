<div class="entry-content">
  <!--list styles-->
  
  <ul class="list-group">
    <?php foreach($list_penyakit as $row){ ?>
      
      <li class="list-group-item">
      		
            <h3> <a href="<?=base_url("penyakit/detail/$row[id_penyakit]")?>"> <?=$row["penyakit"]?> </a></h3>
            
            <hr>
            <span><?=$row["penyebab"]?></span>
      </li>
    <?php } ?>
  </ul>
  
  
</div>