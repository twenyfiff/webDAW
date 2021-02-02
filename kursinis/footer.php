</div>
</body>
</html>

<script type="text/javascript">
function toggleClass(el){
	if(el.className == "overlay active"){
		el.className = "overlay inactive";
	} else {
		el.className = "overlay active";
	}
}
</script>
<script type="text/javascript">
	$(document).ready(function(){
		var channel_max = 10;										// number of channels
		audiochannels = new Array();
		for (a=0;a<channel_max;a++) {									// prepare the channels
			audiochannels[a] = new Array();
			audiochannels[a]['channel'] = new Audio();						// create a new audio object
			audiochannels[a]['finished'] = -1;							// expected end time for this channel
		}
	});
	
	function play_multi_sound(s) {
		for (a=0;a<audiochannels.length;a++) {
			thistime = new Date();
			if (audiochannels[a]['finished'] < thistime.getTime()) {			// is this channel finished?
				audiochannels[a]['finished'] = thistime.getTime() + document.getElementById(s).duration*1000;
				audiochannels[a]['channel'].src = document.getElementById(s).src;
				audiochannels[a]['channel'].load();
				audiochannels[a]['channel'].play();
				break;
			}
		}
	}
</script>
<script>
function triggerAudio(event) {
    var x = event.which || event.keyCode;
    if(x == "96"){
    	if($("#zero > div").attr("class") == "overlay inactive"){
			play_multi_sound('Sample_0');
			$("#zero > div").toggleClass("active inactive");
		}
    } else if(x == "97"){
    	if($("#one > div").attr("class") == "overlay inactive"){
			play_multi_sound('Sample_1');
			$("#one > div").toggleClass("active inactive");
		}
	} else if(x == "98"){
		if($("#two > div").attr("class") == "overlay inactive"){
			play_multi_sound('Sample_2');
			$("#two > div").toggleClass("active inactive");
		}
	} else if(x == "99"){
		if($("#three > div").attr("class") == "overlay inactive"){
			play_multi_sound('Sample_3');
			$("#three > div").toggleClass("active inactive");
		}
    } else if(x == "100"){
    	if($("#four > div").attr("class") == "overlay inactive"){
			play_multi_sound('Sample_4');
			$("#four > div").toggleClass("active inactive");
		}
    } else if(x == "101"){
    	if($("#five > div").attr("class") == "overlay inactive"){
			play_multi_sound('Sample_5');
			$("#five > div").toggleClass("active inactive");
		}
    } else if(x == "102"){
    	if($("#six > div").attr("class") == "overlay inactive"){
			play_multi_sound('Sample_6');
			$("#six > div").toggleClass("active inactive");
		}
    } else if(x == "103"){
    	if($("#seven > div").attr("class") == "overlay inactive"){
			play_multi_sound('Sample_7');
			$("#seven > div").toggleClass("active inactive");
		}
    } else if(x == "104"){
    	if($("#eight > div").attr("class") == "overlay inactive"){
			play_multi_sound('Sample_8');
			$("#eight > div").toggleClass("active inactive");
		}
    } else if(x == "105"){
    	if($("#nine > div").attr("class") == "overlay inactive"){
			play_multi_sound('Sample_9');
			$("#nine > div").toggleClass("active inactive");
		}
    } else if(x == "106"){
    	if($("#mult > div").attr("class") == "overlay inactive"){
			play_multi_sound('Sample_multi');
			$("#mult > div").toggleClass("active inactive");
		}
    } else if(x == "107"){
    	if($("#plus > div").attr("class") == "overlay inactive"){
			play_multi_sound('Sample_plus');
			$("#plus > div").toggleClass("active inactive");
		}
    } else if(x == "109"){
    	if($("#minus > div").attr("class") == "overlay inactive"){
			play_multi_sound('Sample_minus');
			$("#minus > div").toggleClass("active inactive");
		}
    } else if(x == "110"){
    	if($("#dot > div").attr("class") == "overlay inactive"){
			play_multi_sound('Sample_dot');
			$("#dot > div").toggleClass("active inactive");
		}
    } else if(x == "111"){
    	if($("#div > div").attr("class") == "overlay inactive"){
			/* play_multi_sound('Sample_divi'); */
			$("#div > div").toggleClass("active inactive");
		}
    } else if(x == "13"){
    	if($("#enter > div").attr("class") == "overlay inactive"){
			play_multi_sound('Sample_enter');
			$("#enter > div").toggleClass("active inactive");
		}
    } else {
    }
}
</script>
<script>
function clearLights(event){
	var x = event.which || event.keyCode;
    if(x == "96"){
		$("#zero > div").toggleClass("active inactive");
    } else if(x == "97"){
		$("#one > div").toggleClass("active inactive");
	} else if(x == "98"){
		$("#two > div").toggleClass("active inactive");
	} else if(x == "99"){
		$("#three > div").toggleClass("active inactive");
    } else if(x == "100"){
		$("#four > div").toggleClass("active inactive");
    } else if(x == "101"){
		$("#five > div").toggleClass("active inactive");
    } else if(x == "102"){
		$("#six > div").toggleClass("active inactive");
    } else if(x == "103"){
		$("#seven > div").toggleClass("active inactive");
    } else if(x == "104"){
		$("#eight > div").toggleClass("active inactive");
    } else if(x == "105"){
		$("#nine > div").toggleClass("active inactive");
    } else if(x == "106"){
		$("#mult > div").toggleClass("active inactive");
    } else if(x == "107"){
		$("#plus > div").toggleClass("active inactive");
    } else if(x == "109"){
		$("#minus > div").toggleClass("active inactive");
    } else if(x == "110"){
		$("#dot > div").toggleClass("active inactive");
    } else if(x == "111"){
		$("#div > div").toggleClass("active inactive");
    } else if(x == "13"){
		$("#enter > div").toggleClass("active inactive");
    } else {
    }
}
</script>