<html>
	<head>
		<title>note counter</title>
	</head>
	<body>
		<h2>enter the count of your notes</h2>
		<?php 
          $_2k_note=$_POST['_2k_note'];
          $_500note=$_POST['_500_note'];
          $_200note=$_POST['_200_note'];
          $_100note=$_POST['_100_note'];
          $_50note=$_POST['_50_note'];
          $_20note=$_POST['_20_note'];
          $_10note=$_POST['_10_note'];

         // echo"value of  $_2k_note nos 2000inr is " . ($_2k_note*2000);
		?>
		<h2>===========================================</h2>
		<form method="post" action="note.php">
			2000:<input type="text" name="_2k_note">
			<?php echo " X ".$_2k_note."= " .($_2k_am=((int)$_2k_note*2000));?><br>
			500:<input type="text" name="_500_note">
			<?php echo " X ".$_500note."= " .($_500note_am=(((int)$_500note)*500));?><br>
			200:<input type="text" name="_200_note">
			<?php echo " X ".$_200note."= " .($_200note_am=(int)$_200note*200);?><br>
			100:<input type="text" name="_100_note">
			<?php echo " X ".$_100note."= " .($_100note_am=(int)$_100note*100);?><br>
			50:<input type="text" name="_50_note">
			<?php echo " X ".$_50note."= " .($_50note_am=(int)$_50note*50);?><br>
			20:<input type="text" name="_20_note">
			<?php echo " X ".$_20note."= " .($_20note_am=(int)$_20note*20);?><br>
			10:<input type="text" name="_10_note">
			<?php echo " X ".$_10note."= " .($_10note_am=(int)$_10note*10);?><br>
			<input type ="submit">
		</form>
		<h2>===========================================</h2>
		<?php
		$total=0;
          echo"total amount is: ".$total=$total+$_2k_am+$_500note_am+$_200note_am+$_100note_am+$_50note_am+$_20note_am+$_10note_am."inr";
		?>
		<h2>===========================================</h2>
		<?php
		 echo"no. of 2000inr is " .(int)0+(int)$_2k_note." nos <br> ";
		 echo"no. of 500inr is "  .(int)0+(int)$_500note. "nos <br> ";
		 echo"no. of 200inr is " .(int)0+(int)$_200note. "nos <br> ";
		 echo"no. of 100inr is "  .(int)0+(int)$_100note. "nos<br>  ";
		 echo"no. of 50inr is  ".(int)0+(int)$_50note. "nos <br> ";
		 echo"no. of 20inr is  ".(int)0+(int)$_20note. "nos <br> ";
		 echo"no. of 10inr is  ".(int)0+(int)$_10note. "nos <br> ";
	?>
		<h2>===========================================</h2>
		<?php
		$total_no_of_notes=0;
echo"total no. of notes:".$total_no_of_notes=(int)$total_no_of_notes+(int)$_2k_note+(int)$_500note+(int)$_200note+(int)$_100note+(int)$_50note+(int)$_20note+(int)$_10note."nos";
		?>
	</body>
</html>