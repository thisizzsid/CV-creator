<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Creator</title>
    <style>
        /* Add some basic styling */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .hidden {
            display: none;
        }
        .fade-in {
            animation: fadeIn 1s forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <form id="cvForm" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone"><br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address"><br>
        <label for="linkedin">LinkedIn:</label>
        <input type="text" id="linkedin" name="linkedin"><br>
        <label for="github">GitHub:</label>
        <input type="text" id="github" name="github"><br>
        <label for="portfolio">Portfolio:</label>
        <input type="text" id="portfolio" name="portfolio"><br>
        <label for="school">School:</label>
        <input type="text" id="school" name="school"><br>
        <label for="degree">Degree:</label>
        <input type="text" id="degree" name="degree"><br>
        <label for="graduation">Graduation:</label>
        <input type="text" id="graduation" name="graduation"><br>
        <label for="company">Company:</label>
        <input type="text" id="company" name="company"><br>
        <label for="position">Position:</label>
        <input type="text" id="position" name="position"><br>
        <label for="start">Start:</label>
        <input type="text" id="start" name="start"><br>
        <label for="end">End:</label>
        <input type="text" id="end" name="end"><br>
        <button type="submit">Submit</button>
    </form>
    <div id="result" class="hidden">
        <!-- Placeholder for displaying submitted information -->
    </div>
    <script>
        document.getElementById('cvForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(event.target);
            const resultDiv = document.getElementById('result');
            resultDiv.innerHTML = `
                <h1>Submitted Information</h1>
                <h2>Personal Information</h2>
                Name: ${formData.get('name')}<br>
                Email: ${formData.get('email')}<br>
                Phone: ${formData.get('phone')}<br>
                Address: ${formData.get('address')}<br>
                LinkedIn: ${formData.get('linkedin')}<br>
                GitHub: ${formData.get('github')}<br>
                Portfolio: ${formData.get('portfolio')}<br>
                <h2>Education</h2>
                School: ${formData.get('school')}<br>
                Degree: ${formData.get('degree')}<br>
                Graduation: ${formData.get('graduation')}<br>
                <h2>Experience</h2>
                Company: ${formData.get('company')}<br>
                Position: ${formData.get('position')}<br>
                Start: ${formData.get('start')}<br>
                End: ${formData.get('end')}<br>
            `;
            resultDiv.classList.remove('hidden');
            resultDiv.classList.add('fade-in');
        });
    </script>
</body>
</html>
