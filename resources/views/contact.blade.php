<form action="/contact" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea>
    </div>
    <div>
        <button type="submit">Send</button>
    </div>
</form>
