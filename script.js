async function fetchISTTime() {
    const apiKey = 'YOF38Z48VZ5H'; // Replace with your TimeZoneDB API key
    const apiUrl = `http://api.timezonedb.com/v2.1/get-time-zone?key=${apiKey}&format=json&by=zone&zone=Asia/Kolkata`;

    try {
        const response = await fetch(apiUrl);
        if (!response.ok) throw new Error('Failed to fetch time from server.');

        const data = await response.json();
        const istDateTime = new Date(data.formatted); // Get the IST date-time from API

        // Format and display the IST date and time
        updateDateTime(istDateTime);

        // Start the timer to update every second
        setInterval(() => {
            istDateTime.setSeconds(istDateTime.getSeconds() + 1);
            updateDateTime(istDateTime);
        }, 1000);
    } catch (error) {
        console.error('Error fetching time:', error);
        document.getElementById('date-time').textContent = 'Error fetching time';
    }
}

function updateDateTime(date) {
    const day = date.getDate().toString().padStart(2, '0');
    const month = date.toLocaleString('en-US', { month: 'short' });
    const year = date.getFullYear();
    const hours = date.getHours().toString().padStart(2, '0');
    const minutes = date.getMinutes().toString().padStart(2, '0');
    const seconds = date.getSeconds().toString().padStart(2, '0');

    const formattedDateTime = `${day}-${month}-${year} [${hours}:${minutes}:${seconds}]`;
    document.getElementById('date-time').textContent = formattedDateTime;
}

// Fetch and display IST time on page load
fetchISTTime();

// Contact us popup
function openPopup() {
    document.getElementById('contact-popup').style.display = 'flex';

    // Highlight the "Contact Us" link
    const contactLink = document.getElementById('contact-link');
    contactLink.classList.add('contact-active');
}

function closePopup() {
    document.getElementById('contact-popup').style.display = 'none';

    // Remove the highlight from the "Contact Us" link
    const contactLink = document.getElementById('contact-link');
    contactLink.classList.remove('contact-active');
}
