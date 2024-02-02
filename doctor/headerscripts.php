<script>
  // Get the current time
  var currentTime = new Date();
  var currentHour = currentTime.getHours();
  var currentMinute = currentTime.getMinutes();

  // Function to format minutes with leading zero
  function formatMinutes(minutes) {
    return (minutes < 10 ? '0' : '') + minutes;
  }

  // Get the greeting element by its ID
  var greetingElement = document.getElementById('greeting');

  if (currentHour >= 5 && currentHour < 12) {
    greetingElement.textContent = 'Good Night ';
  } else if (currentHour >= 12 && currentHour < 24) {
    greetingElement.textContent = 'Good Morning';
  } else {
    greetingElement.textContent = 'Good After';
  }

  // Combine username and greeting in one line
  greetingElement.textContent += ' ';

  // Add a custom greeting for 11:40
  if (currentHour === 11 && currentMinute === 40) {
    greetingElement.innerHTML += '<br>Special greeting for 11:40!';
  }

  // Function to change h3 content one by one
  function changeH3ContentSequentially() {
    // Select the h3 element
    var h3Element = document.getElementById('slogan');

    // Array of slogans
    var slogans = [
      "Your Wellness Matters",
      "Nurturing Health, Embracing Care",
      "Dedicated to Your Well-being"
    ];

    // Function to update slogan with a delay
    function updateSlogan(index) {
      // Update the content of h3 element
      h3Element.innerText =  slogans[index] ;

      // Increment index for the next slogan
      index++;

      // Change slogan every 5 seconds, if there are more slogans
      if (index < slogans.length) {
        setTimeout(function () {
          updateSlogan(index);
        }, 5000);
      }
    }

    // Start updating slogans
    updateSlogan(0);
  }

  
  setTimeout(changeH3ContentSequentially, 1000);
</script>

