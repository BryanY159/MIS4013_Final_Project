<script>
  function startIntro() {
    const steps = [
      {
        intro: "Here you can view, add, edit, and delete all brother information.",
        title: "Full Roster Page",
      },
      {
        element: '[data-step="1"]',
        intro: "Click this add button if you would like to add a new brother into the database. Just fill out the form that appears and hit submit!",
        title: "Add Button",
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
