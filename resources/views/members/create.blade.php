@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Register New Member</h1>

    <form action="/members/add" method="post">
      @csrf
        <label for="fname">First name:</label>
        <input type="text" id="" name="firstName"><br><br>
        <label for="fname">Last name:</label>
        <input type="text" id="" name="lastName"><br><br>
        <label for="fname">Email:</label>
        <input type="email" id="" name="email"><br><br>
        <label for="fname">Mobile No:</label>
        <input type="text" id="" name="mobileNo"><br><br>
        <label for="fname">Street:</label>
        <input type="text" id="" name="street"><br><br>
        <label for="fname">City:</label>
        <input type="text" id="" name="city"><br><br>
        <label for="fname">State:</label>
        <input type="text" id="" name="state"><br><br>
        <label for="fname">Zip Code:</label>
        <input type="text" id="" name="zipCode"><br><br>
        <label for="fname">Date Of Birt:</label>
        <input type="text" id="" name="dateOfBirth"><br><br>
        <label for="fname">Join Date:</label>
        <input type="text" id="" name="dateOfJoining"><br><br>
        <label for="fname">Confirmation Date:</label>
        <input type="text" id="" name="dateOfConfirmation"><br><br>
        <input type="submit" value="Submit">
      </form> 
@endsection
