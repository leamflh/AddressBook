

function displayTable(){
    var req= new XMLHttpRequest();
    req.onreadystatechange=function(){
    if(req.readyState==4){
      if(req.status==200)
          document.getElementById("list").innerHTML=req.responseText;
                         }
                 }
                req.open('GET','table.php',true);
                req.send(null);
              }

function deleteData(id){
               
                var req= new XMLHttpRequest();
                req.onreadystatechange=function(){
                    if(req.readyState==4){
                        if(req.status==200)
                       displayTable();
                    
                    }
                }
                    req.open('GET','delete.php?id='+id,true);
                    req.send(null);
            }

function showHint(str) {
                if (str.length == '') {
                  displayTable();
                  return;
                } else {
                
                 
                  var xmlhttp = new XMLHttpRequest();
                  xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("list").innerHTML = this.responseText;
                    }
                  }
                  xmlhttp.open("GET", "gethint.php?q="+str, true);
                  xmlhttp.send();
                }
              } 


function modifyData(id) {
                
                window.location.href = "editPage.php?id="+id;
              }

           