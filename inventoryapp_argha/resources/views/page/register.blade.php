@extends('layout.master')
@section('title')
    Daftar
@endsection
@section('content')
    <h1>Buat Account Baru!</h1>
        <h2>Sign Up Form</h2>
        <a href="/">Kembali</a>
        <form action="/welcome" method="POST">
            @csrf

        <!-- Nama Depan dan Nama Belakang -->
        <label>First Name:</label><br>
        <input type="text" name="firstname"><br><br>
        <label>Last Name:</label><br>
        <input type="text" name="lastname"><br><br>

        <!-- Radio Gender -->
        <label>Gender:</label><br>
        <input type="radio" value="1" name="gender">Male<br>
        <input type="radio" value="2" name="gender">Female<br>
        <input type="radio" value="3" name="gender">Other<br><br>

        <!-- Dropdown Menu Negara -->
        <label>Nationality:</label><br><br>
        <select name="Nationality">
            <option value="1">Indonesia</option>
            <option value="2">Malaysia</option>
            <option value="3">Myanmar</option>
            <option value="4">Brunei</option>
            <option value="5">Singapore</option>
        </select><br><br>

        <!-- Checkbox Bahasa -->
        <label>Language Spoken:</label><br><br>
        <input type="checkbox" value="1" name="Language">Bahasa Indonesia<br>
        <input type="checkbox" value="2" name="Language">English<br>
        <input type="checkbox" value="3" name="Language">Other<br><br>

        <!-- TextArea Bio -->
        <label>Bio:</label><br><br>
        <textarea name="message" rows="10" cols="30"></textarea><br><br>
        <input type="submit" value="Sign Up">
        </form>
@endsection