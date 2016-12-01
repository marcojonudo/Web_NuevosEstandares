/**
 * Main function to be executed at the start
 */
function loadFunctions(){
    loadMenuResponsive();
}

/**
 * Load responsive menu click on burguer button
 */
function loadMenuResponsive() {
    $("header .menu-button").click(
        function(){
            $(this).closest("header").toggleClass("active");
        }
    );
    
}

function addProduct(id, name, dPrice) {
	for (var i=0; i<localStorage.length; i++) {
		var key = localStorage.key(i);

		if (key == name) {
			var itemsNumber = localStorage.getItem(key);
			itemsNumber = parseInt(itemsNumber) + 1;
			localStorage.setItem(key, itemsNumber);
		}
		else {
			localStorage.setItem(name, 1);
		}
    }
    if (localStorage.length == 0) {
    	localStorage.setItem(name, 1);
    }
    updateDOM(id, dPrice);
}

function updateDOM(id, dPrice) {
	for (var i=0; i<localStorage.length; i++) {
		var key = localStorage.key(i);

		var cart_product = document.createElement("div");
		cart_product.className = "cart-product";
		
		var img = document.createElement("img");
		img.src = "./resources/" + id + ".jpg";

		var product_info = document.createElement("div");
		product_info.className = "product_info";
		var spanName = document.createElement("span");
		spanName.textContent = key;
		var div = document.createElement("div");
		var spanUnits = document.createElement("span");
		spanUnits.textContent = localStorage.getItem(key);
		var span = document.createElement("span");
		span.textContent = " unidades";
		div.appendChild(spanUnits)
			.appendChild(span);
		product_info.appendChild(spanName)
					.appendChild(div);

		var product_price = document.createElement("span");
		product_price.className = "product_price";
		product_price.textContent = localStorage.getItem(key) * dPrice;

		var product_buttons = document.createElement("div");
		product_buttons.className = "product-buttons";
		var buttonAdd = document.createElement("div");
		buttonAdd.className = "button";
		buttonAdd.addEventListener("click", addProduct, false);
		alert("4");
		var buttonRemove = document.createElement("div");
		buttonRemove.className = "button";
		buttonRemove.addEventListener("click", removeProduct, false);
		product_buttons.appendChild(buttonAdd)
						.appendChild(buttonRemove);

		cart_product.appendChild(img)
					.appendChild(product_info)
					.appendChild(product_price)
					.appendChild(product_buttons);

		var container = document.getElementById("cart-page");
		alert("7");
		alert(container);
		container.appendChild(cart_product);
		alert("si");
    }
    alert("fdase");
}

function removeProduct() {

}

function clear() {
	localStorage.clear();
	alert("Cleared");
}