let buttons = Array.from(document.getElementsByClassName("expand-hour"))
let hour_tables = Array.from(document.getElementsByClassName("hour-output"))
buttons.forEach((button, index)=>{
    hour_tables[index].style.display = "none";
    button.addEventListener('click',(b)=>{
        if(hour_tables[index].style.display == "flex"){
            hour_tables[index].style.display = "none";
        }
        hour_tables.forEach((e)=>e.style.display="none")
        hour_tables[index].style.display = "flex";
        
    })
})
