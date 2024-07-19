<!DOCTYPE html>
<html>
<head>
    <title>DB Tracker</title>
    <style>
        body { background-color: black; color: white; font-size: small; }
        #messages { margin-top: 20px; }
    </style>
    <script>
        function fetchMessages() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var messages = JSON.parse(this.responseText);
                    var display = document.getElementById('messages');
                    display.innerHTML = ''; // Clear current messages
                    messages.forEach(function(message) {
                        var div = document.createElement('div');
                        div.textContent = message;
                        display.appendChild(div);
                    });
                }
            };
            xhr.open('GET', 'fetch_messages.php', true);
            xhr.send();
        }

        // Fetch messages every 5 seconds
        setInterval(fetchMessages, 5000);

        // Fetch messages when the page loads
        window.onload = fetchMessages;
    </script>
</head>
<body>
    <h1>Welcome to your DB Tracker</h1>
    <div id="messages"></div>
</body>
</html>

