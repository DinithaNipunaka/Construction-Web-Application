let sqft = 0;
let cost = 0;


setInterval(function multiply() {

  let i1 = document.getElementById("i1").value;
  let l1 = document.getElementById("l1").value;
  let w1 = document.getElementById("w1").value;

  let i2 = document.getElementById("i2").value;
  let l2 = document.getElementById("l2").value;
  let w2 = document.getElementById("w2").value;

  let i3 = document.getElementById("i3").value;
  let l3 = document.getElementById("l3").value;
  let w3 = document.getElementById("w3").value;

  let i4 = document.getElementById("i4").value;
  let l4 = document.getElementById("l4").value;
  let w4 = document.getElementById("w4").value;

  let i5 = document.getElementById("i5").value;
  let l5 = document.getElementById("l5").value;
  let w5 = document.getElementById("w5").value;

  let i6 = document.getElementById("i6").value;
  let l6 = document.getElementById("l6").value;
  let w6 = document.getElementById("w6").value;

  let i7 = document.getElementById("i7").value;
  let l7 = document.getElementById("l7").value;
  let w7 = document.getElementById("w7").value;

  let i8 = document.getElementById("i8").value;
  let l8 = document.getElementById("l8").value;
  let w8 = document.getElementById("w8").value;

  let i9 = document.getElementById("i9").value;
  let l9 = document.getElementById("l9").value;
  let w9 = document.getElementById("w9").value;

  let i10 = document.getElementById("i10").value;
  let l10 = document.getElementById("l10").value;
  let w10 = document.getElementById("w10").value;

  let i11 = document.getElementById("i11").value;
  let l11 = document.getElementById("l11").value;
  let w11 = document.getElementById("w11").value;

  let i12 = document.getElementById("i12").value;
  let l12 = document.getElementById("l12").value;
  let w12 = document.getElementById("w12").value;

  
  let ilw1 = i1 * l1 * w1;
  let ilw2 = i2 * l2 * w2;
  let ilw3 = i3 * l3 * w3;
  let ilw4 = i4 * l4 * w4;
  let ilw5 = i5 * l5 * w5;
  let ilw6 = i6 * l6 * w6;
  let ilw7 = i7 * l7 * w7;
  let ilw8 = i8 * l8 * w8;
  let ilw9 = i9 * l9 * w9;
  let ilw10 = i10 * l10 * w10;
  let ilw11 = i11 * l11 * w11;
  let ilw12 = i12 * l12 * w12;

  var sqft = ilw1 + ilw2 + ilw3 + ilw4  + ilw5 + ilw6 + ilw7  + ilw8 + ilw9 + ilw10 + ilw11 + ilw12;
  // Cost for 1 square foot
  var sqft1 = 9500;
  var cost = sqft * sqft1;


  document.getElementById("ilw1").innerHTML = " = " + " " + ilw1.toFixed(2) + "ft²";
  document.getElementById("ilw2").innerHTML = " = " + " " + ilw2.toFixed(2) + "ft²";
  document.getElementById("ilw3").innerHTML = " = " + " " + ilw3.toFixed(2) + "ft²";
  document.getElementById("ilw4").innerHTML = " = " + " " + ilw4.toFixed(2) + "ft²";
  document.getElementById("ilw5").innerHTML = " = " + " " + ilw5.toFixed(2) + "ft²";
  document.getElementById("ilw6").innerHTML = " = " + " " + ilw6.toFixed(2) + "ft²";
  document.getElementById("ilw7").innerHTML = " = " + " " + ilw7.toFixed(2) + "ft²";
  document.getElementById("ilw8").innerHTML = " = " + " " + ilw8.toFixed(2) + "ft²";
  document.getElementById("ilw9").innerHTML = " = " + " " + ilw9.toFixed(2) + "ft²";
  document.getElementById("ilw10").innerHTML = " = " + " " + ilw10.toFixed(2)+ "ft²";
  document.getElementById("ilw11").innerHTML = " = " + " " + ilw11.toFixed(2) + "ft²";
  document.getElementById("ilw12").innerHTML = " = " + " " + ilw12.toFixed(2) + "ft²";

  document.getElementById("sqftgg").innerHTML = "Total sq. ft: " + sqft.toFixed(2) + " ft²";
  document.getElementById("sqft1gg").innerHTML = "Cost for 1 sq. ft: Rs " + sqft1.toFixed(2) + " (Standard Rating)";
  document.getElementById("costgg").innerHTML = "Total Cost: Rs " + cost.toFixed(2);

  document.getElementById("sqft").innerHTML = "Total sq. ft: " + sqft.toFixed(2) + " ft²";
  document.getElementById("sqft1").innerHTML = "Cost for 1 sq. ft: Rs " + sqft1.toFixed(2) + " (Standard Rating)";
  document.getElementById("cost").innerHTML = "Total Cost: Rs " + cost.toFixed(2);
  
  document.getElementById("sqftmodal").innerHTML = "Total sq. ft: " + sqft.toFixed(2) + " ft²";
  


}, 500);

function formatCurrency(value) {
  return "Rs " + value.toFixed(2);
}

function updateTotal(percentage) {
  let cost = parseFloat(document.getElementById('cost').textContent.split("Rs ")[1]);
  let fcost = cost + (cost * percentage);
  document.getElementById("fcost").innerHTML = formatCurrency(fcost);
}

function updateTotal2(percentage) {
  let fcost = parseFloat(document.getElementById('fcost').textContent.split("Rs ")[1]);
  let fcost2 = fcost + (fcost * percentage);
  document.getElementById("fcost2").innerHTML = formatCurrency(fcost2);
}

function updateTotal3(percentage) {
  let fcost2 = parseFloat(document.getElementById('fcost2').textContent.split("Rs ")[1]);
  let fcost3 = fcost2 + (fcost2 * percentage);
  document.getElementById("fcost3").innerHTML = formatCurrency(fcost3);
}

function updateTotal4(percentage) {
  let fcost3 = parseFloat(document.getElementById('fcost3').textContent.split("Rs ")[1]);
  let fcost4 = fcost3 + (fcost3 * percentage);
  document.getElementById("fcost4").innerHTML = formatCurrency(fcost4);
  document.getElementById("modalcost").innerHTML = formatCurrency(fcost4);
}


  
  
  
  
  
  

  
  
