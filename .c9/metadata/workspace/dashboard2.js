{"filter":false,"title":"dashboard2.js","tooltip":"/dashboard2.js","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":0,"column":0},"end":{"row":43,"column":2},"action":"insert","lines":["window.onload = function(){","    var jobList = document.getElementById(\"JobList\");","    var httpRequest = new XMLHttpRequest();","    var url = \"https://info2180-project3-drelaing.c9users.io/hireme.php?q=jobs&all=true\";","    httpRequest.onreadystatechange = doThis;","    httpRequest.open('GET', url);","    httpRequest.send();","    ","    var appliedFor = document.getElementById('appliedFor');","    var xml = new XMLHttpRequest();","    var url2 = \"https://info2180-project3-drelaing.c9users.io/userJobs.php?k=userJobs&all=true\";","    xml.onreadystatechange = doThat;","    xml.open('GET', url2);","    xml.send();","    ","  ","    function doThis(){","        if(httpRequest.readyState === XMLHttpRequest.DONE){","            if(httpRequest.status === 200){","                var response =httpRequest.responseText;","                jobList.innerHTML = response;","            }","            else{","                alert('Problem loading job listing');","            }","        }","        ","    }","    ","    function doThat(){","       if(xml.readyState === XMLHttpRequest.DONE){","            if(xml.status === 200){","                var response2 = xml.responseText;","                appliedFor.innerHTML = response2;","            }","            else{","                alert(\"Problem loading\");","            }","        } ","    }","    ","    ","    ","};"],"id":1}],[{"start":{"row":16,"column":1},"end":{"row":27,"column":5},"action":"remove","lines":["   function doThis(){","        if(httpRequest.readyState === XMLHttpRequest.DONE){","            if(httpRequest.status === 200){","                var response =httpRequest.responseText;","                jobList.innerHTML = response;","            }","            else{","                alert('Problem loading job listing');","            }","        }","        ","    }"],"id":2},{"start":{"row":16,"column":0},"end":{"row":16,"column":1},"action":"remove","lines":[" "]},{"start":{"row":15,"column":2},"end":{"row":16,"column":0},"action":"remove","lines":["",""]},{"start":{"row":15,"column":1},"end":{"row":15,"column":2},"action":"remove","lines":[" "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"remove","lines":[" "]},{"start":{"row":14,"column":4},"end":{"row":15,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":1,"column":0},"end":{"row":6,"column":23},"action":"remove","lines":["    var jobList = document.getElementById(\"JobList\");","    var httpRequest = new XMLHttpRequest();","    var url = \"https://info2180-project3-drelaing.c9users.io/hireme.php?q=jobs&all=true\";","    httpRequest.onreadystatechange = doThis;","    httpRequest.open('GET', url);","    httpRequest.send();"],"id":3}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":1,"column":0},"end":{"row":1,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1543699172018,"hash":"ccc5f9805cde6aa240915d68c03c1744a3f10fab"}