{"filter":false,"title":"hello-world.php","tooltip":"/hello-world.php","undoManager":{"mark":29,"position":29,"stack":[[{"start":{"row":9,"column":0},"end":{"row":10,"column":7},"action":"remove","lines":["</body>","</html>"],"id":1},{"start":{"row":8,"column":2},"end":{"row":9,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":12},"action":"remove","lines":["<html><body>"],"id":2},{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":1,"column":0},"end":{"row":3,"column":70},"action":"remove","lines":["// A simple web site in Cloud9 that runs through Apache","// Press the 'Run' button on the top to start the web server,","// then click the URL that is emitted to the Output tab of the console"],"id":3},{"start":{"row":1,"column":0},"end":{"row":12,"column":45},"action":"insert","lines":["$host = getenv('IP');","$username = getenv('C9_USER');","$password = '';","$dbname = 'world';","$country = htmlspecialchars($_GET['country']);","$all = htmlspecialchars($_GET['all']);","","$conn = new PDO(\"mysql:host=$host;dbname=$dbname\", $username, $password);","","$stmt = $conn->query(\"SELECT * FROM countries WHERE name LIKE '%$country%'\");","","$results = $stmt->fetchAll(PDO::FETCH_ASSOC);"]}],[{"start":{"row":4,"column":11},"end":{"row":4,"column":16},"action":"remove","lines":["world"],"id":4},{"start":{"row":4,"column":11},"end":{"row":4,"column":17},"action":"insert","lines":["schema"]}],[{"start":{"row":5,"column":7},"end":{"row":5,"column":8},"action":"remove","lines":["y"],"id":5},{"start":{"row":5,"column":6},"end":{"row":5,"column":7},"action":"remove","lines":["r"]},{"start":{"row":5,"column":5},"end":{"row":5,"column":6},"action":"remove","lines":["t"]},{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"remove","lines":["n"]},{"start":{"row":5,"column":3},"end":{"row":5,"column":4},"action":"remove","lines":["u"]},{"start":{"row":5,"column":2},"end":{"row":5,"column":3},"action":"remove","lines":["o"]},{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"remove","lines":["c"]}],[{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"insert","lines":["u"],"id":6},{"start":{"row":5,"column":2},"end":{"row":5,"column":3},"action":"insert","lines":["s"]},{"start":{"row":5,"column":3},"end":{"row":5,"column":4},"action":"insert","lines":["e"]},{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"insert","lines":["r"]}],[{"start":{"row":5,"column":32},"end":{"row":5,"column":39},"action":"remove","lines":["country"],"id":7},{"start":{"row":5,"column":32},"end":{"row":5,"column":33},"action":"insert","lines":["u"]},{"start":{"row":5,"column":33},"end":{"row":5,"column":34},"action":"insert","lines":["s"]},{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"insert","lines":["e"]},{"start":{"row":5,"column":35},"end":{"row":5,"column":36},"action":"insert","lines":["r"]}],[{"start":{"row":6,"column":3},"end":{"row":6,"column":4},"action":"remove","lines":["l"],"id":8},{"start":{"row":6,"column":2},"end":{"row":6,"column":3},"action":"remove","lines":["l"]},{"start":{"row":6,"column":1},"end":{"row":6,"column":2},"action":"remove","lines":["a"]}],[{"start":{"row":6,"column":1},"end":{"row":6,"column":2},"action":"insert","lines":["j"],"id":9},{"start":{"row":6,"column":2},"end":{"row":6,"column":3},"action":"insert","lines":["o"]},{"start":{"row":6,"column":3},"end":{"row":6,"column":4},"action":"insert","lines":["b"]}],[{"start":{"row":6,"column":31},"end":{"row":6,"column":34},"action":"remove","lines":["all"],"id":10},{"start":{"row":6,"column":31},"end":{"row":6,"column":32},"action":"insert","lines":["j"]},{"start":{"row":6,"column":32},"end":{"row":6,"column":33},"action":"insert","lines":["o"]},{"start":{"row":6,"column":33},"end":{"row":6,"column":34},"action":"insert","lines":["b"]}],[{"start":{"row":10,"column":36},"end":{"row":10,"column":45},"action":"remove","lines":["countries"],"id":11},{"start":{"row":10,"column":36},"end":{"row":10,"column":37},"action":"insert","lines":["j"]},{"start":{"row":10,"column":37},"end":{"row":10,"column":38},"action":"insert","lines":["o"]},{"start":{"row":10,"column":38},"end":{"row":10,"column":39},"action":"insert","lines":["b"]},{"start":{"row":10,"column":39},"end":{"row":10,"column":40},"action":"insert","lines":["s"]}],[{"start":{"row":10,"column":42},"end":{"row":10,"column":69},"action":"remove","lines":["HERE name LIKE '%$country%'"],"id":12},{"start":{"row":10,"column":41},"end":{"row":10,"column":42},"action":"remove","lines":["W"]},{"start":{"row":10,"column":40},"end":{"row":10,"column":41},"action":"remove","lines":[" "]}],[{"start":{"row":14,"column":32},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":13},{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"insert","lines":["/"]},{"start":{"row":15,"column":1},"end":{"row":15,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":15,"column":1},"end":{"row":15,"column":2},"action":"remove","lines":["/"],"id":14},{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"remove","lines":["/"]}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"insert","lines":["#"],"id":15}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"remove","lines":["#"],"id":16}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"insert","lines":["!"],"id":17}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"remove","lines":["!"],"id":18}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"insert","lines":["<"],"id":19},{"start":{"row":15,"column":1},"end":{"row":15,"column":2},"action":"insert","lines":["!"]},{"start":{"row":15,"column":2},"end":{"row":15,"column":3},"action":"insert","lines":["-"]}],[{"start":{"row":15,"column":3},"end":{"row":15,"column":4},"action":"insert","lines":["-"],"id":20}],[{"start":{"row":15,"column":4},"end":{"row":15,"column":5},"action":"insert","lines":[" "],"id":21},{"start":{"row":15,"column":5},"end":{"row":15,"column":6},"action":"insert","lines":["d"]},{"start":{"row":15,"column":6},"end":{"row":15,"column":7},"action":"insert","lines":["s"]},{"start":{"row":15,"column":7},"end":{"row":15,"column":8},"action":"insert","lines":["s"]}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"insert","lines":[" "],"id":22},{"start":{"row":15,"column":9},"end":{"row":15,"column":10},"action":"insert","lines":["-"]},{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"insert","lines":["-"]}],[{"start":{"row":15,"column":11},"end":{"row":15,"column":12},"action":"insert","lines":[">"],"id":23}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"insert","lines":["/"],"id":24},{"start":{"row":15,"column":1},"end":{"row":15,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":15,"column":13},"end":{"row":15,"column":14},"action":"remove","lines":[">"],"id":25},{"start":{"row":15,"column":12},"end":{"row":15,"column":13},"action":"remove","lines":["-"]},{"start":{"row":15,"column":11},"end":{"row":15,"column":12},"action":"remove","lines":["-"]},{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"remove","lines":[" "]},{"start":{"row":15,"column":9},"end":{"row":15,"column":10},"action":"remove","lines":["s"]},{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"remove","lines":["s"]},{"start":{"row":15,"column":7},"end":{"row":15,"column":8},"action":"remove","lines":["d"]},{"start":{"row":15,"column":6},"end":{"row":15,"column":7},"action":"remove","lines":[" "]},{"start":{"row":15,"column":5},"end":{"row":15,"column":6},"action":"remove","lines":["-"]},{"start":{"row":15,"column":4},"end":{"row":15,"column":5},"action":"remove","lines":["-"]},{"start":{"row":15,"column":3},"end":{"row":15,"column":4},"action":"remove","lines":["!"]}],[{"start":{"row":15,"column":2},"end":{"row":15,"column":3},"action":"remove","lines":["<"],"id":26}],[{"start":{"row":15,"column":2},"end":{"row":15,"column":3},"action":"insert","lines":["e"],"id":27},{"start":{"row":15,"column":3},"end":{"row":15,"column":4},"action":"insert","lines":["c"]},{"start":{"row":15,"column":4},"end":{"row":15,"column":5},"action":"insert","lines":["h"]},{"start":{"row":15,"column":5},"end":{"row":15,"column":6},"action":"insert","lines":["o"]}],[{"start":{"row":15,"column":6},"end":{"row":15,"column":7},"action":"insert","lines":[" "],"id":28}],[{"start":{"row":15,"column":7},"end":{"row":15,"column":8},"action":"insert","lines":["r"],"id":29},{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"insert","lines":["e"]},{"start":{"row":15,"column":9},"end":{"row":15,"column":10},"action":"insert","lines":["s"]},{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"insert","lines":["u"]},{"start":{"row":15,"column":11},"end":{"row":15,"column":12},"action":"insert","lines":["l"]},{"start":{"row":15,"column":12},"end":{"row":15,"column":13},"action":"insert","lines":["t"]},{"start":{"row":15,"column":13},"end":{"row":15,"column":14},"action":"insert","lines":["s"]}],[{"start":{"row":15,"column":7},"end":{"row":15,"column":8},"action":"insert","lines":["$"],"id":30}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":9,"column":0},"end":{"row":9,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1542931322814,"hash":"6f475e6602b6359ed1a41c689402cd74e9b6f69c"}