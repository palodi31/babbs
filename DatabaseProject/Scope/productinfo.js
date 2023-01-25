    // Get all product elements
    var products = document.querySelectorAll(".product");

    // Add a click event listener to each product
    products.forEach(function(product) {
      product.addEventListener("click", function() {
        // Get the product ID
        var productId = this.getAttribute("data-product-id");

        // Use the product ID to get additional information about the product (e.g. from an API)
        var productInfo = getProductInfo(productId);

        // Show the additional product information (e.g. in a modal or a tooltip)
        showProductInfo(productInfo);
      });
    });