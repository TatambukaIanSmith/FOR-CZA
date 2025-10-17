<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>View Bookings</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f7fa;
      padding: 30px;
      margin: 0;
    }

    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    th, td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #007bff;
      color: white;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    .container {
      max-width: 800px;
      margin: auto;
    }

    a.button {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 15px;
      background-color: #007bff;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      text-align: center;
    }

    a.button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>All Hospital Checkup Bookings</h2>
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Address</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($bookings as $booking)
        <tr>
            <td>{{$booking->id}}</td>
            <td>{{$booking->name}}</td>
            <td>{{$booking->phone}}</td>
            <td>{{$booking->email}}</td>
            <td>{{$booking->address}}</td>
            <td>
                <form action="{{route('bookings.destroy',$booking->id)}}" method="post" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background-color:#dc3545; color:white; border:none; padding:5px 10px; border-radius:4px; cursor:pointer;">Delete</button>
                </form>

                <a href="{{ route('bookings.edit', $booking->id) }}" 
                   style="background-color:#28a745; color:white; border:none; padding:5px 10px; border-radius:4px; text-decoration:none; cursor:pointer; margin-left:5px;">
                   Edit
                </a>
            </td>
        </tr>     
        @endforeach
      </tbody>
    </table>
    <a href="{{route('bookings.create')}}" class="button">Add New Booking</a>
  </div>
</body>
</html>
