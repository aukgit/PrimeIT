window.onload = function() {
    var x = [2,3,4];
    for(var i = 0; i < x.length; i++){
        var divElement = document.getElementById("display");
        console.log(divElement);
        divElement.innerHTML  +=  "<h1 class='generated-items'>" + x[i] +  "</h1>";
 
        
    }
    
    var $generated_items = $(".generated-items");
    
    console.log($generated_items);
    for(var k = 0 ; k < $generated_items.length; k++){
        var single_generated_item = $generated_items[k];
        
        var $single_generated_item = $(single_generated_item);
        $single_generated_item.click(function(e){
            var $h1 = $(this);
            if($h1.hasClass("green")){
               $h1.removeClass("green");
               $h1.addClass("red");
            } else if($h1.hasClass("red")) {
               $h1.removeClass("red");
               $h1.addClass("green"); 
            } else {
                $h1.addClass("green");
                $h1.removeClass("red");
                $h1.removeClass("brown");
            }
        });
        
    }
    
}