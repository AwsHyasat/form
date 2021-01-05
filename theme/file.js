function change() {
    
    // var
    var input = document.getElementById("pass"),
    
    type = input.type,
    
    span = document.getElementById("show");
    
    if(type == "password") {
        
        input.type = "text";
        span.innerHTML = "اخفاء";
        
    } else {
        
        input.type = "password";
        span.innerHTML = "اظهار";
        
    }
    
}
