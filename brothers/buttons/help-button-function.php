<script>
  function startIntro() {
    const steps = [
      {
        intro: "This is the Full Roster Page. Here you can view all information about our brothers."
      },
      {
        element: '#addBrotherButton',
        intro: "Click this add button if you would like to add a new brother into the database. Just fill out the form that appears and hit submit!",
        position: 'left'
      },
      {
        intro: "Temp"
      }
    ];
    introJs().setOptions({
      steps: steps
    })
    .start()
    .onexit(function() {
    });
  }
</script>
