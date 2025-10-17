<form action="{{route('bookings.update', $bookings->id)}}" method="POST" style="background:#fff; padding:30px; border-radius:10px; box-shadow:0 4px 20px rgba(0,0,0,0.1); width:100%; max-width:400px; margin:auto;">
    @csrf
    @method('PUT')
    <label for="name" style="display:block; margin-bottom:5px; font-weight:bold; color:#444;">Full Name</label>
    <input type="text" id="name" value="{{$bookings->name}}" name="name" placeholder="Enter full name" required
           style="width:100%; padding:10px; margin-bottom:15px; border:1px solid #ccc; border-radius:5px; font-size:14px;">

    <label for="phone" style="display:block; margin-bottom:5px; font-weight:bold; color:#444;">Phone Number</label>
    <input type="tel" id="phone" value="{{$bookings->phone}}" name="phone" placeholder="Enter phone number" required
           style="width:100%; padding:10px; margin-bottom:15px; border:1px solid #ccc; border-radius:5px; font-size:14px;">

    <label for="email" style="display:block; margin-bottom:5px; font-weight:bold; color:#444;">Email Address</label>
    <input type="email" id="email" value="{{$bookings->email}}" name="email" placeholder="Enter email" required
           style="width:100%; padding:10px; margin-bottom:15px; border:1px solid #ccc; border-radius:5px; font-size:14px;">

    <label for="address" style="display:block; margin-bottom:5px; font-weight:bold; color:#444;">Location Address</label>
    <input type="text" id="address" value="{{$bookings->address}}" name="address" placeholder="Enter location address" required
           style="width:100%; padding:10px; margin-bottom:15px; border:1px solid #ccc; border-radius:5px; font-size:14px;">

           {{-- update button --}}
     <button type="submit" style="width:100%; background-color:#28a745; color:white; border:none; padding:10px; border-radius:5px; font-size:16px; cursor:pointer;">Update Booking</button>
</form>
