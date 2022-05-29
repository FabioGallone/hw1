
function onJSON(json){
    let prezzototale=0;

    const h2_1=document.createElement("h2");
    h2_1.textContent="CARRELLO";
    carrello.appendChild(h2_1);
    
    for(let maglia of json){
  
        const div= document.createElement("div");
        div.classList.add("contenuto");
        const h1= document.createElement("h1");
        const immagine= document.createElement("img");
        const flex= document.createElement("div");
        flex.classList.add("flex");

        const divinformazioni= document.createElement("div");
       

        const h2= document.createElement("h2");
        const h3= document.createElement("h3");
        const a = document.createElement("a");
        h1.textContent=maglia.nome;
        immagine.src=maglia.immagine;
        h2.textContent=maglia.descrizione;
        h3.textContent="€" + maglia.prezzo;

        a.textContent= "Rimuovi dal carrello";
        
        a.dataset.id_maglia = maglia.id_prodotto;
        
       a.addEventListener("click", eliminaEvento);
        
  

     
        prezzototale +=+ maglia.prezzo; 


        carrello= document.getElementById("carrello");

        carrello.appendChild(div);
        div.appendChild(h1);
        div.appendChild(flex);
        flex.appendChild(immagine);

        flex.appendChild(divinformazioni);
        divinformazioni.appendChild(h2);
        divinformazioni.appendChild(h3);
        divinformazioni.appendChild(a);




        
        /*
        echo "<div class='prezzo'>";
        echo "<h4>TOTALE PROVVISORIO: '$prezzotot' </h4>";
        echo "</div>";
        */
        


        
    }

    

    /* <div class='prezzo'>
        <h4>TOTALE PROVVISORIO: '$prezzotot' "</h4>";
        </div>
    */

    const div2= document.createElement("div");
    div2.classList.add("prezzo");
    const h4 = document.createElement("h4");
    h4.textContent= "TOTALE PROVVISORIO: €" + prezzototale;

    carrello.appendChild(div2);
    div2.appendChild(h4);

    /*
    <div id= "ordine" >
        <h4>TOTALE PROVVISORIO: '$prezzotot' "</h4>";
    </div>
    */

    //<label class="button"><input type="submit" name="2" value="AGGIUNGI AL CARRELLO"></label>
    

    const ordine= document.getElementById("ordine");
    const h4_1 = document.createElement("h4");
    h4_1.textContent= "TOTALE PROVVISORIO: €" + prezzototale;


    const form= document.createElement("form");
    form.method="POST";
    const label= document.createElement("label");
    label.placeholder="&nbsp;";

    label.classList.add("button");

    const input= document.createElement("input");
    input.type="submit";
    input.name="completaordine";
    input.value="ORDINA ORA";
    


    if(prezzototale!=0){
    ordine.appendChild(h4_1);

    ordine.appendChild(form);
    form.appendChild(label);

    label.appendChild(input);
    }




}

function eliminaEvento(event)
{

    const id_maglia = event.currentTarget.dataset.id_maglia;

    
    // Elimina l'evento
    fetch("cancellacookie.php?id_maglia=" + id_maglia).then(EliminaRimasuglio).then(aggiungiMaglietta);


    // Previeni il click sul link
    event.preventDefault();

}

function onResponse(response) {
    console.log('Risposta ricevuta');
    return response.json();
  }
  

function EliminaRimasuglio(){
    
    //let carrello = document.querySelectorAll("div.contenuto");
    let carrello= document.getElementById("carrello");
    let ordine= document.getElementById("ordine");

    //let h4= document.querySelectorAll("h4");

   // carrello.innerHTML= "";
    carrello.innerHTML="";
    ordine.innerHTML="";


    //h4.innerHTML="";
}


function aggiungiMaglietta(){

    fetch("carrellofetch.php").then(onResponse).then(onJSON);
    
}



aggiungiMaglietta();