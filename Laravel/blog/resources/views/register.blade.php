@extends('layout.app')

@section('title', 'Welcome')

@section('content')
    <section class="section">
        <div class="text-center">
            <h1>REGISTER</h1>
        </div>
        <div class="container text-left">
            <form action="/welcome">
                <div class="mb-3">
                    <label>First Name:</label><br>
                    <input type="text" name="first_name">
                </div>
                <div class="mb-3">
                    <label>Last Name:</label><br>
                    <input type="text" name="last_name">
                </div>
                <div class="mb-3">
                    <label>Gender</label><br>
                    <input type="radio" name="male">
                    <label>Male</label><br>
                    <input type="radio" name="female">
                    <label>Female</label><br>
                    <input type="radio" name="other">
                    <label>Other</label>
                </div>
                <div class="mb-3">
                    <label>Nationality:</label><br>
                    <select name="nationality">
                        <option value="Indonesian">Indonesia</option>
                        <option value="English">English</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Language Spoken:</label><br>
                    <label>Gender</label><br>
                    <input type="checkbox" name="bahasa_indonesia">
                    <label>Bahasa Indonesia</label><br>
                    <input type="checkbox" name="english">
                    <label>English</label><br>
                    <input type="checkbox" name="other">
                    <label>Other</label>
                </div>
                <div class="mb-3">
                    <label>Bio:</label><br>
                    <textarea name="bio" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" value="Sign Up">
            </form>
        </div>
    </section>
@endsection
