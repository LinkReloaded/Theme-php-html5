<?
    
    include('inc/bbdd.php');

    $DB_Server = DB_HOST;  
    $DB_Username = DB_USER;  
    $DB_Password = DB_PASSWORD; 
    $DB_DBName = DB_NAME;          
    $DB_TBLName = $nombredelaBBDD; 
    $filename = "datos_formulario";         

    $sql = "Select * from $DB_TBLName";
    $Connect = @mysql_connect($DB_Server, $DB_Username, $DB_Password) or die("Couldn't connect to MySQL:<br>" . mysql_error() . "<br>" . mysql_errno());
    $Db = @mysql_select_db($DB_DBName, $Connect) or die("Couldn't select database:<br>" . mysql_error(). "<br>" . mysql_errno());
    $result = @mysql_query($sql,$Connect) or die("Couldn't execute query:<br>" . mysql_error(). "<br>" . mysql_errno());
    $file_ending = "xls";
    
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=$filename.xls");
    header("Pragma: no-cache");
    header("Expires: 0");

    $sep = "\t"; 
    
    for ($i = 0; $i < mysql_num_fields($result); $i++) {
        echo mysql_field_name($result,$i) . "\t";
    }
    
    print("\n");

    while($row = mysql_fetch_row($result)){
        $schema_insert = "";
        for($j=0; $j<mysql_num_fields($result);$j++){
            if(!isset($row[$j]))
                $schema_insert .= "NULL".$sep;
            elseif ($row[$j] != "")
                $schema_insert .= "$row[$j]".$sep;
            else
                $schema_insert .= "".$sep;
        }
        $schema_insert = str_replace($sep."$", "", $schema_insert);
        $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
    }

?>

