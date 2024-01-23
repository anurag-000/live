function toggle(btnID, eID) {
    var theRow = document.getElementById(eID);
    var theButton = document.getElementById(btnID);
    if (theRow.style.display == "none") {
      theRow.style.display = "table-row";
      theButton.setAttribute("aria-expanded", "true");
    } else {
      theRow.style.display = "none";
      theButton.setAttribute("aria-expanded", "false");
    }
  }
  
