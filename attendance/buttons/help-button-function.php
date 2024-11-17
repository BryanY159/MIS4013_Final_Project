<script>
  function startIntro() {
    const steps = [
      {
        intro: "Here you can view and edit a brother's attendance information.",
        title: "Attendance Page",
      },
      {
        element: '[data-step="1"]',
        intro: "Here you can see how many unexcused absences a brother has. It will turn red when they go over their free 4 unexcused absences.",
        title: "Total Column",
        position: 'bottom'
      },
      {
        element: '[data-step="2"]',
        intro: "If you have created a new brother, you will need to add them to the attendance list with this button. They will automatically be marked present for all events.",
        title: "Add Button",
        position: 'left'
      },
      {
        element: '[data-step="3"]',
        intro: "This grid of dropdown buttons can be used to edit attendance. Just click and change the status for any brother for any given event.",
        title: "Dropdown Buttons",
        position: 'left'
      },
      {
        element: '[data-step="4"]',
        intro: "Click the respective edit button if you would like to isolate a brother's attendance to edit. This will help avoid page reloading if you are editing multiple events for the same brother.",
        title: "Edit Button",
        position: 'left'
      },
      {
        intro: "After clicking the edit button, you can return to the entire attendance page by refreshing the page or clicking the back button (where the edit button was).",
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
