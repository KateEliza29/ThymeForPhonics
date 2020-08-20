var openNav = function() {
    document.getElementById("customiseSidebar").style.width = "250px";
    document.getElementById("contentWrapper").style.marginLeft = "250px";
    document.getElementById("prevBtn").style.marginLeft = "250px";
  }
  
  var closeNav= function() {
    document.getElementById("customiseSidebar").style.width = "0";
    document.getElementById("contentWrapper").style.marginLeft= "0";
    document.getElementById("prevBtn").style.marginLeft = "0";
  }

  var swapStyleSheet = function(sheet){
      document.getElementById('pageStyle').setAttribute('href', sheet);
  }

  var changeFont = function(sheet){
      document.getElementById("fontStyle").setAttribute("href", sheet);
  }

  document.getElementById("openButton").addEventListener("click", openNav);
  document.getElementById("closeButton").addEventListener("click", closeNav);
