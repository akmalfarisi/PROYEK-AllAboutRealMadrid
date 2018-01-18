<!--/start-banner-->
<div class="banner two">
    <div class="container">
        <h2 class="inner-tittle">Squad</h2>
    </div>
</div>
<!--//end-banner-->

<br>
  <div class="container">
      <br><br>
                                                                                        
        <div class="table-responsive">          
          <table class="table table-bordered">
            <thead>
              <tr>
                
                <th>Nama Pemain</th>
                <th>Posisi</th>
                <th>Negara Asal</th>
                
            </tr>
             </thead>
            <tbody>
              <tr> <?php foreach($sql->result() as $obj1): ?> </tr>
                <td><?php echo $obj1->nama; ?></td>
                <td><?php echo $obj1->posisi; ?></td>
                <td><?php echo $obj1->kewarganegaraan; ?></td>
                
                <?php endforeach; ?>
                
              </tbody>
            </table>
          </div>
        </div>
</div>