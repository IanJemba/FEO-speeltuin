<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulier met tekstvelden</title>
    <link rel="stylesheet" href="css/formulier.css">
</head>

<body>
    <div class="formTekstvelden">
        <ul>
            <h1>Contact Us</h1>
            <p>We'd love to get in touch and learn more about you. So, send us a <br> message and we'll reply as fast as we can</p>
        </ul>
        <hr>
        <div>
            <ul>
                <label>Your name</label><br>
                <input type="text" name="txtVoornaam" placeholder="First" autofocus>
                <input type="text" name="txtVoornaam" placeholder="Last" autofocus>
            </ul>
            <ul>
                <label>E-mail:</label><br>
                <label class="txtSmall">We're going to reply to your message by e-mail.</label><br>
                <input type="text" name="txtTussenvoegsels" placeholder="">
            </ul>
            <ul>
                <label>Phone:</label><br>
                <label class="txtSmall">Only if you want us to call you.</label><br>
                <input type="text" name="txtAchternaam" placeholder="### ### ####">
            </ul>
            <ul>
                <label>Your message:</label><br>
                <textarea></textarea>
            </ul>
        </div>
        <div>
            <button>SEND</button>
        </div>
    </div>
</body>

</html>