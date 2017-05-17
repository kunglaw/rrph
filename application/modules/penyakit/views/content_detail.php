<div class="entry-content">
  <!--list styles-->
  <div class="panel">
  	<div class="panel-body"> 
      <h4> Organ </h4>
      <?=$organ["organ"]?>
      
      <hr>
      
      <h4> Gejala </h4>
      <?=$penyakit["gejala"]?>
      
      <hr>
      
      <h4> Penyebab </h4>
      <?=$penyakit["penyebab"]?>
      
      <hr>
      
      <h4> Diagnosa </h4>
     
      <?php
	  	if(!empty($diagnosa_penyakit))
		{
			echo "<ul>";
			foreach($diagnosa_penyakit as $row)
			{	
				$diagnosa = $this->diagnosa_model->detail_diagnosa($row["id_diagnosa"]);
				
				echo "<li> $diagnosa[anatomi] > $diagnosa[sub_anatomi] : $row[tanda_tubuh]</li>";
			}
			echo "</ul>";
		}
	  ?>
      
      <hr>
      
      <h4> Product </h4>
      <?php
          
          if(!empty($penyakit_pd))
          {
              echo "<ul>";
              foreach($penyakit_pd as $row)
              {
                  //$dt_penyakit = $this->penyakit_model->detail_penyakit($row["id_penyakit"]);
                  $dt_product = $this->product_model->detail_product($row["id_product"]);
                  
                  echo "<li><a href='".base_url("product/detail/$dt_product[id_product]")."'> $dt_product[product] </a> </li>";
              }
              echo "</ul>";
          }
      
      ?>
      
      <hr>
      
      <h4> Perawatan </h4>
      <?php
	  	 
      	  if(!empty($perawatan))
		  {
			  echo "<ul>";
			  foreach($perawatan as $row)
			  {	
			  	  $dt_perawatan = $this->perawatan_model->detail_perawatan($row["id_perawatan"]);
			  		echo "<li> $dt_perawatan[perawatan] </li>";
			  }
			  echo "</ul>";
		  }
      ?>
      <hr>
    </div>
  </div>
    
  
</div>