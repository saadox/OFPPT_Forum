<?php
/***************************/
/*		SAAD AMRANI		   */
/*		 OFPPT TDI 		   */
/***************************/

/***************************/
/*  Configs and Security   */
/***************************/

class MainClass  
{
	//priv = this->
	//static = self::$var
	
	public $isConnected; //sqlConnected = True
	public $MsqlConRes; //mysql connection string
	public $query;	// hadi mysqli_query string + or die 
	private $servName	= "localhost";
	private $DbName		= "ofppt";
	private $pwd		= "00000000";
	private $usr		= "root";

	function __construct() 
	{  
      	$vq = mysqli_connect($this->servName,$this->usr,$this->pwd,$this->DbName);
      	if ($vq)
      	{
      		$this->isConnected = True;
      		$this->MsqlConRes = $vq;
      	}
      	else
      	{
      		$this->isConnected = False;
      		exit();
      	}
    }


	public function sqlClose()
	{
		if($this->isConnected)
		{
			$this->isConnected = false;
			mysqli_close($this->MsqlConRes);
		}
	}
 

	public function errors($type)
	{
		switch ($type) {
			case '404':
				echo'
					<center>
					<div id="divErr">
						<img src="img/brokenRobot.png" width="50%" /></br>
						<h1 class="e404">ERROR 404</h1>
						<div style="box-shadow:0px 0px 10px #bababa;">
							<p><br><a href="index.php">[ Rje3 l Home ]</a><br><a href="contact.php">[ Contactez nous ]</a><br><br></p>
						</div>
					</div>
					</center>
					';
				break;
			
			default:
				break;
		}
	}

}

?>