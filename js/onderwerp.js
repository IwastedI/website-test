
    // Haal de URL-parameters op
    const urlParams = new URLSearchParams(window.location.search);
    const subject = urlParams.get('subject');

    // Vul het formulier automatisch in als het onderwerp beschikbaar is
    if (subject) {
        document.getElementById('subject').value = subject;
    }
