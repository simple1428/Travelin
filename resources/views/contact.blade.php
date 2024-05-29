 
<!-- resources/views/contact.blade.php -->

<h1>Contact Us</h1>

<form action="/contact" method="post">
    @csrf

    <label for="name">Name:</label>
    <input type="text" name="name" id="name">

    <label for="email">Email:</label>
    <input type="email" name="email" id="email">

    <label for="message">Message:</label>
    <textarea name="message" id="message"></textarea>

    <button type="submit">Send</button>
</form>
