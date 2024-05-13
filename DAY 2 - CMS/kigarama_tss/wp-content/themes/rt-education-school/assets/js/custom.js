jQuery( document ).ready(function() {
  jQuery("h2.banner-title").each(function() {
    var t = jQuery(this).text();
    var splitT = t.split(" ");
    console.log(splitT);
    var halfIndex = 1;
    var newText = "";
    for(var i = 0; i < splitT.length; i++) {
      if(i == halfIndex) {
        newText += "<span style='color:#2AAA94'>";
        newText += splitT[i] + " ";
        newText += "</span>";
      }else{
        newText += splitT[i] + " ";
      }      
    }    
    jQuery(this).html(newText);
  });
});

jQuery( document ).ready(function() {
  jQuery("h2.category-heading").each(function() {
    var t = jQuery(this).text();
    var splitT = t.split(" ");
    console.log(splitT);
    var halfIndex = 2;
    var newText = "";
    for(var i = 0; i < splitT.length; i++) {
      if(i == halfIndex) {
        newText += "<span style='color:#2AAA94'>";
        newText += splitT[i] + " ";
        newText += "</span>";
      }else{
        newText += splitT[i] + " ";
      }      
    }    
    jQuery(this).html(newText);
  });
});