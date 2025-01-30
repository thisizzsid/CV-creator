document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Form submitted successfully!');
            generatePDF();
        });
    });

    // Dynamic tips bar
    const tips = [
        "Make sure to fill in all the required fields.",
        "Double-check your information before submitting.",
        "Use a professional email address.",
        "Keep your CV concise and to the point.",
        "Highlight your most relevant experiences."
    ];

    let tipIndex = 0;
    const tipElement = document.querySelector('.right-aside p');

    function showNextTip() {
        tipElement.textContent = tips[tipIndex];
        tipIndex = (tipIndex + 1) % tips.length;
    }

    setInterval(showNextTip, 5000); // Change tip every 5 seconds
    showNextTip(); // Show the first tip immediately

    // Function to generate PDF
    function generatePDF() {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        doc.setFontSize(22);
        doc.text('CV Creator', 20, 20);

        doc.setFontSize(16);
        doc.text('Personal Information', 20, 40);
        doc.setFontSize(12);
        doc.text(`Name: ${document.getElementById('name').value}`, 20, 50);
        doc.text(`Email: ${document.getElementById('email').value}`, 20, 60);
        doc.text(`Phone: ${document.getElementById('phone').value}`, 20, 70);
        doc.text(`Address: ${document.getElementById('address').value}`, 20, 80);
        doc.text(`LinkedIn: ${document.getElementById('linkedin').value}`, 20, 90);
        doc.text(`GitHub: ${document.getElementById('github').value}`, 20, 100);
        doc.text(`Portfolio: ${document.getElementById('portfolio').value}`, 20, 110);

        doc.setFontSize(16);
        doc.text('Education', 20, 130);
        doc.setFontSize(12);
        doc.text(`School: ${document.getElementById('school').value}`, 20, 140);
        doc.text(`Degree: ${document.getElementById('degree').value}`, 20, 150);
        doc.text(`Graduation: ${document.getElementById('graduation').value}`, 20, 160);

        doc.setFontSize(16);
        doc.text('Experience', 20, 180);
        doc.setFontSize(12);
        doc.text(`Company: ${document.getElementById('company').value}`, 20, 190);
        doc.text(`Position: ${document.getElementById('position').value}`, 20, 200);
        doc.text(`Start: ${document.getElementById('start').value}`, 20, 210);
        doc.text(`End: ${document.getElementById('end').value}`, 20, 220);

        doc.save('cv.pdf');
    }
});
