<!--
Author: Camden I. Wagner
File: disp_board.php

this bit is designed to randomly select one of my games from a preloaded file and display it in real time
-->

<!-- game.js file - full script file for the game object and methods associated with manipulating the game -->
<script type="text/javascript" src="http://www.schackmatt.net/js/game.js"></script>
<!-- local script on analysis_board.php that displays the game with a user interface -->
<script type="text/javascript">

var filepath = "./assets/lichess_ivarcode_2017-06-12.pgn";
var file = new File(filepath);

file.open("r");
while (!file.eof) {
	console.log(file.readln());
}


</script>


