<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/cities.js"></script>
    
    <title>Register</title>
<style>
.form-control::-webkit-input-placeholder { color: rgb(4, 5, 22);
                                            opacity: 1;
                                            font-size: 20px;
                                            font-family: Verdana, Geneva, Tahoma, sans-serif;
                                            font-style: italic
                                             }

.padd {
  padding-top: 3rem;
    font-size: 25px;
}

input[type=radio] {
   
    width: 30px;
    height: 25px;
}
input[type=checkbox] {
   
   width: 30px;
   height: 25px;
}

.soc{
    margin-left: 30px;
}
</style>
</head>
<body style="background-color: #aa0000b9; color: rgb(241, 238, 238)">

{{---------------------------------------------- Header -----------------------------------}}

<center><br>
    <a href="/"><img src="image/logo.png" style="height: 60px; width:60px"  alt="logo"></a>
    <h1 class="soc">Register as a Plasma Donor</h1></center>

{{---------------------------------------------- Header - End -------------------------------}}

    <div class="container-fluid">
        <div class="row">

             {{-------------------------------------Guid Lines------------------------------}}
            <div class="col-xl-4"><br><br>
                <h4>COVID-19 Guid Lines To Donate Plasma</h4><br>
                <h5>Eligibility Criteria To Donate Plasma</h5><br>
                <ol> 
                    <li><p>Can donate who have tested positive for coronavirus and have recovered at least <b>three weeks</b> before donating and tested negative for Covid-19 twice.</p></li>
                    <li><p>Can donate who are <b>fit and healthy</b>.</p></li>
                    <li><p>Can donate who are aged <b>18 or over</b>, but <b>not more than 60</b>.</p></li>
                    <li><p>Can donate who weight <b>50 kgs or more</b>.</p></li>
               
                </ol><br><br>

                <h5>You Are Not Eligible if you</h5><br>
                <ul>
                    <li><p>Have hypertension, blood pressure, heart and kidney-related ailments cannot donate plasma.</p></li>
                    <li><p>Are receiving medical or hospital treatment.</p></li>
                    <li><p>Are a women who have been pregnant in the past.</p></li>
                    <li><p>Are a Cancer patient.</p></li>
                </ul>
            </div>

             {{------------------------------------ Guid lines - End-------------------------}}
            


            {{------------------------------------------- form -------------------------}}
        <div class="col-xl-8">
            <form action="/registering" method="post">
                @csrf
                <div class="container">
                    <div class="row padd">
                        <div class="col-6">
                            <input type="text" class="form-control input-lg" name="txt_fname" placeholder="First Name*" required>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control input-lg" name="txt_lname" placeholder="Last Name*" required>
                        </div>
                    </div>
                    <div class="row-12 padd">
                        <input type="number" class="form-control input-lg" name="num_age" min="18" max="60" placeholder="Age* (18 - 60 only)" required>
                    </div>
                    <div class="row-12 padd">
                        <input type="email" class="form-control input-lg" name="txt_email" placeholder="Email*" required>
                    </div>
                    <div class="row-12 padd">
                        <input type="number" class="form-control input-lg"  id="num_phone" name="num_phone" placeholder="Phone Number*" required>
                    </div>
                    <div class="row-12 padd">
                        <input type="number" class="form-control input-lg" id="num_emrg" name="num_emrg" placeholder="Emergency Contact*"  required>
                    </div>
                    <div class="row-12 padd">
                        <select style="font-size: 18px" onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control" required></select>
                    </div>
                    <div class="row-12 padd">
                        <select style="font-size: 18px;" id ="state" class="form-control" name="state" required></select>
                    </div>
                    <div class="row-12 padd">
                        <input  type="text" class="form-control" name="txt_info" placeholder="Do you have any other medical conditions, if yes please describe here.">
                    </div>
                    
                    <div class="row-12 padd">
                            <div class="col-12">
                                <label for="recover">Date when you recovered from COVID-19.</label>
                            </div>
                            <div class="col-12">
                                <input type="date" name="recover" id="recover" required>
                            </div>
                    </div>

                    <div class="row-12 padd">
                        <div class="col-12">
                            <label for="blood_group" style="font-size: 28px">Blood Group*</label>
                        </div>
                        <div class=" col-12 border form-check" style=" height: auto;">
                            <input style="margin-left: 20px" class="form-check-input position-static" type="radio" id="checkbox" name="blood_group" value="A+"  required >A+
                            <input style="margin-left: 20px" class="form-check-input position-static" type="radio" id="checkbox" name="blood_group" value="B+"  required>B+
                            <input style="margin-left: 20px" class="form-check-input position-static" type="radio" id="checkbox" name="blood_group" value="O+"  required>O+
                            <input style="margin-left: 20px" class="form-check-input position-static" type="radio" id="checkbox" name="blood_group" value="AB+"  required>AB+
                            <input style="margin-left: 20px" class="form-check-input position-static" type="radio" id="checkbox" name="blood_group" value="A-"  required>A-
                            <input style="margin-left: 20px" class="form-check-input position-static" type="radio" id="checkbox" name="blood_group" value="B-"  required>B-
                            <input style="margin-left: 20px" class="form-check-input position-static" type="radio" id="checkbox" name="blood_group" value="O-"  required>O-
                            <input style="margin-left: 20px" class="form-check-input position-static" type="radio" id="checkbox" name="blood_group" value="AB-"  required>AB-
                            <input style="margin-left: 20px" class="form-check-input position-static" type="radio" id="checkbox" name="blood_group" value="None"  required>Don't Know
                          </div>
                    </div>
                    <div class="row-12 padd">
                        <div class="col-12">
                            <label for="recover">Can you describe your self Healthy?</label>
                        </div>
                        <div class="col-12 border" style="height: 4rem;">
                            <input style="margin-left: 20px" class="form-check-input position-static" type="radio"  name="Healthy" value="YES"  required>Yes
                            <input style="margin-left: 20px" class="form-check-input position-static" type="radio"  name="Healthy" value="NO"  required>No
                            <input style="margin-left: 20px" class="form-check-input position-static" type="radio"  name="Healthy" value="None"  required>Don't Know   
                        </div>
                    </div>

                    <div class="row-12 padd">
                        <div class="col-12">
                            <label for="trevel">Can trevel to donate plasma?*</label>
                        </div>
                        <div class="col-12 border" style="height: 4rem;">
                            <input style="margin-left: 20px" class="form-check-input position-static" type="radio"  name="trevel" value="YES"  required>Yes
                            <input style="margin-left: 20px" class="form-check-input position-static" type="radio"  name="trevel" value="NO"  required>No
                            <input style="margin-left: 20px" class="form-check-input position-static" type="radio"  name="trevel" value="None"  required>Don't Know
                        </div>
                    </div>

                    <div class="row-12 padd">
                        <div class="col-12">
                            <label for="recover">Do you have any below diseases, if yes please mark*</label>
                        </div>
                        <div class="col-12 border" style="height: auto">
                            <input style="margin-left: 20px" class="form-check-input position-static" type="checkbox"  name="diseases[]" value="HIV/AIDS" > HIV/AIDS
                            <input style="margin-left: 20px" class="form-check-input position-static" type="checkbox"  name="diseases[]" value="Hepatitis_B_C" > Hepatitis B or C
                            <input style="margin-left: 20px" class="form-check-input position-static" type="checkbox"  name="diseases[]" value="HTLV" >HTLV
                            <input style="margin-left: 20px" class="form-check-input position-static" type="checkbox"  name="diseases[]" value="Diabetes"  >Diabetes
                            <input style="margin-left: 20px" class="form-check-input position-static" type="checkbox"  name="diseases[]" value="High_Blood_Pressure" >High Blood Pressure
                            <input style="margin-left: 20px" class="form-check-input position-static" type="checkbox"  name="diseases[]" value="None">None
                        </div>
                    </div>

                    <div class="row-12 padd">
                        <div class="col-12">
                            <label for="gender">Gender*</label>
                        </div>
                        <div  class="col-12 border" style="height: auto; ">
                            <input style="margin-left: 20px" class="form-check-input position-static" type="radio"  name="gender" value="M"  required>Male 
                            <input style="margin-left: 20px" class="form-check-input position-static" type="radio"  name="gender" value="F"  required>Female
                            <input style="margin-left: 20px" class="form-check-input position-static" type="radio"  name="gender" value="O"  required>Other
                        </div>
                    </div><br><br>
                
                    By submiting this form, i confirm that above provide information is correct and true to the best of my knowledge.
                    <div class="row-12 padd">
                        <input style="height: 4rem; font-size:1.5rem;" type="submit" class="col-12 btn btn-success" value="REGISTER TO DONATE PLASMA" onclick="validate()" >
                    </div>
                

                </div>
                
            </form>
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

<script language="javascript">print_state("sts");

function validate(){

    var P_no = document.getElementById("num_phone").value;
   
    if(P_no.length < 10 || P_no.length > 10){

        $('#num_phone').val(""); 
        $('#num_phone').attr('placeholder', 'Please Enter Your Valid Phone Your Number'); 
    }
    else{
        $('#num_phone').css('border-color', '#D3D3D3');
    }
    

    var emrg_no = document.getElementById("num_emrg").value;

if(emrg_no.length < 10 || emrg_no.length > 10){

     
    $('#num_emrg').val(""); 
    $('#num_emrg').attr('placeholder', 'Please Enter A Valid Energency Contact Number'); 
}
else{
    $('#num_emrg').css('border-color', '#D3D3D3');
}

}



</script>

</body>
</html>