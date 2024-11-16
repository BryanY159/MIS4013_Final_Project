<script>
  const toastMessage = "<?php echo $toastMessage; ?>";
  const toastType = "<?php echo $toastType; ?>";
  
  let backgroundColor;
  
  switch (toastType) {
    case "add":
      backgroundColor = "green";
      break;
    case "edit":
      backgroundColor = "yellow";
      break;
    case "delete":
      backgroundColor = "red";
      break;
    case "error":
      backgroundColor = "blue";
      break;
    default:
      backgroundColor = "gray";
  }
  
  if (toastMessage) {
    Toastify({
      text: toastMessage,
      duration: 3000,
      gravity: "top",
      position: "right",
      style: {
        background: backgroundColor,
        color: "black"
      }
    }).showToast();
  }
</script>
