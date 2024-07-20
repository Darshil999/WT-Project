document.addEventListener('DOMContentLoaded', function () {
    // Get the select element by its ID
    const selectElement = document.getElementById('redirect');
  
    // Add an event listener to the select element
    selectElement.addEventListener('change', function () {
      // Get the selected value
      const selectedValue = selectElement.value;
  
      // Redirect to the selected page if it's not the default option
      if (selectedValue !== 'default') {
        window.location.href = selectedValue;
      }
    });
  });
  