window.addEventListener("load", initSite)

document.querySelector("#btnSave").addEventListener("click", addHoroscope)
document.querySelector("#btnUpdate").addEventListener("click", updateHoroscope)
document.querySelector("#btnDelete").addEventListener("click", deleteHoroscope)

async function initSite() { 
  

}

async function addHoroscope() {
    try {
        let date = document.querySelector("#inputDate").value
            if (date.length) {  

                let formData = new FormData()  
                formData.set("date", JSON.stringify(date)) 
    
                let result = await makeRequest("./server/addHoroscope.php",
                { method: "POST", 
                body: formData }) 
               

                viewHoroscope();
                return result

            } else {
                alert("Please fill in the field correctly!")  
                return
            }

        } catch(err) {
            throw err
    }

}


async function viewHoroscope() {
    try {
        let result = await makeRequest("./server/viewHoroscope.php", 
        { method: "GET" }) 

        if(result) {
            document.querySelector("#resultHoroscope").innerText = result.name; 

        } else {
            document.querySelector("#resultHoroscope").innerText = "";
        }

    } catch(err) {
        throw err
        
    }    

}

async function makeRequest(url, option) {
    try {
        let response = await fetch(url, option) 
        let result = await response.json()
        
        return result; 

    } catch(err) {  
        throw err

    }

}


async function updateHoroscope() {
    try {

        let date = document.querySelector("#inputDate").value
        if (date.length) {  

            let formData = new FormData()  
            formData.set("date", JSON.stringify(date)) 

            let result = await makeRequest("./server/updateHoroscope.php",
            { method: "POST", 
            body: formData }) 
            if(result){
                viewHoroscope()
            }else{
                console.log('Not able to update')
            }
           

        } else {
            alert("Please fill in the field correctly!")  
            return
        }

    }catch(err) {
        throw err

    }

} 


 async function deleteHoroscope() {

    try {
        let result = await makeRequest("./server/deleteHoroscope.php", 
        { method: "DELETE"})
        result = JSON.stringify(result)
        console.log(result) 
 

        if(result) {
            document.querySelector("#resultHoroscope").innerHTML = "Horoscope deleted"; 


        }
    }catch(err) {
        throw err

    }
    
 }

  /*   document.querySelector("#inputDate").value = "";
        console.log(deleteDate) */

             
        /* let deleteDate = document.querySelector("#btnDelete").value;
         */


    /*     if(deleteDate == ""){
            alert("Horoscope deleted!")

        }  */