//switch case according to the product type
let productType = document.getElementById("productType");
let attributes = document.getElementById("attributes");
productType.addEventListener('change', switchValue)

function switchValue(){
    switch (productType.value) {
        case '0':
             attributes.innerHTML=`<div class="in-group">
                <label for="size">Size (MB)</label>
                <input type="number" step="0.01" class="form-control" name="size" id="size" required></div>
                <p>
                *  Product Desscription *   
                </p>
                `;
         break;
         case '1':
            attributes.innerHTML=`<div class="in-group">
                    <label for="weight">Weight(KG)</label>
                    <input type="number" step="0.01" class="form-control" id="weight" name="weight" required></div>
                    <p>
                        * Product Desscription *
                    </p>
                `;
        break;

        case '2':
            attributes.innerHTML=`<div class="in-group">
                    <label for="height">Height(CM)</label>
                    <input type="number" step="0.01" class="form-control" id="height" name="height" required><br></div><div class="in-group">
                    <label for="width">Width(CM)</label>
                    <input type="number" step="0.01" class="form-control" id="width" name="width" required><br></div><div class="in-group">
                    <label for="length">Length(CM)</label>
                    <input type="number" step="0.01" class="form-control" id="length" name="length" required><br></div>
                    <p>
                    * Product Desscription *
                    </p>
                `;
        break;
        }
    }

const nameField = document.querySelector("input");

nameField.addEventListener("input", () => {
  nameField.setCustomValidity("");
  nameField.checkValidity();
  console.log(nameField.checkValidity());
});

nameField.addEventListener("invalid", () => {
  nameField.setCustomValidity("Please, The field is required.");
});

