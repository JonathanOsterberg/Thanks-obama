
<?php
/** Strings
 *	Formulär
 *	Jämförelser
 *	if - else, else if
 *	_GET()
 *	
 */
?>

<h1>Finding obama?</h1>

<?php
if ($_GET['player_name'] == NULL):
?>
<form action="index.php">
	<label>What's your name?</label>
	<input type="text" name="player_name">
	<input type="hidden" name="page" value="1">
	<input type="submit" value="Skicka">
</form>
<?php
elseif ($_GET['page'] == 1):
?>
<h2>Hello <? echo $_GET['player_name'] ?></h2>
<p>You are standing somewhere in a forest, to the west you see some smoke coming out of the top of a roof and to the west you see something that looks like water.</p>
<p>You are looking to fulfill your lifelong dream of meeting the president.</p>
<form action="index.php">
	<label>What direction will you go?</label><br>
	<input type="radio" name="page" value="2" id="west">
	<label for="west">West</label><br>
	<input type="radio" name="page" value="3" id="east">
	<label for="east">East</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 2):
?>
<h2>Cabin</h2>
<p>There definetly is a fire going on inside, but you dont see anyone there.</p>
<form action="index.php">
	<label>What will you do?</label><br>
	<input type="radio" name="page" value="4" id="west">
	<label for="west">Break into the cabin.</label><br>
	<input type="radio" name="page" value="3" id="east">
	<label for="east">Go towards the river.</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 3):
?>
<h2>River</h2>
<p>You find a peaceful river, and the stream is going towards the south.</p>
<form action="index.php">
	<label>What will you do?</label><br>
	<input type="radio" name="page" value="2" id="west">
	<label for="west">Go towards the cabin instead.</label><br>
	<input type="radio" name="page" value="6" id="south">
	<label for="east">Walk south alongside the river.</label><br>
	<input type="radio" name="page" value="7" id="north">
	<label for="east">Walk north alongside the river.</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 4):
?>
<h2>Getting inside the cabin</h2>
<p>First you try knocking on the door, no answer. Then you try simply opening the door, it's locked. You now try knocking down the door, the door falls down and you walk inside.</p>
<form action="index.php">
	<label>What will you do?</label><br>
	<input type="radio" name="page" value="5" id="west">
	<label for="west">Start looking inside the cabinets</label><br>
	<input type="radio" name="page" value="3" id="east">
	<label for="east">Go towards the river.</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 5):
?>
<h2>You hear a voice behind you</h2>
<p>"So this is what the youth of today do with their spare time? Breaking into old people's houses? I'll teach you a lesson..." You see a old man behind you, drawing his sword as you turn around, you are dead.</p>
<form action="index.php">
	<label>"Tip: Don't steal from people, your parents raised you better than that."</label><br>
	<input type="radio" name="page" value="1" id="west">
	<label for="west">Restart</label><br>
		<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 6):
?>
<h2>Southwards along the river.</h2>
<p>You find a raft, and a man sitting next to it. You ask him what he's doing here and he tells you: "I take people over the river." You recognize the voice but you can't really place it anywhere.</p>
<form action="index.php">
	<label>What will you do?</label><br>
	<input type="radio" name="page" value="8" id="west">
	<label for="west">Let the man take you over the river.</label><br>
	<input type="radio" name="page" value="7" id="south">
	<label for="east">Go north instead</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 7):
?>
<h2>Northwards along the river.</h2>
<p>You find a road, and a sign next to it. "<- Hammarland | Mariehamn ->"</p>
<form action="index.php">
	<label>What will you do?</label><br>
	<input type="radio" name="page" value="9" id="west">
	<label for="west">Go towards Hammarland.</label><br>
	<input type="radio" name="page" value="10" id="south">
	<label for="east">Go towards Mariehamn.</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 8):
?>
<h2>Raft</h2>
<p>You are about in the middle of the river and the stream is getting a whole lot faster, the man reveals himself as obama."I'am obama, and im only trying to run away from the country before trump fuck all this shit up."</p>
<form action="index.php">
	<label>What will you do?</label><br>
	<input type="radio" name="page" value="11" id="west">
	<label for="west">Ask obama if he can take you with him!</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 9):
?>
<h2>Hammarland</h2>
<p>You hear a sound, a horrific sound as if a machine was working on the brink of death, trying it's hardest to stay alive. It's getting closer and closer, until you see it, 3 motorcycles are heading towards you, you close your eyes.</p>
<form action="index.php">
	<label>"Tip: Don't go to Hammarland willingly, you stupid..."</label><br>
	<input type="radio" name="page" value="1" id="west">
	<label for="west">Lmao you diedead to a PV</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 10):
?>
<h2>Mariehamn</h2>
<p>As you are headed towards Mariehamn you hear a sound. "Git gud scrub." You start turning around, and you are dead.</p>
<form action="index.php">
	<label>"Tip: Git gudder"</label><br>
	<input type="radio" name="page" value="1" id="west">
	<label for="west">Restart.</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 11):
?>
<h2>Thanks, obama!</h2>
<p>Obama panics when you ask him the question, and suddenly tips the raft and you both drown, Thanks obama....</p>
<form action="index.php">
	<label>True ending</label><br>
	<input type="radio" name="page" value="1" id="west">
	<label for="west">Thanks obama</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
endif
?>