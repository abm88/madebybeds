<html>
<head>
    <title>Agency Athentication</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css"> 
   <style>

        .jumbotron {
                background-color: aliceblue;
 
        }
    </style>
    <?php 
    include('db.php');
    if($db_found){
        if(isset($_POST['agency_approve'])){
            $query = mysql_query('select *from agency_request');
            $result = mysql_numrows($query);
            echo 'Requests '.$result;
            
            $query = mysql_query('INSERT INTO agency select *from agency_request where r_agency_login = "test";');
              
              if($query){      
                    $query_user_login = mysql_query('INSERT INTO agency_login(agency_login, agency_password) 
                                                    select r_agency_login, r_agency_password 
                                                    from agency_request 
                                                    where r_agency_login = "test";');
                    echo'<br>approved'; } else('not inserted');
                
            
        } else ('cant execute'); 
    }
    

    ?>
    </head>
<body>
    <div id="request_background" class="container">
  
        <!-- Jamboo -->
        <div class="jumbotron">
       <center><img src="agency-bg.png" class="img-rounded" alt="Cinque Terre" width="100" height="100">
           <h2>Agency Athentication Requests</h2>   </center>   
    <p>Agencies affliation request, once agency is approved they will be eligible to take part with organisation</p>
  </div>
        
        <!-- Jamboo close -->
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-info">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
          <form method="post" action="request_test.php">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span class="glyphicon glyphicon-th-list"></span>
            <b> Agency 1 </b>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
          <img src="agency.png" class="img-rounded" alt="Cinque Terre" width="250" height="150"> <br>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.<br>
              <button type="submit" class="btn btn-info btn-lg" id="index_1" name="agency_approve"><span class="glyphicon glyphicon-ok"></span> Approve</button> 
              <button type="submit" class="btn btn-danger btn-lg" id="index_1" name="agency_deny"><span class="glyphicon glyphicon-remove"></span> Delete</button>
                   
      </div>
    </div>
  </div>
  <div class="panel panel-info">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> <span class="glyphicon glyphicon-th-list"></span>
            <b> Agency 2 </b>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
          <img src="agency.png" class="img-rounded" alt="Cinque Terre" width="250" height="150"> <br>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.<br>
              <button type="submit" class="btn btn-info btn-lg" id="index_1"><span class="glyphicon glyphicon-ok"></span> Approve</button> 
              <button type="submit" class="btn btn-danger btn-lg" id="index_1"><span class="glyphicon glyphicon-remove"></span>  Delete</button>
                   
        
      </div>
    </div>
  </div>
  <div class="panel panel-info">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> <span class="glyphicon glyphicon-th-list"></span>
            <b>  Agency 3 </b>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <img src="agency.png" class="img-rounded" alt="Cinque Terre" width="250" height="150"> <br>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.<br>
              <button type="submit" class="btn btn-info btn-lg" id="index_1"><span class="glyphicon glyphicon-ok"></span> Approve</button> 
              <button type="submit" class="btn btn-danger btn-lg" id="index_1"><span class="glyphicon glyphicon-remove"></span> Delete</button>
                   
      </div>
    </div>
  </div>
</div>
</div>
        </from>
    <form method="post" action="core.php">
        <center> 
            <button type="submit" class="btn btn-success btn-lg" id="index_1"> <span class="glyphicon glyphicon-ok"></span> Approve all</button>
            <button type="submit" class="btn btn-danger btn-lg" id="index_1"> <span class="glyphicon glyphicon-trash"></span> Delete all</button>
          </center> 
 </form>
    </body>

</html>