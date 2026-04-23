
@extends('layout.master')
@section('title', 'shop @garden')

@section('konten')



    <h1>Buat Account Baru!</h1>
    <h2><a href="/">back</h2> </a>
    <h2>Sign Up Form</h2>

    <form action="{{ url('register') }}" method="POST">
        @csrf
        <!-- First Name -->
        <label>First name:</label><br>
        <input type="text" name="firstname"><br>

        <!-- Last Name -->
        <label>Last name:</label><br>
        <input type="text" name="lastname"><br>

        <!-- Gender -->
        <div class="radio-group">
            <label>Gender:</label><br>
            <input type="radio" name="gender"> Male <br>
            <input type="radio" name="gender"> Female <br>
            <input type="radio" name="gender"> Other
        </div>

        <!-- Nationality -->
        <label>Nationality:</label><br>
        <select>
            <option>Indonesian</option>
            <option>Malaysian</option>
            <option>Singaporean</option>
        </select><br>

        <!-- Language -->
        <div class="checkbox-group">
            <label>Language Spoken:</label><br>
            <input type="checkbox"> Bahasa Indonesia <br>
            <input type="checkbox"> English <br>
            <input type="checkbox"> Other
        </div>

        <!-- Bio -->
        <label>Bio:</label><br>
        <textarea></textarea><br>

        <!-- Button -->
        <button type="submit">Sign Up</button>
    </form>

@endsection