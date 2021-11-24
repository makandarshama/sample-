<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Csv_import extends CI_Controller
{ 

 public $csv =false;
// public function __construct()
 //{
 // parent::__construct();
 // $this->load->model('Csv_import_model');
  //$this->load->library('csvreader');
   //$this->load->library('excel');

//}
   // $file=$_FILES["csv_file"]["tmp_name"];

function index()
{
 
  $this->load->view('csv_import');
  $this->load->database();

$this->load->database();
if(isset($_POST['import_csv']))
{
    echo "string";
  $filename=$_FILES["csv_file"]["tmp_name"];
$file =fopen($filename,'r');
    while($row = fgetcsv($file))
    {
      // print "<pre>";
      // print_r($row);
      // // var_dump($row);
      //  print "</pre>";
      $value = "'".implode("','",$row)."'";
      //echo ($value);
      // $sql="insert into my_users('full_name','email') values(".$value.")";
      $q= "INSERT INTO my_users(full_name,email) VALUES(".$value.")";
       //echo($q);

           
    }
    if($this->db->query($q)) {
      echo '<script type="text/javascript">';
echo ' alert("Your data is imported successfully")';  //not showing an alert box.
echo '</script>';

       }
       else
       {
            //$this->csv =false;
            echo $this->error;
       }

  }

//     if($this->csv)
//     {
//       echo "successfully imported";
//     }
//     else{
//       echo "something went wrong while imported";
//     }

// }

}
//if( !$this->dbutil->database_exists('myDatabase'))
    //echo 'Not connected to a database, or database not exists';

 //if(isset($_POST["import_csv"])){
 


  //$this->load->database();
  //this->load->model('Csv_import_model');
  //$this->Csv_import_model->insert($data);

  //print_r($_POST["import_csv"]);
    
 /* $filename=$_FILES["csv_file"]["tmp_name"];    
    print_r($filename) ;

     if($_FILES["csv_file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
        echo($file) ;
          while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
           {


             $sql = "INSERT into 'my_users' ('full_name','email') 
                   values ('".$getData[0]."','".$getData[1]."')";
                   //$result = mysqli_query($con, $sql);
                  // print_r($result);
        if(!isset($result))
        {*/
          // echo "<script type=\"text/javascript\">
          //     alert(\"Invalid File:Please Upload CSV File\");
          //      window.location = \"Csv_import.php\"
          //     </script>";   
//           echo "not valid";
//         }
//         else {
//             echo "<script type=\"text/javascript\">
//             alert(\"CSV File has been successfully Imported.\");
//             window.location = \"index.php\"
//           </script>";
//         }
//            }
      
//            fclose($file); 
//      }
//   }  



// }
 } 
          /**
           * 
           */
        ?>