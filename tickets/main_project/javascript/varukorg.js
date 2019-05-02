document.addEventListener("DOMContentLoaded", function(){
    
    
    let newInt = +localStorage.getItem('quant');
    console.log(newInt);
    for (i = 0; i < newInt; i++) {
        let newTr = document.createElement('tr');
        let newHtml = `<td>${localStorage.eventname}</td>
        <td>Date</td>
        <td><?php echo $pin ?></td>`
        newTr.innerHTML = newHtml;
        let tbody = document.getElementById("inner");
        tbody.appendChild(newTr);
    }
    
    
    
    
    
});



   