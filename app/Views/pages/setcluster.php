<div class="mt-2 p-2"></div>
<div class="mx-auto bg-dark w-25 mt-2 mt-5">
    <form action="/uasdatamining/public/setcluster" method="GET">
<label for="jumlahcluster " class="text-light text-center w-100 m-auto p-2"><h5><b>Set Jumlah Cluster</b></h5></label>
<input type="text" name="jumlahcluster" placeholder="Set Jumlah Cluster" value="<?php if($jumlahdata!=NULL){echo $jumlahdata;}?>" class="form-control form-control-md ">
</div>
<div class="w-100">
<button class="btn btn-sm btn-dark mx-auto text-center d-block mt-2">Mulai Clustering</button>
</div>
</form>
<?php if($dcluster0!=NULL):?>
    <?php $x=1;for ($i=0; $i < $jumlahdata ; $i++):?>
    <div class="p-2 rounded mt-2">
    <div style="overflow:scroll;">
    <h2 class="text-primary">KMeans Clustering <?=$x;?></h2>
    <table class="table table-hover table-light" id="<?="data".$i;?>">
    <thead>
      <tr bg-primary>
                       <th scope="col">Time of accident(hour minute)</th>
                       <th scope="col">Lighting</th>
                       <th scope="col">Type of intersection</th>
                      <th scope="col">Atmospheric condition</th>
                      <th scope="col">Type of collision</th>
                       <th scope="col">Localization</th>
                        </tr>
                    </thead>
    <tbody>
    <?php foreach(${'dcluster'.$i} as $pr):?>
    <tr>
        <td><?=$pr[0];?></td>
        <td><?=$pr[1];?></td>
        <td><?=$pr[2];?></td>
        <td><?=$pr[3];?></td>
        <td><?=$pr[4];?></td>
        <td><?=$pr[5];?></td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
</div>
</div>
<script>
$(document).ready( function () {
    $('#data'+<?=$i;?>).DataTable({
      lengthMenu:['10','20','30','40','50','100'],
      processing:true,
      pageLength:10,
  });
});
</script>
<?php $x++;endfor;?>
<?php endif;?>