<?php //var_dump($prediksi);?>
<div class="p-2 rounded">
  <div style="overflow:scroll;">
<table class="table table-hover table-light" id="data0">
  <thead>
    <tr bg-primary>
      <th scope="col">Time of accident(hour minute)</th>
      <th scope="col">Lighting</th>
      <th scope="col">Type of intersection</th>
      <th scope="col">Atmospheric condition</th>
      <th scope="col">Type of collision</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($prediksi0 as $pr):?>
        <tr>
        <td><?=$pr[0];?></td>
        <td><?=$pr[1];?></td>
        <td><?=$pr[2];?></td>
        <td><?=$pr[3];?></td>
        <td><?=$pr[4];?></td>
        </tr>
    <?php endforeach;?>
  </tbody>
</table>
</div>
</div>
<script>
$(document).ready( function () {
    $('#data0').DataTable({
      lengthMenu:['10','20','30','40','50','100'],
      processing:true,
      pageLength:10,
  });
});
</script>
<div class="p-2 rounded">
  <div style="overflow:scroll;">
<table class="table table-hover table-light" id="data1">
  <thead>
    <tr bg-primary>
      <th scope="col">Time of accident(hour minute)</th>
      <th scope="col">Lighting</th>
      <th scope="col">Type of intersection</th>
      <th scope="col">Atmospheric condition</th>
      <th scope="col">Type of collision</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($prediksi1 as $pr):?>
        <tr>
        <td><?=$pr[0];?></td>
        <td><?=$pr[1];?></td>
        <td><?=$pr[2];?></td>
        <td><?=$pr[3];?></td>
        <td><?=$pr[4];?></td>
        </tr>
    <?php endforeach;?>
  </tbody>
</table>
</div>
</div>
<script>
$(document).ready( function () {
    $('#data1').DataTable({
      lengthMenu:['10','20','30','40','50','100'],
      processing:true,
      pageLength:10,
  });
});
</script>
<div class="p-2 rounded">
  <div style="overflow:scroll;">
<table class="table table-hover table-light" id="data2">
  <thead>
    <tr bg-primary>
      <th scope="col">Time of accident(hour minute)</th>
      <th scope="col">Lighting</th>
      <th scope="col">Type of intersection</th>
      <th scope="col">Atmospheric condition</th>
      <th scope="col">Type of collision</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($prediksi2 as $pr):?>
        <tr>
        <td><?=$pr[0];?></td>
        <td><?=$pr[1];?></td>
        <td><?=$pr[2];?></td>
        <td><?=$pr[3];?></td>
        <td><?=$pr[4];?></td>
        </tr>
    <?php endforeach;?>
  </tbody>
</table>
</div>
</div>
<script>
$(document).ready( function () {
    $('#data2').DataTable({
      lengthMenu:['10','20','30','40','50','100'],
      processing:true,
      pageLength:10,
  });
});
</script>
<div class="p-2 rounded">
  <div style="overflow:scroll;">
<table class="table table-hover table-light" id="data3">
  <thead>
    <tr bg-primary>
      <th scope="col">Time of accident(hour minute)</th>
      <th scope="col">Lighting</th>
      <th scope="col">Type of intersection</th>
      <th scope="col">Atmospheric condition</th>
      <th scope="col">Type of collision</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($prediksi3 as $pr):?>
        <tr>
        <td><?=$pr[0];?></td>
        <td><?=$pr[1];?></td>
        <td><?=$pr[2];?></td>
        <td><?=$pr[3];?></td>
        <td><?=$pr[4];?></td>
        </tr>
    <?php endforeach;?>
  </tbody>
</table>
</div>
</div>
<script>
$(document).ready( function () {
    $('#data3').DataTable({
      lengthMenu:['10','20','30','40','50','100'],
      processing:true,
      pageLength:10,
  });
});
</script>














<?php 

// var_dump($prediksi);
// // echo $prediksi[1][1];
// $i=0;
// $n=[];
// for ($y=0; $y <= 9999; $y++){ 
//     array_push($n,[$y]);
// }
// // foreach($prediksi as $p){

//     //echo $p;
//     //var_dump($p);
//     //foreach($p as $key => $val){
//     //var_dump($key);
//         $pre=array_replace_recursive($n,$prediksi);
//         var_dump($pre);
    // for ($x=0; $x < 10; $x++) { 
    //         $pre=$p[0][$x];
    //         echo $pre;
    //         var_dump($pre);
    //         for ($y=0; $y <= 20; $y++){ 
    //             $pred=$pre[$y];
    //             //echo $pred."</br>";
    //             // for ($z=0; $z <= 4; $z++){ 
    //             //     $predik=$pred[$z]."<br/>";
    //             //     //echo $predik;
    //             // }
    //         }
    //}
//}
    // echo $pr['inte'];
    // echo $pr['atm'];
    // echo $pr['col'];
?>