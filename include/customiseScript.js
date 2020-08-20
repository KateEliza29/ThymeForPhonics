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

  var changeFontDys = function() {
      document.body.style.fontFamily = 'OpenDyslexic';
      let buttons = document.getElementsByTagName("button");
      for (let i=0; i<buttons.length; i++) {
          document.getElementsByTagName("button")[i].style.fontFamily = 'OpenDyslexic';
      }
  }

  var changeFontQui = function() {
      document.body.style.fontFamily = 'Quicksand';
      let buttons = document.getElementsByTagName("button");
      for (let i=0; i<buttons.length; i++) {
          document.getElementsByTagName("button")[i].style.fontFamily = 'Quicksand';
      }
  }

  document.getElementById("openButton").addEventListener("click", openNav);
  document.getElementById("closeButton").addEventListener("click", closeNav);