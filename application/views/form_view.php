

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
      <link rel="stylesheet" href="css/style1.css">  
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
</head>

<body>
  <div class="form">      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">SIGN UP</a></li>
        <li class="tab"><a href="#login">LOGIN</a></li>
      </ul>      
      <div class="tab-content">
        <div id="signup">           
          <form action="" method="post">          
          <div class="top-row">
            <div class="field-wrap">
              
              <input name="name" type="text" required autocomplete="off" placeholder="Name"/>
            </div>        
            <div class="field-wrap">
              <!--<label>
                Фамилия<span class="req">*</span>
              </label>-->
              <input name="family" type="text" required autocomplete="off" placeholder="Family"/>
            </div>
          </div>
          <div class="field-wrap">
            <!--<label>
              E-mail<span class="req">*</span>
            </label>-->
            <input name="email" type="email" required autocomplete="off" placeholder="E-mail"/>
          </div>    
		  <div class="field-wrap">
           
                                    <label class="mm-link mm-link-big" for="inputCountry"></label>
                                    <select class="mm-link" id="inputCountry" placeholder="Country" name="country"  required="" onchange="javascript:selectRegion();" v-model="selectedCountry">
                                        <option hidden></option>
<?php
	
	foreach($data as $row)
	{
            echo "<option value=\"" . $row['name']. "\">" . $row['name'] . "</option>";
		
	}
	
?>
                                         </select>
                                </div>
<div name="selectDataCity" ></div>
<script type="text/javascript">
    function selectRegion(){
        var id_country = $('select[name="country"]').val();
        if(!id_country){
                $('div[name="selectDataCity"]').html('');
                //$('div[name="selectDataCity"]').html('');
        }else{
                $.ajax({
                        type: "POST",
                        url: "http://localhost/anton/ajax.base.php",
                        data: { action: 'showCityForInsert', name: id_country },
                        cache: false,
                        success: function(responce){ $('div[name="selectDataCity"]').html(responce); }
                });
        };
};
 </script>
		  
          <div class="field-wrap">
            <!--<label>
              Пароль<span class="req">*</span>
            </label>-->
            <br> <br>
            <input name="password1" type="password" required autocomplete="off" placeholder="Password"/>
          </div>  
              <div class="field-wrap">
            <!--<label>
              Пароль<span class="req">*</span>
            </label>-->
            <input name="password2" type="password" required autocomplete="off" placeholder="Password"/>
          </div>  
              
          <button type="submit" class="button button-block" />OK</button>          
          </form>
        </div>        
        <div id="login">             
          <form action="/" method="post">          
            <div class="field-wrap">
            <!--<label>
              E-mail<span class="req">*</span>
            </label>-->
            <input type="email" required autocomplete="off" placeholder="E-mail"/>
          </div>          
          <div class="field-wrap">
            <!--<label>
              Пароль<span class="req">*</span>
            </label>-->
            <input type="password" required autocomplete="off" placeholder="Password"/>
          </div>      
              
          <button class="button button-block"/>OK</button>          
          </form>
        </div>        
      </div><!-- tab-content -->      
    </div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script>
</body>
</html>
