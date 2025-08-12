@extends('Frontend.layout.app')

@push('styles')
<style>
    body {
        margin: 0;
        background: linear-gradient(135deg, #fff7f0, #ffe7d1);
        overflow-x: hidden;
        position: relative;
    }

    /* 🌟 Glassmorphism Wall */
    .wall {
        position: relative;
        z-index: 1;
        max-width: 100%;
        margin: auto;
        padding: 25px;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 15px;
        backdrop-filter: blur(12px);
        box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
        animation: fadeIn 0.6s ease-in-out;
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
    }

    .sec-para {
        font-size: 1rem;
        color: #444;
        margin-bottom: 25px;
    }

    /* 💌 Message Card Glass Style */
    .message {
        background: rgba(255, 255, 255, 0.25);
        padding: 15px;
        background: white;
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

    /* ✍️ Form */
    form {
        background: rgba(255, 255, 255, 0.2);
        padding: 15px;
        border-radius: 12px;
        backdrop-filter: blur(10px);
        margin-top: 25px;
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
    }

    button {
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

    /* Balloon */
    .balloon {
        background: radial-gradient(circle, #ff6f61 0%, #ff4d4d 100%);
        border-radius: 50%;
        width: 40px;
        height: 50px;
    }

    /* Sparkle */
    .sparkle {
        background: white;
        border-radius: 50%;
        width: 6px;
        height: 6px;
        box-shadow: 0 0 8px white;
    }

    /* Petal */
    .petal {
        width: 20px;
        height: 20px;
        background: pink;
        border-radius: 50% 50% 50% 0;
        transform: rotate(45deg);
    }

    /* Animation */
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
<style>
    /* Trigger Button */
    .popup-trigger {
        padding: 10px 18px;
        font-size: 16px;
        background: #ff9800;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }

    .popup-trigger:hover {
        background: #e68900;
    }

    /* Popup Overlay */
    .popup-overlay {
        display: none;
        position: fixed;
        z-index: 999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
    }

    /* Popup Content */
    .popup-content {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(15px);
        padding: 20px;
        border-radius: 12px;
        width: 350px;
        text-align: center;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
    }

    /* Close Button */
    .popup-close {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 28px;
        cursor: pointer;
        color: #333;
    }

    /* Inputs */
    form input,
    form textarea {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        border-radius: 6px;
        border: 1px solid #ccc;
    }

    form button {
        padding: 10px 16px;
        background: #28a745;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }

    form button:hover {
        background: #218838;
    }
</style>
@endpush


@section('content')
<!-- Trigger Button -->
<button id="openPopupBtn" class="popup-trigger">Send a Wish 🎉</button>

<!-- Popup Background -->
<div id="wishPopup" class="popup-overlay">
    <div class="popup-content">
        <span class="popup-close" id="closePopupBtn">&times;</span>
        <h2>🎁 Share Your Launch Day Wish</h2>
        
        <form action="{{ route('launch.wall.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Your name" required>
            <textarea name="message" placeholder="Your message" rows="4" required></textarea>
            <button type="submit">Send Wish 🎁</button>
        </form>
    </div>
</div>
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

<div class="wall" style="margin-top: 150px; position: relative; overflow: hidden;">
    <h2>🎉 First Day <span class="text-blue">Wall</span></h2>
    <p class="sec-para text-center">Leave your wishes for our launch and be part of our story!</p>

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

    <form action="{{ route('launch.wall.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Your name" required>
        <textarea name="message" placeholder="Your message" rows="4" required></textarea>
        <button type="submit">Send Wish 🎁</button>
    </form>
</div>

<script>
    // Confetti Generator
    function createConfetti() {
        for (let i = 0; i < 20; i++) {
            let confetti = document.createElement("div");
            confetti.classList.add("confetti");
            confetti.style.left = Math.random() * 100 + "vw";
            confetti.style.backgroundColor = ["#ff6600", "#ffc107", "#28a745", "#17a2b8"][Math.floor(Math.random() * 4)];
            confetti.style.animationDuration = (Math.random() * 3 + 2) + "s";
            document.body.appendChild(confetti);
            setTimeout(() => confetti.remove(), 5000);
        }
    }

    setInterval(createConfetti, 1500);
</script>
<script>
    // Open Popup
    document.getElementById('openPopupBtn').addEventListener('click', function() {
        document.getElementById('wishPopup').style.display = 'flex';
    });

    // Close Popup
    document.getElementById('closePopupBtn').addEventListener('click', function() {
        document.getElementById('wishPopup').style.display = 'none';
    });

    // Close on outside click
    window.addEventListener('click', function(e) {
        if (e.target.id === 'wishPopup') {
            document.getElementById('wishPopup').style.display = 'none';
        }
    });
</script>
@endsection