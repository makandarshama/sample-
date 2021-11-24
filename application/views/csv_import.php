<!--<?php
//$this->load->controller('csv_import');
 // if( isset($_POST['import_csv']))
 //           {
 //            $this->Csv_import->index($_FILES['csv_file']['tmp_name'])
 //            //var_dump($_FILES['csv_file']);
          
 //            }
?>-->





<html>
<head>
    <title>How to Import CSV Data into Mysql using Codeigniter</title>  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
</head>
<body>
 <div class="container box">
  <h3 align="center">How to Import CSV Data into Mysql using Codeigniter</h3>
  
  <form method="POST" id="import_csv" action="" enctype="multipart/form-data">
   <div class="form-group">
    <label>Select CSV File</label>
    <input type="file" name="csv_file" id="csv_file"  value="<?php //echo ($id);?>" required accept=".xls,.xlsx,.csv" />
   </div>
   <br />
   <button type="submit" name="import_csv"  class="btn btn-info" id="import_csv_btn">Import CSV</button>
  </form>
  <br />
  <div id="imported_csv_data"></div>
 </div>
</body>
</html>
<!--
<script>
  function myfun(){
$(document).ready(function(){
url:"<?php //echo base_url(); ?>csv_import/import_csv";
 load_data();

 function load_data()
 {
  $.ajax({
   url:"<?php echo base_url(); ?>csv_import/display_data",
   method:"POST",
   success:function(data)
   {
    $('#imported_csv_data').html(data);
   }
  })
 }

 /*$('#import_csv').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"<?php //echo base_url(); ?>csv_import/import_csv",

   method:"POST",
   data:new FormData(this),
   contentType:false,
   cache:false,
   processData:false,
   beforeSend:function(){
    $('#import_csv_btn').html('Importing...');
    alert("unable to import");
   },
   success:function(data)
   {
    $('#import_csv')[0].reset();
    $('#import_csv_btn').attr('disabled', false);
    $('#import_csv_btn').html('Import Done');
    load_data();*/

    $(#'import_csv_btn').on('submit',function(event)){
      event.preventDefault();
      $.ajax({
        url:"<?php// echo base_url();?>csv_import/import_csv",method:"POST",
        data:new FormData(this),
        contentType:false,
        cache:false,
        processData:false,success:function(data){
          $('#csv_file').val('');
          load_data()
          alert(data);
   }
  })
 });
 
});
}
</script>
 
 

