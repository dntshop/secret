<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Display</title>
</head>
<body>
    <div id="content"></div>
    <script>
        fetch('https://script.google.com/macros/s/AKfycbyEs3mt_3hDVGnc0bMDIsgJIpH3BMvjxfLrTtJ0ZikSedlJ-UT_0vYkPTerT6VCHCUa/exec')
            .then(response => response.text())
            .then(data => {
                document.getElementById('content').innerHTML = data;
            })
            .catch(error => {
                console.error('Error fetching content:', error);
            });
    </script>
</body>
</html>
