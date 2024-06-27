// async function send_new() {
//     let thisproduct_id = document.getElementById("1").value;
//     let comment = document.getElementById("2").value;
//     let ul = document.getElementById("ul")
//     let data = {
//         thisproduct_id: thisproduct_id,
//         comment: comment
//     };

//     let csrfToken = document.querySelector('meta[name="csrf-token"]').content; // Get the CSRF token from the meta tag


//     let response = await fetch(url, {
//         method: 'POST',
//         headers: {
//             'X-CSRF-TOKEN': csrfToken,
//             'Content-Type': 'application/json'
//         },
//         body: JSON.stringify(data)
//     });

//     if (response.ok) {
//         alert('Data sent successfully!');
//     } else {
//         alert('Error sending data.');
//     }


// }




async function send_new() {
    let thisproduct_id = document.getElementById("thisproduct_id").value;
    let comment = document.getElementById("comment").value;
    let data = {
      thisproduct_id: thisproduct_id,
      comment: comment,
      _token: document.querySelector('meta[name="csrf-token"]').content // Get the CSRF token from the meta tag
    };

    try {
      let response = await fetch('{{ route("add-comment") }}', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
      });

      if (response.ok) {
        let responseData = await response.json();
        alert(responseData.message);
        document.getElementById('comment').value = '';
        let commentList = document.getElementById('comment-list');
        let newComment = document.createElement('div');
        newComment.classList.add('comment');
        newComment.innerHTML = `
          <h4>${responseData.user.name}</h4>
          <p>${responseData.comment.text}</p>
        `;
        commentList.prepend(newComment);
      } else {
        let errorData = await response.json();
        alert(`Error adding comment: ${errorData.message}`);
      }
    } catch (error) {
      try {
        let errorData = await error.json();
        alert(`Error adding comment: ${errorData.message}`);
      } catch (parseError) {
        console.error('Error:', error);
        alert('An error occurred while adding the comment. Please try again later.');
      }
    }
  }
