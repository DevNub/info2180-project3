{"changed":true,"filter":false,"title":"sessions.php","tooltip":"/sessions.php","value":"<?php\n\n    session_start();\n    /*\n    $firstname = $_SESSION['firstname'];\n    $lastname = $_SESSION['lastname'];\n    $email = $_SESSION['email'];\n    $password = $_SESSION['password'];\n    $job_title = $_SESSION['job_title'];\n    $job_description = $_SESSION['job_description'];\n    $company = $_SESSION['company'];\n    $location = $_SESSION['location'];*/\n    \n    $user_check=$_SESSION['login_user'];\n    $find = $conn->query(\"SELECT firstname, lastname FROM Users WHERE email='$user_check'\");\n    $user_info = $find->fetchAll(PDO::FETCH_ASSOC);\n    $login_session = $user_info['firstname'];\n    \n    if(!isset($login_session)){\n        header('Location: index.php');\n    }\n\n    require 'hireme.php';\n?>","undoManager":{"mark":-2,"position":1,"stack":[[{"start":{"row":16,"column":37},"end":{"row":16,"column":38},"action":"remove","lines":["l"],"id":100},{"start":{"row":16,"column":36},"end":{"row":16,"column":37},"action":"remove","lines":["i"]},{"start":{"row":16,"column":35},"end":{"row":16,"column":36},"action":"remove","lines":["a"]},{"start":{"row":16,"column":34},"end":{"row":16,"column":35},"action":"remove","lines":["m"]},{"start":{"row":16,"column":33},"end":{"row":16,"column":34},"action":"remove","lines":["e"]}],[{"start":{"row":16,"column":33},"end":{"row":16,"column":34},"action":"insert","lines":["f"],"id":101},{"start":{"row":16,"column":34},"end":{"row":16,"column":35},"action":"insert","lines":["i"]},{"start":{"row":16,"column":35},"end":{"row":16,"column":36},"action":"insert","lines":["r"]},{"start":{"row":16,"column":36},"end":{"row":16,"column":37},"action":"insert","lines":["s"]},{"start":{"row":16,"column":37},"end":{"row":16,"column":38},"action":"insert","lines":["t"]},{"start":{"row":16,"column":38},"end":{"row":16,"column":39},"action":"insert","lines":["n"]},{"start":{"row":16,"column":39},"end":{"row":16,"column":40},"action":"insert","lines":["a"]},{"start":{"row":16,"column":40},"end":{"row":16,"column":41},"action":"insert","lines":["m"]},{"start":{"row":16,"column":41},"end":{"row":16,"column":42},"action":"insert","lines":["e"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":16,"column":42},"end":{"row":16,"column":42},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1543347095667}