const off = require('openfoodfacts-nodejs');
const client = new off();

const barcodes = ['5000112546415', '5449000011527'];

// Use map() method to retrieve product information for each barcode
const products = barcodes.map(barcode => {
    return client.getProduct(barcode);
});

// Use Promise.all() method to wait for all promises to resolve
Promise.all(products)
    .then(allProducts => {
        allProducts.forEach(product => {
            console.log(product.product.product_name);
        });
    })
    .catch(error => {
        console.error(error);
    });
