fetch("./prodotti.json")
.then(response => response.json()) // the .json() method parses the JSON response into a JS object literal
.then(annunci =>{
    
    
    
    console.log(annunci)
    const mapCat = annunci.map((el)=>{ return el.category });
    
    
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
    
    //Wrappers Filtro Categorie
    const categorie = filtroCategorie(numCat(mapCat));
    const categoryWrapperA = document.querySelector('#categoryWrapperA');
    console.log(categoryWrapperA)
    categorie.forEach((item) => {
        let div = document.createElement("div")
        div.classList.add('form-check')
        div.innerHTML = `
        <input class="form-check-input" type="checkbox" value="" id="${item}">
        <label class="form-check-label" for="${item}">
        ${item}
        </label>`
        categoryWrapperA.appendChild(div)
    });
    

    //Filtro Marche
    function filtroBrand(annunci) {
        let brandArray = annunci.map((annuncio) => annuncio.brand_product);
        let arrayUnico = [...new Set(brandArray)];
        return arrayUnico;
      }
      console.log(filtroBrand(annunci))
    
    //Wrappers Filtro Marche
    const brand = filtroBrand(annunci)
    const brandWrapperA = document.querySelector('#brandWrapperA');
    console.log(brandWrapperA)
    brand.forEach((item) => {
        let div = document.createElement("div")
        div.classList.add('form-check')
        div.innerHTML = `
        <input class="form-check-input" type="checkbox" value="" id="${item}">
        <label class="form-check-label" for="${item}">
        ${item}
        </label>`
        
        brandWrapperA.appendChild(div)
    });

    //Wrapper Cards
    const cardWrapperA = document.querySelector('#cardWrapperA');
    console.log(cardWrapperA)
    
    const contentCard = annunci.map(annuncio => {
        return [annuncio.name_product, annuncio.category, annuncio.usage, annuncio.price, new Date(annuncio.pubblished), annuncio.img_url];
    });
    
    contentCard.forEach(el => {
        let div = document.createElement('div')
        div.classList.add('card', 'border-0', 'card-category', 'mb-5', 'p-3', 'box-color', 'mx-auto', 'd-flex', 'flex-column', 'justify-content-between', 'card-animation', 'card-width')
        div.innerHTML =`
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
          </div>
        </div>`
        cardWrapperA.appendChild(div)
    });
    
    
    
    
    
    
    
    
})