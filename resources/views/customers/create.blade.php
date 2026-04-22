<h1>Add Customer</h1>

<form method="POST" action="/customers">
    @csrf

    <input type="text" name="name" placeholder="Name"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="text" name="phone" placeholder="Phone"><br>
    <textarea name="address" placeholder="Address"></textarea><br>

    <button type="submit">Save</button>
</form>