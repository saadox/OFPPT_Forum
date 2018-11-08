<?php
/***************************/
/*		SAAD AMRANI		   */
/*		 OFPPT TDI 		   */
/***************************/
include "inc/co.php";
$main = new MainClass();
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link href="https://fonts.googleapis.com/css?family=Chakra+Petch" rel="stylesheet"> 
	<title>OFPPT</title>
</head>
<body>
	<div id="topDiv"></div>
	<div id="HeadDiv">
		<a href="index.php" ><img class = "logo" src="img/logo.png" /></a>
		<img class = "ads" src="img/abc.png" />
	</div>
	<div class="scrollMsg">
			<marquee behavior="scroll" direction="left" >hada message mn la base de donners</marquee>
	</div>
	<center>
		<div  id="nav">
	 		<ul class="uls">
					<li><a href="#" >ADMIN</a></li>
					<li><a href="#" >EFM</a></li>
					<li><a href="#" >EFF</a></li>
					<li><a href="#" >EPS</a></li>
					<li><a href="#" >CCS</a></li>
					<li><a href="#" >EXR</a></li>
			</ul>
		</div>
	</center>
	<br>
	<br>
<center>
	
<?php
//ALTER TABLE `subjects` AUTO_INCREMENT=0
/*$main->query = mysqli_query($main->MsqlConRes,"INSERT INTO subjects (Author,CreateDate,Icon,isHot,Likes,TimesRead,Title,Content)	
							VALUES ('TESTER','5/6/2018','https://c.disquscdn.com/uploads/users/21109/5012/avatar92.jpg',true,1,11,'test my subject','saaaad was here all day <br> but the problem is <b>')") 
							or die(mysqli_error());

*/
if (isset($_GET['sub'])) 
{
	include "inc/subject.php";
	$main->sqlClose();
	include "inc/footer.php";
	exit;
}


	echo'
		<table id="mainTb">
		<tr>
			<th class="firstTopLeft" width="40px" heigh="40px" >icon</th>
			<th width="65%">mawdo3</th> 
			<th width="10%">katib</th> 
			<th width="5%">9ira2at</th>
			<th width="5%">likes</th>
			<th class="firstTopRight" >date</th>
		</tr>
	';

			$main->query = mysqli_query($main->MsqlConRes,"SELECT * FROM subjects ORDER BY id") or die(mysqli_error());
			$arr	= array();

			while ($row	= mysqli_fetch_array($main->query,MYSQLI_ASSOC))
				$arr[] = $row;
			foreach ($arr as $row)
			{
				echo '
					<tr>
						<td style="padding:0px;margin:0px;background-color: #153d55;"><img src="'.$row['Icon'].'" class="tdImg" /></td>
						<td style="text-align: left;"> 
							<div id ="SetSubjMid">
								<img src="img/rh.png" class=" "> 
								<a href="index.php?sub='.$row['id'].'" class="">'.$row['Title'].'</a>
							</div>
						</td>
						<td>'.$row['Author'].'</td> 
						<td>'.$row['TimesRead'].'</td>
						<td>'.$row['Likes'].'</td>
						<td>'.$row['CreateDate'].'</td>
					</tr>
					';
			}
			echo '
				<th colspan="6" style="font-weight: normal;font-size: 12px;font-family: Tahoma;padding: 5px;
				border-bottom-left-radius: 8px;border-bottom-right-radius: 8px; background-color: #153d55;
				color: white;" >&copy; 5 4 4 D </th> 
					
				</table>
				</center>
				</br>
				</br>
				';		
			//mysqli_free_result($arr);
?>




</body>
<center>
<?php
include"inc/footer.php";
$main->sqlClose();
?>
</center>
</html>
