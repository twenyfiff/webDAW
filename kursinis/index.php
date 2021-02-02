<?php
	include_once 'header.php';
?>
	
		<h1>Drumpad</h1>
		
		<audio id="Sample_0" src="sounds/0.wav" ></audio>
		<audio id="Sample_1" src="sounds/1.wav" ></audio>
		<audio id="Sample_2" src="sounds/2.wav" ></audio>
		<audio id="Sample_3" src="sounds/3.wav" ></audio>
		<audio id="Sample_4" src="sounds/4.wav" ></audio>
		<audio id="Sample_5" src="sounds/5.wav" ></audio>
		<audio id="Sample_6" src="sounds/6.wav" ></audio>
		<audio id="Sample_7" src="sounds/7.wav" ></audio>
		<audio id="Sample_8" src="sounds/8.wav" ></audio>
		<audio id="Sample_9" src="sounds/9.wav" ></audio>
		<audio id="Sample_dot" src="sounds/dot.wav" ></audio>
		<audio id="Sample_plus" src="sounds/plus.wav" ></audio>
		<audio id="Sample_minus" src="sounds/minus.wav" ></audio>
		<audio id="Sample_multi" src="sounds/multi.wav" ></audio>
		<audio id="Sample_enter" src="sounds/enter.wav" ></audio>
		
		<div class="container">
		  <div class="case">
			<div class="btn" id="mult"><div class="overlay inactive"onmousedown="toggleClass(this); play_multi_sound('Sample_multi');" onmouseup="toggleClass(this)"></div></div>
			<div class="btn" id="minus"><div class="overlay inactive"onmousedown="toggleClass(this); play_multi_sound('Sample_minus');" onmouseup="toggleClass(this)"></div></div>
			<div class="btn" id="seven"><div class="overlay inactive"onmousedown="toggleClass(this); play_multi_sound('Sample_7');" onmouseup="toggleClass(this)"></div></div>
			<div class="btn" id="eight"><div class="overlay inactive"onmousedown="toggleClass(this); play_multi_sound('Sample_8');" onmouseup="toggleClass(this)"></div></div>
			<div class="btn" id="nine"><div class="overlay inactive"onmousedown="toggleClass(this); play_multi_sound('Sample_9');" onmouseup="toggleClass(this)"></div></div>
			<div class="btn" id="plus"><div class="overlay inactive"onmousedown="toggleClass(this); play_multi_sound('Sample_plus');" onmouseup="toggleClass(this)"></div></div>
			<div class="btn" id="four"><div class="overlay inactive"onmousedown="toggleClass(this); play_multi_sound('Sample_4');" onmouseup="toggleClass(this)"></div></div>
			<div class="btn" id="five"><div class="overlay inactive" onmousedown="toggleClass(this); play_multi_sound('Sample_5');" onmouseup="toggleClass(this)"></div></div>
			<div class="btn" id="six"><div class="overlay inactive"onmousedown="toggleClass(this); play_multi_sound('Sample_6');" onmouseup="toggleClass(this)"></div></div>
			<div class="btn" id="one"><div class="overlay inactive"onmousedown="toggleClass(this); play_multi_sound('Sample_1');" onmouseup="toggleClass(this)"></div></div>
			<div class="btn" id="two"><div class="overlay inactive"onmousedown="toggleClass(this); play_multi_sound('Sample_2');" onmouseup="toggleClass(this)"></div></div>
			<div class="btn" id="three"><div class="overlay inactive"onmousedown="toggleClass(this); play_multi_sound('Sample_3');" onmouseup="toggleClass(this)"></div></div>
			<div class="btn" id="enter"><div class="overlay inactive"onmousedown="toggleClass(this); play_multi_sound('Sample_enter');" onmouseup="toggleClass(this)"></div></div>
			<div class="btn" id="zero"><div class="overlay inactive"onmousedown="toggleClass(this); play_multi_sound('Sample_0');" onmouseup="toggleClass(this)"></div></div>
			<div class="btn" id="dot"><div class="overlay inactive"onmousedown="toggleClass(this); play_multi_sound('Sample_dot');" onmouseup="toggleClass(this)"></div></div>
		  </div>
		</div>
		
<?php
	include_once 'footer.php';
?>		
	