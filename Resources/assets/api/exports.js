import { apiURL } from "./_constants";

async function exportAllProducts() {
    return axios.get(apiURL + '/all-products/');
}

export {
    exportAllProducts,
}
