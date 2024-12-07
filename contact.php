<section id="contact" class="container">
    <h1>Contact</h1>
    <form action="send_form.php" method="POST">
        <div>
            <label for="first_name">Prénom :</label>
            <input type="text" id="first_name" name="first_name" required>
        </div>
        <div>
            <label for="last_name">Nom :</label>
            <input type="text" id="last_name" name="last_name" required>
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit">Envoyer</button>
    </form>
</section>