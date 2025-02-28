@extends('layout.app')

@section('title', 'Welcome')

@section('content')
    <section class="section">
        <div class="text-center">
            <h1>HOME</h1>
        </div>
        <div class="container text-left">
            <h2>SanberBook</h2>
            <h3>Social Media Developer Santai Berkualitas</h3>
            <span>Belajar dan Berbagi agar hidup ini semakin santai berkualitas</span>
            <h3 class="mt-2">Benefit Join di SanberBook</h3>
            <ul>
                <li>Mendapatkan motivasi dari sesama developer</li>
                <li>Sharing knowledge dari para mastah Sanber</li>
                <li>Dibuat oleh calon web developer terbaik</li>
            </ul>
            <h3>Cara Bergabung ke SanberBook</h3>
            <ol>
                <li>Mengunjungi Website ini</li>
                <li>mendaftar di <a href="/register">Form Sign Up</a></li>
                <li>Dibuat oleh calon web developer terbaik</li>
            </ol>
        </div>
    </section>
@endsection
