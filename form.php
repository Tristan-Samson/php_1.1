<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="thanks.php" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="lastName" placeholder="nom" required>
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="firstName" placeholder="prenom" required>
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="email" placeholder="mail" required>
    </div>
    <div>
        <label for="telephone">Courriel :</label>
        <input id="telephone" name="phone" pattern="[0-9]{2}*[0-9]{2}*[0-9]{2}*[0-9]{2}*[0-9]{2}"
               placeholder="phone number"
               required type="tel">
    </div>
    <div>
        <label for="sujet">Sujet :</label>
        <select name="subject" id="sujet">
            <option value="Victor">Les références de Victor à Kaamelott</option>
            <option value="Tom">Le rap god en langue des signes de Tom</option>
            <option value="Nicolas">Les séances de radio matinales avec Nicolas</option>
            <option value="Trisan">Tristan et son obsession pour la cybersécurité</option>
        </select>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>
</body>
</html>
