<?php


// RENAMING A COLUMN
// ALTER TABLE setup CHANGE `available_coins` `available_assets` VARCHAR(10000);
require_once $_SERVER['DOCUMENT_ROOT'].'/config/functions.php';
date_default_timezone_set("Africa/Lagos");
setlocale(LC_MONETARY,"en_US");
class DatabaseConnection {


    public $database_username = "root"; // username for the database
    public $database_password = "";
    public $database_host = "localhost";
    public $database = "mtranzact"; // database name
    public  $conn;
    protected   $password_recovery_table_name = "password_recovery"; //password recovery table name
    public  $users_table_name = "users"; // Users table name
    public   $unverified_emails_table_name = "unverified_emails"; // table for unverified emails
    public  $profiles_table_name = "profiles";
    public  $messages_table_name = "messages";  // This is the table for the public chat messages
    public   $password_reset_code_length = 16;
    public  $email_verification_code_length = 16;
    public  $bank_details_verification_code_length = 22;
    public $pending_bank_details_table_name = "pending_bank_details";
    public $fund_account_transactions_table_name = "fund_account_transactions";
    public $setup_table_name = "setup";
    public $value_precision = 16;
    final protected  function  establish_database_connection () : bool
    {

        try {

            $database = $this->database;
            $username = $this->database_username;
            $password = $this->database_password;
            $database_host = $this->database_host;

            $this->conn = new PDO("mysql:dbname=$database;host=$database_host", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;
        } catch (PDOException $exception) {

            echo "Connection failed : " . $exception->getMessage();
            return false;


        }
    }

        function __construct () {

            // Establish  connection with the Database

            $this->establish_database_connection(); 
            return true;


        }

         function __destruct()
    {
        // TODO: Implement __destruct() method.

    $this->conn = null; // Close the database connection on Class Destruct

    }


    public function  create_setup_table() : bool {
        $sql = "CREATE TABLE IF NOT EXISTS {$this->setup_table_name}(
                        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
                        available_assets VARCHAR(1000) NOT NULL,
                        total_assets VARCHAR (1000) NOT NULL , 
                        sold_assets VARCHAR (1000) NOT NULL , 
                        fake_sold_assets VARCHAR(1000),
                        rate_constant VARCHAR (1000) ,
                        maximum_value_ever VARCHAR (1000),
                        minimum_value_ever VARCHAR (1000), 
                        number_of_users INT UNSIGNED NOT NULL
                        
)";


        try {

            $this->conn->exec($sql);
            echo "Table Created successfully";
            return true;
        }

        catch (PDOException $exception) {
            echo "Error occured {$exception->getMessage()}";
            return false;
        }

    }

   public final function update_multiple_fields (string $table_name , array  $fields_and_values , string $where_clause){

       $field_length = count($fields_and_values);
       $counter = 0;

       $sql = "UPDATE {$table_name} SET ";

       foreach ($fields_and_values as $field => $value){


           $sql.= ($field_length - $counter == 1 )?  "{$field} = '{$value}'"  : "{$field} = '{$value}',";

           $counter += 1;
       }

        $sql.= " WHERE $where_clause";

       try {

            $this->conn->exec($sql);
            return true;
        }

        catch (PDOException $exception) {
            echo "Error occured {$exception->getMessage()}";

            return false;
        }

    }

    public final function insert_into_table(string $table_name , array $fields_and_values){
        $field_string = "";
        $field_length = count($fields_and_values);
        $values_string = "";
        $counter = 0;
        foreach ($fields_and_values as $field => $value){
            $counter += 1;

            $field_string.= ($counter == $field_length)?  $field  : $field.",";
            $values_string.= ($counter == $field_length) ? "'$value'" : "'$value'".",";
        }

        $counter = 0;

        $sql = "INSERT INTO {$table_name} ($field_string) VALUES ($values_string)";
        try {

            $this->conn->exec($sql);
            return true;
        }

        catch (PDOException $exception) {
             return false;
        }


    }
/*



    You can add a new column at the end of your table

    ALTER TABLE assessment ADD q6 VARCHAR( 255 )

    Add column to the begining of table

    ALTER TABLE assessment ADD q6 VARCHAR( 255 ) FIRST

    Add column next to a specified column

    ALTER TABLE assessment ADD q6 VARCHAR( 255 ) after q5




*/

    public final function  create_users_table () : bool {

        $users_table_name = $this->users_table_name;
        $sql = "CREATE TABLE {$users_table_name}(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY  KEY,
    fullname VARCHAR(100)  NOT NULL ,
    birthday VARCHAR (100) NOT NULL , 
    gender VARCHAR (100) NOT  NULL ,
    email VARCHAR (100) NOT NULL UNIQUE , 
    username VARCHAR (100) NOT NULL UNIQUE ,
    username_text VARCHAR (100) NOT  NULL UNIQUE ,
    password VARCHAR (100) NOT NULL , 
    phone VARCHAR (100) NOT NULL UNIQUE ,
    registration_timestamp VARCHAR (100) NOT NULL ,
    email_verified VARCHAR (100) DEFAULT  '0' , 
    user_id VARCHAR (100) NOT NULL UNIQUE , 
    game_id VARCHAR (100) NOT NULL UNIQUE ,
    password_reset_code  VARCHAR (100) DEFAULT '0' UNIQUE , 
    email_verification_code VARCHAR (100) DEFAULT  '0' UNIQUE ,
    number_of_read_notifications VARCHAR (100) NOT NULL DEFAULT  '0',
    bank_name VARCHAR (100) DEFAULT '0' ,
    account_name VARCHAR (100) DEFAULT '0',
    account_number VARCHAR (100) DEFAULT '0', 
    bonus BIGINT NOT NULL DEFAULT  0 , 
    
    
    account_balance BIGINT NOT NULL DEFAULT 0 , 
    
    
    
    twitter_account VARCHAR (100) DEFAULT '0' , 
    instagram_account VARCHAR (100) DEFAULT '0' ,
    status_text VARCHAR (100) DEFAULT '0',
    
    
    
    
    location  VARCHAR (100) DEFAULT '0', 
    country  VARCHAR (100) DEFAULT '0', 
    
    
    profile VARCHAR (100) DEFAULT '0', 
    last_seen VARCHAR (100) DEFAULT '0', 
    active VARCHAR (100) DEFAULT '0', 
    
    
    
    game_id_about_to_play VARCHAR (100) DEFAULT '0', 
    total_points BIGINT  DEFAULT 0,
    current_point BIGINT  DEFAULT 0 ,
    current_game_id VARCHAR (100) DEFAULT '0'  , 
    total_wins BIGINT  NOT NULL DEFAULT  0, 
    total_games_played BIGINT  DEFAULT 0 ,
    total_amount_won BIGINT NOT NULL DEFAULT 0,
    last_win_date VARCHAR (100) DEFAULT '0' ,
    last_played_game_id VARCHAR (100) DEFAULT '0' , 
    last_amount_won BIGINT NOT NULL DEFAULT 0 ,
    last_played_date VARCHAR (100) DEFAULT  '0' 
    
    
    
)";

        try {

            $this->conn->exec($sql);
            echo "Table Created successfully";
            return true;
        }

        catch (PDOException $exception) {
            echo "Error occured {$exception->getMessage()}";
            return false;
        }


    }




    public  function fetch_data_from_table_desc(string $table , string $row , string $value): array

    {

        $sql = "SELECT * FROM $table  WHERE $row = '{$value}' order by id DESC ";
        $result = $this->conn->prepare($sql);
        $result->execute();
        $set_type_record = $result->setFetchMode(PDO::FETCH_ASSOC);
        $record = $result->fetchAll();
        return $record;
    }



    public  final  function record_exists_in_table(string  $table_name , string   $row_name , string  $value) : bool {
        $value = strtolower($value);
        $sql = "SELECT $row_name  FROM $table_name WHERE $row_name = '{$value}'";
        $result = $this->conn->prepare($sql);
        $result->execute();
        $num_rows = $result->rowCount();

        if($num_rows > 0)
            return true;
        return false;


    }

    public  final function  delete_record(string  $table_name , string   $row_name , string  $value) : bool  {

        $value = strtolower($value);
        $sql = "DELETE FROM {$table_name} WHERE {$row_name} = '{$value}'";
        $result = $this->conn->prepare($sql);
        $result->execute();
        return true;
    }


    public  final  function  update_record (string  $table_name , string  $row_name , string $new_value , string $row_to_searc_for , string $old_value , $lowercase = true) {

        $new_value = ($lowercase)?strtolower($new_value):$new_value;
        $old_value = strtolower($old_value);
        $sql = "UPDATE {$table_name} SET {$row_name} = '{$new_value}' WHERE {$row_to_searc_for} = '{$old_value}'";
        $result = $this->conn->prepare($sql);
        $result->execute();
        return true;
    }

    public final function fetch_data_from_table(string $table , string $row , string $value): array

    {

        $sql = "SELECT * FROM $table  WHERE $row = '{$value}'";
        $result = $this->conn->prepare($sql);
        $result->execute();
        $set_type_record = $result->setFetchMode(PDO::FETCH_ASSOC);
        $record = $result->fetchAll();
        return $record;
    }

    public  final  function fetch_data_from_table_with_conditions(string  $table , string $conditions){
        $sql = "SELECT * FROM $table  WHERE $conditions";
        $result = $this->conn->prepare($sql);
        $result->execute();
        $set_type_record = $result->setFetchMode(PDO::FETCH_ASSOC);
        $record = $result->fetchAll();
        return $record;

    }

    public final function executeSQL (string $sql){

        $result = $this->conn->prepare($sql);
        $result->execute();

        return true;

    }





}


$database_connection = new DatabaseConnection();
//$database_connection->create_setup_table();
class Setup  {
    public $database_connection;
    public $setup_info;
    public $available_assets;
    public $sold_assets;
    public $functions;
    public $fake_sold_assets;
    function __construct()
{

    $this->functions = new Functions();
    $this->database_connection = new DatabaseConnection();
    $this->setup_info = $this->database_connection->fetch_data_from_table_with_conditions($this->database_connection->setup_table_name , 'id' , '1')[0];
    $this->available_assets_float = (float)$this->setup_info['available_assets'];
    $this->sold_assets = (float)$this->setup_info['sold_assets'];
    $this->fake_sold_assets = floatval($this->setup_info['fake_sold_assets']);

}


public function money_format (float $float_value) : string
{
    $dot_position = strpos((string)$float_value , ".");
    $double = "0".substr((string)$float_value , $dot_position);
    $double = round((float)$double , $this->database_connection->value_precision);
    $dot_position = strpos((string)$double , ".") - 1;
    $double = str_replace("0." , "" , substr((string)$double , $dot_position));
    return (string)($this->functions->toMoney($float_value)).'.'.$double;


}



}


?>