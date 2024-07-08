document.addEventListener('DOMContentLoaded', function() {
    var qtyInputs = document.querySelectorAll('.qty');
    var plusBtns = document.querySelectorAll('.cart-qty-plus');
    var minusBtns = document.querySelectorAll('.cart-qty-minus');
    const prices = document.querySelectorAll('.price');
    const totalElement = document.querySelector('#total');

    function updateTotal() {
        let total = 0;
        for (let i = 0; i < qtyInputs.length; i++) {
            total += parseInt(qtyInputs[i].value) * parseFloat(prices[i].value);
        }
        totalElement.textContent = total;
    }



    plusBtns.forEach(function(btn, index) {
        btn.addEventListener('click', function() {
            var currentQty = parseInt(qtyInputs[index].value);
            var maxQty = parseInt(qtyInputs[index].getAttribute('max'));

            if (currentQty < maxQty) {
                qtyInputs[index].value = currentQty + 1;
                updateTotal();
                updateCartCount(index, currentQty + 1);
            }
        });
    });

    minusBtns.forEach(function(btn, index) {
        btn.addEventListener('click', function() {
            var currentQty = parseInt(qtyInputs[index].value);

            if (currentQty > 1) {
                qtyInputs[index].value = currentQty - 1;
                updateTotal();
                updateCartCount(index, currentQty - 1);
            }
        });
    });

    qtyInputs.forEach(function(input) {
        input.addEventListener('input', updateTotal);
    });

    updateTotal();
});

function deleteProduct(product_id){
    let deleteBtn = document.getElementById("deleteBtn");
    let json_data = {
        product_id: product_id
      };

      fetch('/deleteProduct', {
        method: "POST",
        body: JSON.stringify(json_data), // convert json_data to JSON string
        headers: {
          "Content-Type": "application/json",
          "Accept": "application/json",
          "X-Requested-With": "XMLHttpRequest",
          "X-CSRF-Token":document.querySelector('meta[name="csrf-token"]').content
        },
      })
      deleteBtn.style.display = "none"
    //   .then(result => result.text()).then(result => {
    //     alert(result)
      //   alert(result)
    //   })
}
// document.addEventListener('DOMContentLoaded', function() {
//     var qtyInputs = document.querySelectorAll('.qty');
//     var plusBtns = document.querySelectorAll('.cart-qty-plus');
//     var minusBtns = document.querySelectorAll('.cart-qty-minus');
//     const prices = document.querySelectorAll('.price');
//     const totalElement = document.querySelector('#total');

//     function updateTotal() {
//         let total = 0;
//         for (let i = 0; i < qtyInputs.length; i++) {
//             total += parseInt(qtyInputs[i].value) * parseFloat(prices[i].value);
//         }
//         totalElement.textContent = total.toFixed(2);
//     }

//     plusBtns.forEach(function(btn, index) {
//         btn.addEventListener('click', function() {
//             var currentQty = parseInt(qtyInputs[index].value);
//             var maxQty = parseInt(qtyInputs[index].getAttribute('max'));

//             if (currentQty < maxQty) {
//                 qtyInputs[index].value = currentQty + 1;
//                 updateTotal();
//             }
//         });
//     });

//     minusBtns.forEach(function(btn, index) {
//         btn.addEventListener('click', function() {
//             var currentQty = parseInt(qtyInputs[index].value);

//             if (currentQty > 1) {
//                 qtyInputs[index].value = currentQty - 1;
//                 updateTotal();
//             }
//         });
//     });

//     qtyInputs.forEach(function(input) {
//         input.addEventListener('input', updateTotal);
//     });

//     updateTotal();
// });






// // ajax

// function add_to_cart() {
//     let json_data = {
//       product_id: products_id

//     };

//     fetch('/add_to_cart', {
//       method: "POST",
//       body: JSON.stringify(json_data), // convert json_data to JSON string
//       headers: {
//         "Content-Type": "application/json",
//         "Accept": "application/json",
//         "X-Requested-With": "XMLHttpRequest",
//         "X-CSRF-Token":csrf_tocken
//       },
//     }).then(result => result.text()).then(result => {
//       alert(result)
//     //   alert(result)
//     })
//   }
// // ajax





// -----------------for-Shopping-cart-------------
$(document).ready(function(){
    update_amounts();
    $('.qty, .price').on('keyup keypress blur change', function(e) {
        update_amounts();
    });
});
function update_amounts(){
  var sum = 0.0;
        $('#myTable > tbody  > tr').each(function() {
          var qty = $(this).find('.qty').val();
            var price = $(this).find('.price').val();
            var amount = (qty*price)
            sum+=amount;
            $(this).find('.amount').text(''+amount);
        });
  $('.total').text(sum);
}



//----------------for quantity-increment-or-decrement-------
var incrementQty;
var decrementQty;
var plusBtn  = $(".cart-qty-plus");
var minusBtn = $(".cart-qty-minus");
var incrementQty = plusBtn.click(function() {
  var $n = $(this)
      .parent(".button-container")
      .find(".qty");
  $n.val(Number($n.val())+1 );
  update_amounts();
});

var decrementQty = minusBtn.click(function() {
      var $n = $(this)
      .parent(".button-container")
      .find(".qty");
  var QtyVal = Number($n.val());
  if (QtyVal > 0) {
      $n.val(QtyVal-1);
  }
  update_amounts();
});












