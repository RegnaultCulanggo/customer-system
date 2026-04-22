<style>
body {
    font-family: Arial, sans-serif;
    margin: 20px;
    background: #f8f9fa;
}

h1 {
    margin-bottom: 10px;
}

a {
    margin-right: 10px;
    text-decoration: none;
    color: #0d6efd;
}

a:hover {
    text-decoration: underline;
}

table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    margin-top: 15px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

th, td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: left;
}

th {
    background: #76AAF5;
    color: black;
}

tr:nth-child(even) {
    background: #f2f2f2;
}

button {
    background: red;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}

button:hover {
    background: darkred;
}

.success {
    color: green;
    padding: 10px;
    background: #e6ffe6;
    border: 1px solid #b2ffb2;
    margin-bottom: 10px;
}
.success {
    color: #155724;
    background: #d4edda;
    padding: 10px;
    border: 1px solid #c3e6cb;
    margin-bottom: 10px;
    border-radius: 5px;
}

.update {
    color: #0c5460;
    background: #d1ecf1;
    padding: 10px;
    border: 1px solid #bee5eb;
    margin-bottom: 10px;
    border-radius: 5px;
}

.delete {
    color: #721c24;
    background: #f8d7da;
    padding: 10px;
    border: 1px solid #f5c6cb;
    margin-bottom: 10px;
    border-radius: 5px;
}
</style>

<h1>Customers List</h1>

<a href="/customers/create">+ Add Customer</a>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Actions</th>
    </tr>

    @foreach($customers as $customer)
    <tr>
    <td>{{ $customer->name }}</td>
    <td>{{ $customer->email }}</td>
    <td>{{ $customer->phone }}</td>
    <td>{{ $customer->address }}</td>

    <td>
        <a href="/customers/{{ $customer->id }}/edit">Edit</a>

        <form action="/customers/{{ $customer->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </td>
</tr>
    @endforeach
</table>
@if(session('success'))
    <div class="success">{{ session('success') }}</div>
@endif

@if(session('update'))
    <div class="update">{{ session('update') }}</div>
@endif

@if(session('delete'))
    <div class="delete">{{ session('delete') }}</div>
@endif