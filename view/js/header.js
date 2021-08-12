$(document).ready(function () {
    $("#sidebarCollapse").on("click", function () {
      $("#sidebar").addClass("active");
    });
  
    $("#sidebarCollapseX").on("click", function () {
      $("#sidebar").removeClass("active");
    });
  
    $("#sidebarCollapse").on("click", function () {
      if ($("#sidebar").hasClass("active")) {
        $(".overlay").addClass("visible");
        console.log("it's working!");
      }
    });
  
    $("#sidebarCollapseX").on("click", function () {
      $(".overlay").removeClass("visible");
    });
  });



  function filterage()
                    {
                      
                        var card=document.getElementsByClassName('cardselect');
                        
                         if(card[0].value!=""){ 
                      
                            var t1=document.querySelectorAll(".cardslegume");
                            for(var i=0;i<t1.length;i++){
                                t1[i].style.display="none";
                            }

                            var select=card[0].value;
                        
                            var t=document.querySelectorAll("."+select);
                              
                            for(var i=0;i<t.length;i++){
                                t[i].style.display="block";
                            }   
                  }
                    }

function cherchevide(){
                     var t1=document.querySelectorAll(".cardslegume");
                      for(var i=0;i<t1.length;i++){
                                t1[i].style.display="block";
                      }
}
