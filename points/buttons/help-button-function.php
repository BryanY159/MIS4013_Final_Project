<script>
  function startIntro() {
    const steps = [
      {
        intro: "Here you can view and edit a brother's point information.",
        title: "Points Page",
      },
      {
        element: '[data-step="1"]',
        intro: "This will show if a brother has completed their point requirements, 5 service points and 3 brotherhood points. Clicking this icon will also filter the page by completed or incompleted brothers. You can unfilter by refreshing the page or clicking the back button that will replace the help button after filtering.",
        title: "Completed Column",
        position: 'bottom'
      },
      {
        element: '[data-step="2"]',
        intro: "These icons show how many points a brother has. It will be green if they have finished their points and grey if they have not.",
        title: "Service/Brotherhood Point Columns",
        position: 'left'
      },
      {
        element: '[data-step="3"]',
        intro: "Click the respective edit button if you would like to edit a brother's point totals. Just fill out the form that appears and hit submit!",
        title: "Edit Button",
        position: 'left'
      },
      {
        intro: "Conditional members do not have point requirements, so they won't appear on this list. Point values of -1 are for conditional members.",
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
