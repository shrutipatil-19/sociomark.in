@extends('Frontend.layout.app')

@push('styles')
<style>
    body {
        margin: 0;
        background: linear-gradient(135deg, #fff7f0, #ffe7d1);

        position: relative;
    }

    /* 🌟 Glassmorphism Wall */
    .wall {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        /* Optional: Sets a max width for better readability */
        margin: 50px auto;
        /* Optional: Centers it and adds vertical space */
        padding: 25px;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 15px;
        backdrop-filter: blur(12px);
        box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
        animation: fadeIn 0.6s ease-in-out;
        /* The line below has been removed: overflow: visible !important; */
        gap: 20px;
        align-items: flex-start;
    }


    .messages-container {
        flex: 1;
        max-height: 80vh;
        /* Set a maximum height to enable scrolling */
        overflow-y: auto;
        /* Adds a scrollbar when content exceeds max-height */
        padding-right: 10px;
        /* Optional: Adds some space for the scrollbar */

    }


    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(15px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    h2 {
        text-align: center;
        font-size: 2rem;
        font-weight: 700;
        color: #ff6600;
        margin-bottom: 5px;
        width: 100%;
    }

    .sec-para {
        font-size: 1rem;
        color: #444;
        margin-bottom: 25px;
        text-align: center;
        width: 100%;
    }

    /* 💌 Message Card Glass Style */
    .message {
        background: white;
        padding: 15px;
        border-radius: 12px;
        backdrop-filter: blur(8px);
        margin-bottom: 15px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: transform 0.3s ease;
    }

    .message:hover {
        transform: translateY(-3px);
    }

    .message strong {
        color: #c95f00;
        font-size: 1.1rem;
    }

    .message small {
        color: #777;
        font-size: 0.85rem;
    }

    /* Sticky Form */
    .form {

        position: sticky;
        top: 20px;
        background: white;
        padding: 15px;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        z-index: 10;
    }

    input,
    textarea {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        border-radius: 8px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        background: rgba(255, 255, 255, 0.25);
        color: #333;
        font-size: 1rem;
        border-color: var(--theme-color);
    }

    .sendbutton {
        background: #ff6600;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        transition: background 0.3s;
        width: 100%;
    }

    button:hover {
        background: #e65c00;
    }

    /* 🎈 Floating Background */
    .floating-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 0;
        overflow: hidden;
    }

    .floating-bg span {
        position: absolute;
        display: block;
        animation: floatAnimation linear infinite;
        opacity: 0.8;
    }

    .balloon {
        background: radial-gradient(circle, #ff6f61 0%, #ff4d4d 100%);
        border-radius: 50%;
        width: 40px;
        height: 50px;
    }

    .sparkle {
        background: white;
        border-radius: 50%;
        width: 6px;
        height: 6px;
        box-shadow: 0 0 8px white;
    }

    .petal {
        width: 20px;
        height: 20px;
        background: pink;
        border-radius: 50% 50% 50% 0;
        transform: rotate(45deg);
    }

    @keyframes floatAnimation {
        0% {
            transform: translateY(-10vh) rotate(0deg);
            opacity: 1;
        }

        100% {
            transform: translateY(110vh) rotate(360deg);
            opacity: 0;
        }
    }
</style>
@endpush

@section('content')
<!-- Floating Background -->
<div class="floating-bg">
    <span class="balloon" style="left:5%; animation-duration: 10s;"></span>
    <span class="balloon" style="left:25%; animation-duration: 12s;"></span>
    <span class="balloon" style="left:70%; animation-duration: 14s;"></span>
    <span class="sparkle" style="left:15%; animation-duration: 8s;"></span>
    <span class="sparkle" style="left:45%; animation-duration: 9s;"></span>
    <span class="sparkle" style="left:85%; animation-duration: 7s;"></span>
    <span class="petal" style="left:35%; animation-duration: 15s;"></span>
    <span class="petal" style="left:60%; animation-duration: 13s;"></span>
    <span class="petal" style="left:80%; animation-duration: 16s;"></span>
</div>

<!-- Main Wall -->
<h2 style="margin-top: 150px;">🎉 First Day <span class="text-blue">Wall</span></h2>
<p class="sec-para">Leave your wishes for our lfaunch and be part of our story!</p>
<div class="wall row ">
    <!-- Messages -->
    <div class="messages-container col-12 col-lg-6">
        @if(session('success'))
        <p style="color: green; text-align:center;">{{ session('success') }}</p>
        @endif

        @foreach($messages as $msg)
        <div class="message">
            <strong>{{ $msg->name }}</strong>
            <small>• {{ $msg->created_at->diffForHumans() }}</small>
            <p style="margin-top:8px;">{{ $msg->message }}</p>
        </div>
        @endforeach
    </div>

    <!-- Sticky Form -->
    <div class="form col-12 col-lg-6">
        <form action="{{ route('launch.wall.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Your name" required>
            <textarea name="message" placeholder="Your message" rows="4" required></textarea>
            <button type="submit" class="sendbutton">Send Wish 🎁</button>
        </form>
    </div>
</div>


<script>
    // Confetti Generator
    function createConfetti() {
        const footer = document.getElementById("footer-section");
        footer.style.position = "relative";
        footer.style.overflow = "hidden";

        for (let i = 0; i < 20; i++) {
            let confetti = document.createElement("div");
            confetti.classList.add("confetti");
            confetti.style.left = Math.random() * 100 + "%";
            confetti.style.backgroundColor = ["#ff6600", "#ffc107", "#28a745", "#17a2b8"][Math.floor(Math.random() * 4)];
            confetti.style.animationDuration = (Math.random() * 3 + 2) + "s";
            footer.appendChild(confetti);
            setTimeout(() => confetti.remove(), 5000);
        }
    }
    setInterval(createConfetti, 1500);
</script>
@endsection