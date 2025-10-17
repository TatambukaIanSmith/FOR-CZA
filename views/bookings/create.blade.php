<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Hospital Checkup Booking</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f7fa;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .form-container {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: #444;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
    }

    input:focus {
      border-color: #007bff;
      outline: none;
      box-shadow: 0 0 4px rgba(0, 123, 255, 0.2);
    }

    button {
      width: 100%;
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Hospital Checkup Booking</h2>
    <form action="{{route('bookings.store')}}" method="post">
        @csrf
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" placeholder="Enter your full name" required>

      <label for="phone">Phone Number</label>
      <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>

      <label for="address">Location Address</label>
      <input type="text" id="address" name="address" placeholder="Enter your location address" required>

    <button type="submit" >Make Booking</button>

    </form>
  </div>
</body>
</html>
