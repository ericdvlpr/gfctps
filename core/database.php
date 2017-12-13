<?php  
 class Database  
 {  
      //crud class  
      public $connect;  
      private $host = "localhost";  
      private $username = 'root';  
      private $password = '123456';  
      private  $database = 'db_gfctps';  
      function __construct()  
      {  
           $this->database_connect();  
      }  
      public function database_connect()  
      {  
           $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->database);  
      }  
      public function execute_query($query)  
      {  
           return mysqli_query($this->connect, $query);  
      }  
      public function get_employee_data($query) {  
           $output = '';  
           $result = $this->execute_query($query);  
           $output .= '  
             
           ';  
           while($row = mysqli_fetch_object($result))  
           {  
                if($row->gender== 'M'){
                  $gender = 'Male';
                }else{
                  $gender = 'Female';
                }
                $output .= '  
                <tr>       
                     <td>'.$row->employee_id.'</td>  
                     <td>'.$row->employee_name.'</td>   
                     <td>'.$row->address.'</td>  
                     <td>'.$gender.'</td>  
                     <td>'.$row->birthday.'</td>  
                     <td><button type="button" name="update" id="'.$row->id.'" class="btn btn-success btn-xs updateEmployee">Update</button><button type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-xs deleteEmployee">Delete</button></td>  
                </tr>  
                ';  
           }  
           $output .= '';  
           return $output;  
      }      
      public function get_customer_data($query) {  
           $output = '';  
           $result = $this->execute_query($query);  
           $output .= '  
             
           ';  
           while($row = mysqli_fetch_object($result))  
           {  
                if($row->gender== 'M'){
                  $gender = 'Male';
                }else{
                  $gender = 'Female';
                }
                $output .= '  
                <tr>       
                     <td>'.$row->employee_id.'</td>  
                     <td>'.$row->employee_name.'</td>   
                     <td>'.$row->address.'</td>  
                     <td>'.$gender.'</td>  
                     <td>'.$row->birthday.'</td>  
                     <td><button type="button" name="update" id="'.$row->id.'" class="btn btn-success btn-xs updateEmployee">Update</button><button type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-xs deleteEmployee">Delete</button></td>  
                </tr>  
                ';  
           }  
           $output .= '';  
           return $output;  
      } 
      public function get_inventory_data($query) {  
           $output = '';  
           $result = $this->execute_query($query);  
           $output .= '  
             
           ';  
           while($row = mysqli_fetch_object($result))  
           {  
                if($row->gender== 'M'){
                  $gender = 'Male';
                }else{
                  $gender = 'Female';
                }
                $output .= '  
                <tr>       
                     <td>'.$row->employee_id.'</td>  
                     <td>'.$row->employee_name.'</td>   
                     <td>'.$row->address.'</td>  
                     <td>'.$gender.'</td>  
                     <td>'.$row->birthday.'</td>  
                     <td><button type="button" name="update" id="'.$row->id.'" class="btn btn-success btn-xs updateEmployee">Update</button><button type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-xs deleteEmployee">Delete</button></td>  
                </tr>  
                ';  
           }  
           $output .= '';  
           return $output;  
      }
      public function get_task_data($query) {  
           $output = '';  
           $result = $this->execute_query($query);  
           $output .= '  
             
           ';  
           while($row = mysqli_fetch_object($result))  
           {  
                if($row->gender== 'M'){
                  $gender = 'Male';
                }else{
                  $gender = 'Female';
                }
                $output .= '  
                <tr>       
                     <td>'.$row->employee_id.'</td>  
                     <td>'.$row->employee_name.'</td>   
                     <td>'.$row->address.'</td>  
                     <td>'.$gender.'</td>  
                     <td>'.$row->birthday.'</td>  
                     <td><button type="button" name="update" id="'.$row->id.'" class="btn btn-success btn-xs updateEmployee">Update</button><button type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-xs deleteEmployee">Delete</button></td>  
                </tr>  
                ';  
           }  
           $output .= '';  
           return $output;  
      }
      public function get_delivery_data($query) {  
           $output = '';  
           $result = $this->execute_query($query);  
           $output .= '  
             
           ';  
           while($row = mysqli_fetch_object($result))  
           {  
                if($row->gender== 'M'){
                  $gender = 'Male';
                }else{
                  $gender = 'Female';
                }
                $output .= '  
                <tr>       
                     <td>'.$row->employee_id.'</td>  
                     <td>'.$row->employee_name.'</td>   
                     <td>'.$row->address.'</td>  
                     <td>'.$gender.'</td>  
                     <td>'.$row->birthday.'</td>  
                     <td><button type="button" name="update" id="'.$row->id.'" class="btn btn-success btn-xs updateEmployee">Update</button><button type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-xs deleteEmployee">Delete</button></td>  
                </tr>  
                ';  
           }  
           $output .= '';  
           return $output;  
      }
 }  
 ?>  