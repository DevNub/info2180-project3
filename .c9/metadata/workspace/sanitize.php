{"filter":false,"title":"sanitize.php","tooltip":"/sanitize.php","undoManager":{"mark":31,"position":31,"stack":[[{"start":{"row":0,"column":0},"end":{"row":57,"column":2},"action":"insert","lines":["<?php","\t","\tif (isset($_POST[\"firstname\"])) {","\t\tfilter_var($_POST[\"firstname\"], FILTER_SANITIZE_STRING);","\t\t","\t}","","\telse{","\t\techo '';","\t}","","\tif (isset($_POST[\"lastname\"])) {","\t\tfilter_var($_POST[\"lastname\"], FILTER_SANITIZE_STRING);","\t\t","\t}","","\telse{","\t\techo '';","\t}","","\t","\t","\t ","","\tif (isset($_POST[\"password\"])) {","\t\tfilter_var($_POST[\"password\"], FILTER_SANITIZE_STRING);","\t\techo \"fin\";","\t}","","\telse{","\t\techo '';","\t}","","","","\t","\t ","","\tif (isset($_POST[\"email\"])) {","\t\tfilter_var($_POST[\"email\"], FILTER_SANITIZE_EMAIL);","\t\t","\t}","","\telse{","\t\techo '';","\t}","","\tif (isset($_POST[\"number\"])) {","\t\tfilter_var($_POST[\"number\"], FILTER_SANITIZE_STRING);","\t\t\t}","","\telse{","\t\techo '';","\t}","","","","?>"],"id":1}],[{"start":{"row":19,"column":0},"end":{"row":22,"column":2},"action":"remove","lines":["","\t","\t","\t "],"id":2}],[{"start":{"row":29,"column":0},"end":{"row":32,"column":1},"action":"remove","lines":["","","","\t"],"id":3},{"start":{"row":28,"column":2},"end":{"row":29,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":38,"column":2},"end":{"row":39,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":39,"column":0},"end":{"row":39,"column":1},"action":"insert","lines":["\t"]}],[{"start":{"row":40,"column":0},"end":{"row":40,"column":4},"action":"insert","lines":["    "],"id":5}],[{"start":{"row":40,"column":4},"end":{"row":41,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":41,"column":0},"end":{"row":41,"column":4},"action":"insert","lines":["    "]},{"start":{"row":41,"column":4},"end":{"row":41,"column":5},"action":"insert","lines":["/"]},{"start":{"row":41,"column":5},"end":{"row":41,"column":6},"action":"insert","lines":["/"]},{"start":{"row":41,"column":6},"end":{"row":41,"column":7},"action":"insert","lines":["s"]},{"start":{"row":41,"column":7},"end":{"row":41,"column":8},"action":"insert","lines":["a"]},{"start":{"row":41,"column":8},"end":{"row":41,"column":9},"action":"insert","lines":["n"]},{"start":{"row":41,"column":9},"end":{"row":41,"column":10},"action":"insert","lines":["i"]}],[{"start":{"row":41,"column":10},"end":{"row":41,"column":11},"action":"insert","lines":["t"],"id":7},{"start":{"row":41,"column":11},"end":{"row":41,"column":12},"action":"insert","lines":["i"]},{"start":{"row":41,"column":12},"end":{"row":41,"column":13},"action":"insert","lines":["z"]},{"start":{"row":41,"column":13},"end":{"row":41,"column":14},"action":"insert","lines":["e"]}],[{"start":{"row":41,"column":14},"end":{"row":41,"column":15},"action":"insert","lines":[" "],"id":8},{"start":{"row":41,"column":15},"end":{"row":41,"column":16},"action":"insert","lines":["p"]},{"start":{"row":41,"column":16},"end":{"row":41,"column":17},"action":"insert","lines":["h"]},{"start":{"row":41,"column":17},"end":{"row":41,"column":18},"action":"insert","lines":["o"]},{"start":{"row":41,"column":18},"end":{"row":41,"column":19},"action":"insert","lines":["n"]},{"start":{"row":41,"column":19},"end":{"row":41,"column":20},"action":"insert","lines":["e"]}],[{"start":{"row":41,"column":20},"end":{"row":41,"column":21},"action":"insert","lines":[" "],"id":9},{"start":{"row":41,"column":21},"end":{"row":41,"column":22},"action":"insert","lines":["n"]},{"start":{"row":41,"column":22},"end":{"row":41,"column":23},"action":"insert","lines":["u"]},{"start":{"row":41,"column":23},"end":{"row":41,"column":24},"action":"insert","lines":["m"]},{"start":{"row":41,"column":24},"end":{"row":41,"column":25},"action":"insert","lines":["b"]},{"start":{"row":41,"column":25},"end":{"row":41,"column":26},"action":"insert","lines":["e"]},{"start":{"row":41,"column":26},"end":{"row":41,"column":27},"action":"insert","lines":["r"]}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "],"id":10}],[{"start":{"row":30,"column":4},"end":{"row":30,"column":5},"action":"insert","lines":["/"],"id":11},{"start":{"row":30,"column":5},"end":{"row":30,"column":6},"action":"insert","lines":["/"]},{"start":{"row":30,"column":6},"end":{"row":30,"column":7},"action":"insert","lines":["s"]},{"start":{"row":30,"column":7},"end":{"row":30,"column":8},"action":"insert","lines":["a"]},{"start":{"row":30,"column":8},"end":{"row":30,"column":9},"action":"insert","lines":["n"]},{"start":{"row":30,"column":9},"end":{"row":30,"column":10},"action":"insert","lines":["i"]},{"start":{"row":30,"column":10},"end":{"row":30,"column":11},"action":"insert","lines":["t"]},{"start":{"row":30,"column":11},"end":{"row":30,"column":12},"action":"insert","lines":["i"]},{"start":{"row":30,"column":12},"end":{"row":30,"column":13},"action":"insert","lines":["z"]}],[{"start":{"row":30,"column":13},"end":{"row":30,"column":14},"action":"insert","lines":["e"],"id":12}],[{"start":{"row":30,"column":14},"end":{"row":30,"column":15},"action":"insert","lines":[" "],"id":13},{"start":{"row":30,"column":15},"end":{"row":30,"column":16},"action":"insert","lines":["e"]},{"start":{"row":30,"column":16},"end":{"row":30,"column":17},"action":"insert","lines":["m"]},{"start":{"row":30,"column":17},"end":{"row":30,"column":18},"action":"insert","lines":["a"]},{"start":{"row":30,"column":18},"end":{"row":30,"column":19},"action":"insert","lines":["i"]},{"start":{"row":30,"column":19},"end":{"row":30,"column":20},"action":"insert","lines":["l"]}],[{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "],"id":14}],[{"start":{"row":20,"column":4},"end":{"row":20,"column":5},"action":"insert","lines":["/"],"id":15},{"start":{"row":20,"column":5},"end":{"row":20,"column":6},"action":"insert","lines":["/"]},{"start":{"row":20,"column":6},"end":{"row":20,"column":7},"action":"insert","lines":["s"]},{"start":{"row":20,"column":7},"end":{"row":20,"column":8},"action":"insert","lines":["a"]},{"start":{"row":20,"column":8},"end":{"row":20,"column":9},"action":"insert","lines":["n"]},{"start":{"row":20,"column":9},"end":{"row":20,"column":10},"action":"insert","lines":["i"]}],[{"start":{"row":20,"column":10},"end":{"row":20,"column":11},"action":"insert","lines":["t"],"id":16},{"start":{"row":20,"column":11},"end":{"row":20,"column":12},"action":"insert","lines":["i"]},{"start":{"row":20,"column":12},"end":{"row":20,"column":13},"action":"insert","lines":["z"]},{"start":{"row":20,"column":13},"end":{"row":20,"column":14},"action":"insert","lines":["e"]}],[{"start":{"row":20,"column":14},"end":{"row":20,"column":15},"action":"insert","lines":[" "],"id":17},{"start":{"row":20,"column":15},"end":{"row":20,"column":16},"action":"insert","lines":["p"]},{"start":{"row":20,"column":16},"end":{"row":20,"column":17},"action":"insert","lines":["a"]},{"start":{"row":20,"column":17},"end":{"row":20,"column":18},"action":"insert","lines":["s"]},{"start":{"row":20,"column":18},"end":{"row":20,"column":19},"action":"insert","lines":["s"]},{"start":{"row":20,"column":19},"end":{"row":20,"column":20},"action":"insert","lines":["w"]},{"start":{"row":20,"column":20},"end":{"row":20,"column":21},"action":"insert","lines":["o"]},{"start":{"row":20,"column":21},"end":{"row":20,"column":22},"action":"insert","lines":["r"]},{"start":{"row":20,"column":22},"end":{"row":20,"column":23},"action":"insert","lines":["d"]}],[{"start":{"row":9,"column":2},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":18},{"start":{"row":10,"column":0},"end":{"row":10,"column":1},"action":"insert","lines":["\t"]}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "],"id":19}],[{"start":{"row":11,"column":4},"end":{"row":11,"column":5},"action":"insert","lines":["/"],"id":20},{"start":{"row":11,"column":5},"end":{"row":11,"column":6},"action":"insert","lines":["/"]},{"start":{"row":11,"column":6},"end":{"row":11,"column":7},"action":"insert","lines":["s"]},{"start":{"row":11,"column":7},"end":{"row":11,"column":8},"action":"insert","lines":["a"]},{"start":{"row":11,"column":8},"end":{"row":11,"column":9},"action":"insert","lines":["n"]}],[{"start":{"row":11,"column":9},"end":{"row":11,"column":10},"action":"insert","lines":["i"],"id":21},{"start":{"row":11,"column":10},"end":{"row":11,"column":11},"action":"insert","lines":["t"]},{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"insert","lines":["i"]},{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"insert","lines":["z"]},{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"insert","lines":["e"]}],[{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"insert","lines":[" "],"id":22},{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":["l"]},{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"insert","lines":["a"]},{"start":{"row":11,"column":17},"end":{"row":11,"column":18},"action":"insert","lines":["s"]},{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"insert","lines":["t"]},{"start":{"row":11,"column":19},"end":{"row":11,"column":20},"action":"insert","lines":["n"]},{"start":{"row":11,"column":20},"end":{"row":11,"column":21},"action":"insert","lines":["a"]},{"start":{"row":11,"column":21},"end":{"row":11,"column":22},"action":"insert","lines":["m"]},{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"insert","lines":["e"]}],[{"start":{"row":0,"column":5},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":23}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":1},"action":"insert","lines":["/"],"id":24},{"start":{"row":2,"column":1},"end":{"row":2,"column":2},"action":"insert","lines":["/"]},{"start":{"row":2,"column":2},"end":{"row":2,"column":3},"action":"insert","lines":["S"]},{"start":{"row":2,"column":3},"end":{"row":2,"column":4},"action":"insert","lines":["A"]},{"start":{"row":2,"column":4},"end":{"row":2,"column":5},"action":"insert","lines":["N"]},{"start":{"row":2,"column":5},"end":{"row":2,"column":6},"action":"insert","lines":["I"]},{"start":{"row":2,"column":6},"end":{"row":2,"column":7},"action":"insert","lines":["T"]},{"start":{"row":2,"column":7},"end":{"row":2,"column":8},"action":"insert","lines":["I"]}],[{"start":{"row":2,"column":7},"end":{"row":2,"column":8},"action":"remove","lines":["I"],"id":25},{"start":{"row":2,"column":6},"end":{"row":2,"column":7},"action":"remove","lines":["T"]},{"start":{"row":2,"column":5},"end":{"row":2,"column":6},"action":"remove","lines":["I"]},{"start":{"row":2,"column":4},"end":{"row":2,"column":5},"action":"remove","lines":["N"]},{"start":{"row":2,"column":3},"end":{"row":2,"column":4},"action":"remove","lines":["A"]},{"start":{"row":2,"column":2},"end":{"row":2,"column":3},"action":"remove","lines":["S"]}],[{"start":{"row":2,"column":2},"end":{"row":2,"column":3},"action":"insert","lines":["s"],"id":26},{"start":{"row":2,"column":3},"end":{"row":2,"column":4},"action":"insert","lines":["a"]}],[{"start":{"row":2,"column":3},"end":{"row":2,"column":4},"action":"remove","lines":["a"],"id":27},{"start":{"row":2,"column":2},"end":{"row":2,"column":3},"action":"remove","lines":["s"]},{"start":{"row":2,"column":1},"end":{"row":2,"column":2},"action":"remove","lines":["/"]},{"start":{"row":2,"column":0},"end":{"row":2,"column":1},"action":"remove","lines":["/"]}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":4},"action":"insert","lines":["    "],"id":28}],[{"start":{"row":2,"column":4},"end":{"row":2,"column":5},"action":"insert","lines":["/"],"id":29},{"start":{"row":2,"column":5},"end":{"row":2,"column":6},"action":"insert","lines":["/"]},{"start":{"row":2,"column":6},"end":{"row":2,"column":7},"action":"insert","lines":["s"]},{"start":{"row":2,"column":7},"end":{"row":2,"column":8},"action":"insert","lines":["a"]},{"start":{"row":2,"column":8},"end":{"row":2,"column":9},"action":"insert","lines":["n"]},{"start":{"row":2,"column":9},"end":{"row":2,"column":10},"action":"insert","lines":["i"]},{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"insert","lines":["t"]}],[{"start":{"row":2,"column":11},"end":{"row":2,"column":12},"action":"insert","lines":["i"],"id":30},{"start":{"row":2,"column":12},"end":{"row":2,"column":13},"action":"insert","lines":["z"]},{"start":{"row":2,"column":13},"end":{"row":2,"column":14},"action":"insert","lines":["e"]}],[{"start":{"row":2,"column":14},"end":{"row":2,"column":15},"action":"insert","lines":[" "],"id":31},{"start":{"row":2,"column":15},"end":{"row":2,"column":16},"action":"insert","lines":["f"]},{"start":{"row":2,"column":16},"end":{"row":2,"column":17},"action":"insert","lines":["i"]},{"start":{"row":2,"column":17},"end":{"row":2,"column":18},"action":"insert","lines":["r"]},{"start":{"row":2,"column":18},"end":{"row":2,"column":19},"action":"insert","lines":["s"]},{"start":{"row":2,"column":19},"end":{"row":2,"column":20},"action":"insert","lines":["t"]}],[{"start":{"row":2,"column":20},"end":{"row":2,"column":21},"action":"insert","lines":["n"],"id":32},{"start":{"row":2,"column":21},"end":{"row":2,"column":22},"action":"insert","lines":["a"]},{"start":{"row":2,"column":22},"end":{"row":2,"column":23},"action":"insert","lines":["m"]},{"start":{"row":2,"column":23},"end":{"row":2,"column":24},"action":"insert","lines":["e"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":2,"column":24},"end":{"row":2,"column":24},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":21,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1543228959315,"hash":"624fad51f9e53de3d8b3e4da2874b138bd5ffa78"}