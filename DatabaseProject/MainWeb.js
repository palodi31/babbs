 // JavaScript code goes here
 const addToCartButtons = document.querySelectorAll('.add-to-cart-button');
 addToCartButtons.forEach(button => {
     button.addEventListener('click', () => {
         alert('Product added to cart!');
     });
 });