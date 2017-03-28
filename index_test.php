<html lang="en">
<?php include('./include/header.php'); ?>
<?php include('./include/navbar/navbar_main.php'); ?>
<link rel="stylesheet" type="text/css" href="jumbo_style.css">
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"> 

<script>

</script>
<style>
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro);

.select-box {
  cursor: pointer;
  position : relative;
  max-width:  20em;
  margin: 5em auto;
  width: 100%;
}

.select,
.label {
  color: #414141;
  display: block;
  font: 400 17px/2em 'Source Sans Pro', sans-serif;
}

.select {
  width: 100%;
  position: absolute;
  top: 0;
  padding: 5px 0;
  height: 40px;
  opacity: 0;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  background: none transparent;
  border: 0 none;
}
.select-box1 {
  background: #ececec;
}

.label {
  position: relative;
  padding: 5px 10px;
  cursor: pointer;
}
.open .label::after {
   content: "▲";
}
.label::after {
  content: "▼";
  font-size: 12px;
  position: absolute;
  right: 0;
  top: 0;
  padding: 5px 15px;
  border-left: 5px solid #fff;
}
</style>
  <body>
 
      
 
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-3">
     <form action="#">
 
  <div class="select-box">
    
    <label for="select-box1" class="label select-box1"><span class="label-desc">Search by subject</span> </label>
    <select id="select-box1" class="select">
      <option value="Choice 1">Falkland Islands</option>
      <option value="Choice 2">Germany</option>
      <option value="Choice 3">Neverland</option>
    </select>
    
  </div>
   
</form> 
    </div>
    
    <div class="col-lg-4 col-md-3">
     <form action="#">
  <div class="select-box">
   <label for="select-box1" class="label select-box1"><span class="label-desc">Search by subject</span> </label>
    <select id="select-box1" class="select">
      <option value="Choice 1">Falkland Islands</option>
      <option value="Choice 2">Germany</option>
      <option value="Choice 3">Neverland</option>
    </select>   
  </div>
   
</form> 
    </div>
    <div class="col-lg-4 col-md-3">
      <form action="#">
  <div class="select-box">
    
    <label for="select-box1" class="label select-box1"><span class="label-desc">Search by subject</span> </label>
    <select id="select-box1" class="select">
      <option value="Choice 1">Falkland Islands</option>
      <option value="Choice 2">Germany</option>
      <option value="Choice 3">Neverland</option>
    </select>
    
  </div>
   
</form> 
    </div>
  </div>

</div>
    <!-- Jambotron Mainbody 
        <div class="jumbotron">
       <h1 class="text-center">Creative digital <br>Projects</h1>
       <h2 class="text-center">The bright work done by Beds students</h2>
       <a href="#" class="btn btn-success btn-large">View all projects</a>
     </div>  /.jumbotron -->
 <div class="container main_wrapper">
        <!-- Body Contents Start-->

     <div class="row">
        <div class="col s12 m10">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Card Title</span>
                <div class="row">
    <div class="col-lg-4 col-md-3">
     <form action="#">
 
  <div class="select-box">
    
    <label for="select-box1" class="label select-box1"><span class="label-desc">Search by subject</span> </label>
    <select id="select-box1" class="select">
      <option value="Choice 1">Falkland Islands</option>
      <option value="Choice 2">Germany</option>
      <option value="Choice 3">Neverland</option>
    </select>
    
  </div>
   
</form> 
    </div>
    
    <div class="col-lg-4 col-md-3">
     <form action="#">
  <div class="select-box">
   <label for="select-box1" class="label select-box1"><span class="label-desc">Search by subject</span> </label>
    <select id="select-box1" class="select">
      <option value="Choice 1">Falkland Islands</option>
      <option value="Choice 2">Germany</option>
      <option value="Choice 3">Neverland</option>
    </select>   
  </div>
   
</form> 
    </div>
    <div class="col-lg-4 col-md-3">
      <form action="#">
  <div class="select-box">
    
    <label for="select-box1" class="label select-box1"><span class="label-desc">Search by subject</span> </label>
    <select id="select-box1" class="select">
      <option value="Choice 1">Falkland Islands</option>
      <option value="Choice 2">Germany</option>
      <option value="Choice 3">Neverland</option>
    </select>
    
  </div>
   
</form> 
    </div>
  </div>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
</div>


        <!-- Body Contents End -->
     </div> <!-- /.container main wrapper -->
       <?php include('./include/footer.php'); ?>
    
    <?php include('./include/foot.php'); ?>
  </body>
</html>