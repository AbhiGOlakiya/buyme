

document.addEventListener("DOMContentLoaded", function () {
    let img = document.querySelector(".main-img img");
    let user = document.querySelector(".user"); // Use querySelector to select the first element with the class "user"
    let one = true
    img.addEventListener("click", ()=>{
        
        if(one){    
        user.style.display = "block";
        // user.style.position = "absolute";

        one=false
        }
        else{
        user.style.display = "none";
        user.style.position = "absolute";
        one=true
        }
    });
});



