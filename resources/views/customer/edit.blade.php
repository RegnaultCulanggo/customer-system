<h1>Edit Customer</h1>

<form method="POST" action="/customers/{{ $customer->id }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $customer->name }}" placeholder="Name"><br><br>

    <input type="date" name="dob" value="{{ $customer->dob }}">

    <input type="text" name="phone" value="{{ $customer->phone }}" placeholder="Phone"><br><br>

    <textarea name="address" placeholder="Address">{{ $customer->address }}</textarea><br><br>

    <button type="submit">Update</button>
</form>

<br>
<a href="/customers">Back</a>