function onJson(json) {
  console.log('JSON ricevuto');
 
  const box = document.querySelector('.flex_container');
  box.innerHTML = '';
  doc=json.parsed[0].food;
 
 
const nomepiatto = doc.label;
const image= doc.image;

const carboidrati= doc.nutrients.CHOCDF;

const kcal= doc.nutrients.ENERC_KCAL;

const grassi= doc.nutrients.FAT;

const proteine= doc.nutrients.PROCNT;


  const span= document.createElement('span');
  const div= document.createElement('div');
  const img = document.createElement('img');
  const h1 = document.createElement('h1');
  const p = document.createElement('p');
  const p1 = document.createElement('p');
  const p2 = document.createElement('p');
  const p3 = document.createElement('p');


  h1.textContent=nomepiatto + " (su 100g)";
  img.src=image;
  p.textContent=kcal + "kcal";
  p1.textContent=carboidrati+ "g di carboidrati";

  p2.textContent=grassi + "g di grassi";
  p3.textContent=proteine + "g di proteine"
  

  box.classList.add("altezza");
  box.appendChild(img);
  box.append(div);
  div.appendChild(span);
  span.appendChild(h1);
  div.appendChild(p);
  div.appendChild(p1);

  div.appendChild(p2);
  div.appendChild(p3);
 
  

  }


function onResponse(response) {
  console.log('Risposta ricevuta');
  return response.json();
}

function search(event)
{
  // Impedisci il submit del form
  event.preventDefault();

  const valore= document.querySelector('#food');
  const value_correct= encodeURIComponent(valore.value);
  rest_url = 'api_alimenti.php';
  url_completo= rest_url + "?cibo=" + value_correct;

  // Esegui fetch
  fetch(url_completo).then(onResponse).then(onJson);
}

// Aggiungi event listener al form
const form = document.querySelector('form');
form.addEventListener('submit', search);


