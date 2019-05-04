document.addEventListener("DOMContentLoaded", function(){
    function updateCartPrice() {
        
        let priceElem = document.getElementById("total").innerText;
         let total=0;
         
         let int = parseInt(priceElem, 10)
         
         let total2 = total + (localStorage.price * localStorage.quant)
         
         document.getElementById("total").innerText = total2;
         
        
 } 

 updateCartPrice();


    let removeBtn = document.getElementsByClassName("remove-btn");
    for(i=0;i<removeBtn.length;i++){
        removeBtn[i].addEventListener("click", removeItem)
    }

    function removeItem(event){
        let clickedBtn = event.target
         clickedBtn.parentElement.parentElement.remove();
         localStorage.quant = localStorage.quant - 1
         updateCartPrice()
         random()
    }

   function random(){

       document.getElementById("ghost").setAttribute("value", localStorage.quant);
   }
   random();

   /* function sendData() {
        let local = localStorage;
        let string = JSON.stringify(local)
        string = JSON.parse(string);
        $.ajax({
            type: "POST",
            url: "retrieve_data.php",
            dataType: "text",
            data: {"data": string},
            success: function(data) {
                
                window.location.replace('landing.php?id=<?php echo $id ?>&price=<')
                
            }
        })
            
        }
*/
    
    });
    

    