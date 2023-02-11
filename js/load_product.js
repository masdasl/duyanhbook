let thisPage = 1;
let limit ;
let product = document.querySelectorAll('.product');
// load product
function setLimit(number){
	limit = number;
}
function loadProduct(limit) {
    let begin = limit * (thisPage - 1);
    let end = limit * thisPage - 1;
    product.forEach((item, key) => {
        if (key >= begin && key <= end) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    })
    listPage(limit);
}
function listPage(limit) {
    let count = Math.ceil(product.length / limit);
    document.querySelector('.list-page').innerHTML = '';
    if (thisPage != 1) {
        let prev = document.createElement('li');
        prev.innerText = "PREV";
        prev.setAttribute('onclick', "changePage(" + (thisPage - 1) + ")");
        document.querySelector('.list-page').appendChild(prev);
    }
    for (i = 1; i <= count; i++) {
        let newPage = document.createElement('li');
        newPage.innerText = i;
        newPage.setAttribute('onclick', "changePage(" + i + ")");
        document.querySelector('.list-page').appendChild(newPage);
    }
    if (thisPage != count) {
        let next = document.querySelector('li');
        next.innerText = 'NEXT';
        next.setAttribute('onclick', "changePage(" + (thisPage + 1) + ")");
        document.querySelector('.list-page').appendChild(next);
    }
}
function changePage(i) {
    thisPage = i;
    loadProduct(limit);
}