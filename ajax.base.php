
<?php
 
//ini_set(default_charset,"UTF-8");
 
# include data base
//include "mysql.inc.php";
include 'application/components/Db.php';
 $db = Db::getConnection();

 
switch ($_POST['action']):
 
    case "showCityForInsert":
        echo '<select size="1" name="city" required="">';
       // echo '<option value="address"> address </option>';
        $sql = "SELECT city.name FROM city, country WHERE city.country=country.countryID and country.name= '" .($_POST['name'])."'"; // mysql_real_escape_string($_POST['name']) 

   
        
        //$result = $db->query($sql);
        $query  = $db->query($sql);
        $result = $query->FETCHALL(PDO::FETCH_ASSOC);
        foreach( $result  as  $arry )
        {
           // echo $arry["name"]  .  "<br>";
            echo '<option value="'.$arry['name'].'">'.$arry['name'].'</option>';
        }
            
        //return $query->fetchAll();
       // echo($resource);
        //echo '<option value="address"> address </option>';
       /* while ($row = mysql_fetch_row ($data)){
        echo '<option value="'.$row['address'].'">'.$row['address'].'</option>';}
        echo '</select>';*/
        //$rows = $db->prepare($sql);
//         foreach ($data as $value) {
//                        echo '<option value="'.$value.'">'.$value.'</option>';
//                };
//                echo '</select>';
        break;

        
endswitch;




