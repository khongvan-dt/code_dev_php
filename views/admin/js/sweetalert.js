document.addEventListener("DOMContentLoaded", function() {
  const status = document.getElementById("status").value;
  const message = document.getElementById("message").value;

  if (status === "success") {
    Swal.fire({
      icon: 'success',
      title: message,  
      showConfirmButton: false,
      timer: 3000
    });
  } else if (status === "error") {
    Swal.fire({
      icon: 'error',
      title: message, 
      showConfirmButton: false,
      timer: 3000
    });
  }
});