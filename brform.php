<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
            /* Set a light background color */
        }

        form {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            /* Set form background color */
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            /* Set label text color */
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 3px;
            transition: border-color 0.3s;
            /* Add a smooth transition effect for input borders */
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: #4caf50;
            /* Set focus color for input borders */
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            /* Add a smooth transition effect for button background */
        }

        button:hover {
            background-color: #45a049;
        }

        /* Popup Styles */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .popup-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }

        /* Additional Styles */
        /* Add this style to hide the fixed buttons initially */
        #fixedButtons {
            display: none;
        }
    </style>
</head>

<body>

    <form action="#" method="post" style="background-color: darkorange;">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="gmail">Gmail:</label>
        <input type="email" id="gmail" name="gmail" required>

        <label for="contact">Contact:</label>
        <input type="tel" id="contact" name="contact" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit">Submit</button>
    </form>

    <!-- Popup Form -->
    <div id="quotePopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <h2>Get a Quote</h2>
            <form id="quoteForm">
                <label for="popupName">Name:</label>
                <input type="text" id="popupName" name="popupName" required>

                <label for="popupEmail">Email:</label>
                <input type="email" id="popupEmail" name="popupEmail" required>

                <label for="popupPhoneNumber">Phone Number:</label>
                <input type="tel" id="popupPhoneNumber" name="popupPhoneNumber" required>

                <label for="popupMessage">Message:</label>
                <textarea id="popupMessage" name="popupMessage" rows="4" required></textarea>

                <button type="button" onclick="submitQuoteForm()">Submit</button>
            </form>
        </div>
    </div>
<script>
    // Popup Functions
    function openPopup() {
    document.getElementById('quotePopup').style.display = 'flex';
    }

    function closePopup() {
    document.getElementById('quotePopup').style.display = 'none';
    }

    // Submit Quote Form (You can replace this with your actual form submission logic)
    function submitQuoteForm() {
    // Add your form submission logic here

    // Close the popup after submission
    closePopup();
    }

</script>
</body>

</html>