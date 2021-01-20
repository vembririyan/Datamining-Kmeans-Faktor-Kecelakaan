<div class="mt-2 p-2"></div>
<div class="p-2 rounded mt-5">
  <div style="overflow:scroll;">
<table class="table table-hover table-light" id="datagame">
  <thead>
    <tr bg-primary>
      <th scope="col">Accident ID</th>
      <th scope="col">Year of accident</th>
      <th scope="col">Month of accident</th>
      <th scope="col">Day of accident</th>
      <th scope="col">Time of accident(hour minute)</th>
      <th scope="col">Lighting</th>
      <th scope="col">Localization</th>
      <th scope="col">Type of intersection</th>
      <th scope="col">Atmospheric condition</th>
      <th scope="col">Type of collision</th>
      <th scope="col">Commune Number</th>
      <th scope="col">Postal Address</th>
      <th scope="col">GPS coding</th>
      <th scope="col">Latitude</th>
      <th scope="col">Longitude</th>
      <th scope="col">Department</th>
    </tr>
  </thead>
</table>
</div>
</div>
<script>
$(document).ready( function () {
    $('#datagame').DataTable({
      lengthMenu:['10','20','30','40','50','100'],
      processing:true,
      pageLength:10,
      ajax: {url:"http://localhost/uasdatamining/public/datakecelakaan",dataSrc:""},
      columns: [
    { data:'Num_Acc'},
    { data:'an' },
    { data:'mois' },
    { data:'jour'},
    { data:'hrmn' },
    { data:'lum'},
    { data:'agg'},
    { data:'int'},
    { data:'atm'},
    { data:'col'},
    { data:'com'},
    { data:'adr'},
    { data:'gps'},
    { data:'lat'},
    { data:'long'},
    { data:'dep'}
  ],
  });
});
</script>