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
        element: '[data-step="2"]',
        intro: "Click the respective edit button if you would like to edit a brother's information. Just fill out the form that appears and hit submit!",
        title: "Edit Button",
        position: 'left'
      },
      {
        element: '[data-step="3"]',
        intro: "Click the respective delete button if you would like to delete a brother from the database. This action cannot be undone and will erase all brother, point, and attendance data.",
        title: "Delete Button",
        position: 'left'
      },
      {
        intro: "You can edit point information here, but it can only be viewed outside the edit window on the Points page. Attendance can only be viewed and edited on the Attendance page.",
        title: "Additional Information",
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
