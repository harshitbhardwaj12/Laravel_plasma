<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/cities.js"></script>
    <script src="../js/table.js"></script>
    <title>Search_For_Donor</title>

<style>
.soc{
    margin-left: 30px;
}

div.scrollmenu {
    background-color: #aa000000;
    overflow: auto;
    white-space: nowrap;
}

div.scrollmenu a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px;
    text-decoration: none;
}

div.scrollmenu a:hover {
    background-color: #777;
}

</style>

</head>
<body style="background-color: #aa0000b9; color: rgb(241, 238, 238)">



{{---------------------------------------------- Header -----------------------------------}}
    <center><br>
        <a href="/"><img src="image/logo.png" style="height: 60px; width:60px"  alt="logo"></a>
        <h1 class="soc">Search For Plasma Donor</h1>
    
    <h3 id="reg" style="display: none; margin-top:2rem;"></h3>
    </center>

{{---------------------------------------------- Header END -----------------------------------}}

<div class="container-fluid" style="margin-top: 10rem; margin-left: 4rem" >
    <div class="row">
        <div class="col-2">
            <select class="form-control" name="" id="txt_blood">
            <option value="Null">Select Blood Group</option>
            <option value="A+"> A+   </option>
            <option value="B+"> B+   </option>
            <option value="O+"> O+   </option>
            <option value="AB+">AB+ </option>
            <option value="AB-">AB- </option>
            <option value="O-"> O-   </option>
            <option value="B-"> B-   </option>
            <option value="A-"> A-   </option>
           
        </select>
        </div>

        <div class="col-2">
            <select class="form-control" name="" id="txt_gender">
            <option value="">Select Gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
            <option value="O">Other</option>
        </select>
        </div> 

        <div class="col-2">
            <select style="font-size: 18px" onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control" required>
            </select>
        </div>

        <div class="col-2">
            <select style="font-size: 18px;" id ="state" class="form-control" name="state" required></select>
        </div> 

    
        
        <div class="col-3" >
           <button  class="form-control btn btn-success" type="submit" onclick="search()">Search Donor</button>
          
        </div>
    </div>
</div>
<br><br>
<div class="container border"></div>
<br><br>


<div class="container border" id="result">
    <div class="row">
        <div class="border-top table table-striped scrollmenu " > 
                <div >
                  <table class ="t1" style="color: white" id="excelDataTable" border="1">
                  </table>
                </div>
            </div>
    </div>
</div>







{{---------------------------------------Footer -------------------------------------}}

<div class="container" style="margin-top: 10rem">
    <hr>
        <div class="text-center center-block">
            <p class="txt-railway">- IKTSS.com -</p>
            <br>
                <a href="#"><i class="soc fa fa-facebook fa-3x social"></i></a>
                <a href="#"><i class="soc fa fa-twitter fa-3x social"></i></a>
                <a href="#"><i class=" soc fa fa-google-plus fa-3x social"></i></a>
                <a href="mailto:abx@gmail.com"><i class=" soc fa fa-envelope fa-3x social"></i></a>
        </div>
    <hr>
</div>
    
{{---------------------------------------Footer - END-------------------------------------}}

<script language="javascript">print_state("sts");
    
</script>
</body>
</html>