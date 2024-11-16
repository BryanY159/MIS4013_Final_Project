<script>
  document.querySelectorAll('.btn-danger').forEach(button => {
  button.addEventListener('click', function(event) {
      event.preventDefault();
      Swal.fire({
        title: 'Wait!',
        text: 'Are you sure you want to delete this brother?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No'
      }).then((result) => {
        if (result.isConfirmed) {
          button.closest('form').submit();
        }
      });
    });
  });
</script>
