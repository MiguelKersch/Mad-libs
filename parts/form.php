		<form method="post">
			Welk dier zou je nooit als huisdier willen hebben?<input type="text"name="vraag1" pattern="[a-zA-Z ]{1,}" value="" required><span class="error1"> <?php echo $emailErr;?>*</span><br><br>
			Wie is de belangrijkste persoon in je leven?<input type="text"name="vraag2" pattern="[a-zA-Z ]{1,}" value="" required><span class="error2"> <?php echo $emailErr;?>*</span><br><br>
			In welk land zou je graag willen wonen?<input type="text"name="vraag3" pattern="[a-zA-Z ]{1,}" value="" required><span class="error3"> <?php echo $emailErr;?>*</span><br><br>
			Wat doe je als je je verveelt?<input type="text"name="vraag4" pattern="[a-zA-Z ]{1,}" value="" required><span class="error4" > <?php echo $emailErr;?>*</span><br><br>
			Met welk speelgoed speelde je als kind het meest?<input type="text"name="vraag5" pattern="[a-zA-Z ]{1,}" value="" required><span class="error5"> <?php echo $emailErr;?>*</span><br><br>
			Bij welke docen spijbel je het liefst?<input type="text"name="vraag6" value="" pattern="[a-zA-Z ]{1,}" required><span class="error6"> <?php echo $emailErr;?>*</span><br><br>
			Als je €100.000,- had wat zou je dan kopen?<input type="text"name="vraag7" pattern="[a-zA-Z ]{1,}" value="" required><span class="error7"> <?php echo $emailErr;?>*</span><br><br>
			Wat is je favoriete bezigheid?<input type="text"name="vraag8" value="" pattern="[a-zA-Z ]{1,}" required><span class="error8"> <?php echo $emailErr;?>*</span><br><br>
	 	<input type="submit"  value="Submit">	
		</form>