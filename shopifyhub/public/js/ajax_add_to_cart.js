



function add_to_cart(products_id,csrf_tocken) {
    let json_data = {
      product_id: products_id

    };

    fetch('/add_to_cart', {
      method: "POST",
      body: JSON.stringify(json_data), // convert json_data to JSON string
      headers: {
        "Content-Type": "application/json",
        "Accept": "application/json",
        "X-Requested-With": "XMLHttpRequest",
        "X-CSRF-Token":csrf_tocken
      },
    }).then(result => result.text()).then(result => {
      alert(result)
    //   alert(result)
    })
  }



