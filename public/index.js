fetch("./prodotti.json")
.then(response => response.json()) // the .json() method parses the JSON response into a JS object literal
.then(annunci =>{
  
  const mediaFinale_ratingSeller = array => array.map(x => x.rating_seller).reduce((tot, el, i, arr) => tot + el / arr.length, 0);
  const prodottiCaricatiWrapper = document.querySelector("#prodottiCaricatiWrapper");  
  const mapCat = annunci.map((el)=>{ return el.category });
  const ultimoOggetto = annunci.pop();
  
  // Media rating products
  function mediaFinale_ratingProducts(array) {
    const mediaFinale = array.reduce((tot, el) => tot + el.rating_product, 0) / array.length;
    return mediaFinale;
  };
  
  
  // Inner dei prodotti
  let p = document.createElement("p");
  p.classList.add("display-3");
  p.innerText = ultimoOggetto.id;
  prodottiCaricatiWrapper.appendChild(p);
  
  // Rating products
  document.querySelector("#ratingProductsWrapper").innerHTML = `<p class="display-3">${Math.round(mediaFinale_ratingProducts(annunci))}</p>`; 
  // Rating sellers
  document.querySelector("#ratingSellerWrapper").innerHTML = `<p class="display-3">${Math.round(mediaFinale_ratingSeller(annunci))}</p>`;
  
  
  // Categorie
  function numCat(array) {
    const classificaObj ={}
    for (let i = 0; i < array.length; i++) {
      if (classificaObj.hasOwnProperty(array[i])) {
        classificaObj[`${array[i]}`] +=1
      } else {
        classificaObj[`${array[i]}`] = 1
      }
    } 
    return Object.entries(classificaObj)
  };
  
  //Filtro Categorie
  function filtroCategorie(array) {
    let arrayVuoto = []
    for (let i = 0; i < array.length; i++) {
      arrayVuoto.push(array[i][0])
    }
    return arrayVuoto
  };
  
  const categorie = filtroCategorie(numCat(mapCat));
  const slidesWrapper = document.querySelector("#slidesWrapper");
  categorie.forEach((el) => {
    let div = document.createElement("div")
    div.classList.add("swiper-slide")
    div.innerText = el;
    slidesWrapper.appendChild(div)
  });
  
  // dropDown Categorie nella navbar
  const categorieWrapper = document.querySelector("#categorieWrapper");
  categorie.forEach((item) => {
    let li = document.createElement("li")
    li.innerHTML = `<a class="dropdown-item font-text" href="#">${item}</a>`
    categorieWrapper.appendChild(li)
  });
  
  // ultimi prodotti...
  const lastUpdated = document.querySelector('#lastUpdated');
  console.log(lastUpdated)
  
  const contentCard = annunci.map(annuncio => {
    return [annuncio.name_product, annuncio.category, annuncio.usage, annuncio.price, new Date(annuncio.pubblished), annuncio.img_url];
  });
  
  const lastUpdateObject = contentCard.sort((a,b) => b[4] - a[4]).slice(0,4);
  
  lastUpdateObject.forEach(el => {
    let div = document.createElement('div')
    div.classList.add('col-12', 'col-md-3', 'mb-3', 'd-flex')
    div.innerHTML =`
    <div class="card border-0 card-category p-3 h-100 box-color mx-auto d-flex flex-column justify-content-between card-animation" style="width: 20rem;">
      <div>
        <img src="${el[5][0]}" height="200" alt="" class="card-img-top mb-2">
        <h5 class="card-title text-center fs-main bg-mix fs-3">${el[0]}</h5>
      </div>
      <div>
        <div class="card-body">                        
          <div class="mt-0">
            <div class="d-flex justify-content-between">
              <p class="card-text text-white mb-0 fs-main">Categoria:</p><span class="bg-mix fst-italic">${el[1]}</span>
            </div>
            <div class="d-flex justify-content-between">
              <p class="card-text text-white mb-0 fs-main">Stato:</p><span class="bg-mix fst-italic">${el[2] == false ? "Nuovo" : "Usato"}</span>
            </div>              
            <div class="d-flex justify-content-between">
              <p class="card-text text-white mb-0 fs-main">Prezzo:</p><span class="bg-mix fst-italic">${el[3]}</span>
            </div>   
            <div class="d-flex justify-content-between">
              <p class="card-text text-white mb-0 fs-main">Pubblicato:</p><span class="bg-mix fst-italic">${el[4].toLocaleDateString('it-IT', {year:"numeric", month:"short", day:"numeric"})}</span>
            </div>              
          </div>
          <div class="d-flex mt-4">              
            <button class="btn btn-category d-block ms-auto">
              <i class="bi bi-chevron-right text-white"></i>
            </button>
          </div>            
        </div>
      </div      
    </div>`
    lastUpdated.appendChild(div)
  });
  
  
  const prodottiCaricati = document.querySelector("#prodottiCaricati");
  activeLeftDir(prodottiCaricati, 467);
  const ratingProducts = document.querySelector("#ratingProducts");
  activeRightDir(ratingProducts, 881);
  const ratingSellers = document.querySelector("#ratingSellers");
  activeLeftDir(ratingSellers, 1302);
  
  
  function activeOpacity(elHTML, pixelActivation) {
    document.addEventListener("scroll", () => {
      let pxY = window.pageYOffset;
      console.log(pxY)
      if (pxY > pixelActivation) {
        elHTML.classList.remove("prodottiCaricatiRmv");
        elHTML.style.transition = "2s";
        elHTML.style.opacity = "1";
      } else if (pxY + 225 < pixelActivation) {
        elHTML.classList.add("prodottiCaricatiRmv");
        elHTML.style.transition = "1ms";
        elHTML.style.opacity = "0";
      }
    });
  };
  
  function activeLeftDir(elHTML, pixelActivation) {
    document.addEventListener("scroll", () => {
      let pxY = window.pageYOffset;
      console.log(pxY)
      if (pxY > pixelActivation) {
        elHTML.classList.remove("prodottiCaricatiRmv");
        elHTML.style.transform = "translateX(0px)";
        elHTML.style.transition = "2s";
        elHTML.style.opacity = "1";
      } else if (pxY + 250 < pixelActivation) {
        elHTML.classList.add("prodottiCaricatiRmv");
        elHTML.style.transform = "translateX(-1000px)";
        elHTML.style.transition = "1ms";
        elHTML.style.opacity = "0";
      }
    });
  };
  
  function activeRightDir(elHTML, pixelActivation) {
    document.addEventListener("scroll", () => {
      let pxY = window.pageYOffset;
      console.log(pxY)
      if (pxY > pixelActivation) {
        elHTML.classList.remove("prodottiCaricatiRmv");
        elHTML.style.transform = "translateX(0px)";
        elHTML.style.transition = "2s";
        elHTML.style.opacity = "1";
      } else if (pxY + 250 < pixelActivation) {
        elHTML.classList.add("prodottiCaricatiRmv");
        elHTML.style.transform = "translateX(1000px)";
        elHTML.style.display = "hidden";
        elHTML.style.transition = "1ms";
        elHTML.style.opacity = "0";
      }
    });
  };
  
  
  
  
  
  let swiper = new Swiper(".mySwiper", {
    spaceBetween: 24,
    loop: true,
    grabCursor: true,
    
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      576: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 5,
        spaceBetween: 45,
      },
    },
  })
  
  
  
  
});
