<?php


require_once '../config/functions.php';


class SendUpdates extends  Functions {

    private $data;
    private $result;
    private  $available_assets;
    private $fake_sold_assets;
    private $sold_assets;
    private $sold_assets_float;
    private $available_assets_float;
    private $setup;

    private $error = "connection to database failed";
    private $success = "1";
    function  isReady() {

        return !empty($this->data = json_decode($_POST['data'] , true));
    }

    function setDetails () : bool {

                 $this->result = $this->fetch_data_from_table($this->setup_table_name , 'id' , '1')[0];
                 $this->available_assets_float = (float)$this->result['available_assets'];
                 $this->sold_assets_float = (float)$this->result['sold_assets'];
                 $this->fake_sold_assets = $this->setup->money_format(floatval($this->result['fake_sold_assets']));

                 $this->available_assets = $this->setup->money_format($this->available_assets_float);
                 $this->sold_assets = $this->setup->money_format($this->sold_assets_float);
                 return true;



    }


    public final function  Processor () : string  {

        if(!$this->isReady()) return json_encode(["success" => $this->success , "error" => $this->error]);
        if(!$this->setDetails()) return json_encode(["success" => $this->success , "error" => $this->error]);
        return json_encode(["success" => "1" , "error"  => $this->result ,
                 "availableAssets" => $this->available_assets ,
                  "soldAssets"  => $this->sold_assets ,
                  "fakeSoldAssets" => $this->fake_sold_assets,
            ]);
    }

     function __construct(){
    parent::__construct();

        $this->setup = new Setup();
    }

    public function __destruct()
    {
        parent::__destruct(); // TODO: Change the autogenerated stub
    }



}


$sendUpdates = new SendUpdates();

echo $sendUpdates->Processor();
?>