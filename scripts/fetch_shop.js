
function onJSON(json){
    $i=0;
    /*
    
            <!--
            <div>            
            
                <img src="image/maglia1.jpg">
                <label class="button"><input type="submit" name="1" value="AGGIUNGI AL CARRELLO"></label>
                
            </div>

            <div>
                <img src="image/maglia2.jpg">
                <label class="button"><input type="submit" name="2" value="AGGIUNGI AL CARRELLO"></label>
            </div>

            <div>
                <img src="image/maglia3.jpg">
                <label class="button"><input type="submit" name="3" value="AGGIUNGI AL CARRELLO"></label>
            </div>
            -->*/

    for(let maglia of json){

    $i++;
    const div= document.createElement("div");
    
    const image= document.createElement("img");
    image.src= maglia.immagine;

    const label= document.createElement("label");
    label.classList.add("button1");

    const input= document.createElement("input");
 
   input.type="submit";
   input.name=$i;
   input.value="AGGIUNGI AL CARRELLO";

    let container= document.getElementById("flex_container");
    container.appendChild(div);

    div.appendChild(image);
    div.appendChild(label);
    label.appendChild(input);

    }

        




}







function onResponse(response) {
    console.log('Risposta ricevuta');
    return response.json();
  }
  


function aggiungiMaglietta()
{
    fetch("fetch.php").then(onResponse).then(onJSON);
}


aggiungiMaglietta();