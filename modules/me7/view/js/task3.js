function Add(){
    let objProduct = {
        strProductName: "",
        intUnitNumber: 0,
        decPrice:0.00,
        decQuantity:0.00,
        intTotal:0,
        dtExpiryDate:''
    }
    let doc = document.getElementById('strProductName');
    objProduct.strProductName = doc.value;

    doc = document.getElementById('intUnitNumber');
    objProduct.intUnitNumber = doc.value;

    doc = document.getElementById('decPrice');
    objProduct.decPrice = doc.value;

    doc = document.getElementById('decQuantity');
    objProduct.decQuantity = doc.value;

    doc = document.getElementById('intTotal');
    objProduct.intTotal = doc.value;

    doc = document.getElementById('dtExpiryDate');
    objProduct.dtExpiryDate = doc.value;

    console.log(objProduct);

    fetch("/hospital_version1/index.php?module=cal&page=Task&action=Task3", {
        method: "POST",
        body: JSON.stringify(objProduct),
        headers: {
          "Content-type": "application/json; charset=UTF-8"
        }
      });
}