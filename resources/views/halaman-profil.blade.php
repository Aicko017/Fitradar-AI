<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #1E1F9D;
            color: white;
            min-height: 100vh;
            display: flex;
        }

        aside {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 256px;
            background-color: #15168a;
            padding: 24px;
        }

        .logo-container {
            display: flex;
            align-items: center;
            margin-bottom: 32px;
        }

        .logo {
            height: 80px;
            width: auto;
            margin-right: 8px;
        }

        .logo-text {
            font-size: 1.25rem;
            font-weight: 600;
            line-height: 1.25;
        }

        nav {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        nav a {
            display: flex;
            align-items: center;
            color: #a0aec0;
            text-decoration: none;
        }

        nav a:hover {
            color: white;
        }

        nav svg {
            height: 24px;
            width: 24px;
            margin-right: 8px;
            fill: none;
            stroke: currentColor;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        main {
            flex-grow: 1;
            padding-left: 256px;
            padding: 32px;
        }

        h1 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 24px;
            text-align: center;
        }

        .form-container {
            background-color: white;
            color: #2d3748;
            border-radius: 8px;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            padding: 24px;
            display: grid;
            grid-template-columns: 1fr;
            gap: 16px;
        }

        @media (min-width: 768px) {
            .form-container {
                grid-template-columns: repeat(2, 1fr);
                gap: 24px;
            }
        }

        label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: #4a5568;
            margin-bottom: 4px;
        }

        input[type="text"],
        input[type="number"],
        select {
            margin-top: 4px;
            display: block;
            width: 100%;
            border-radius: 0.375rem;
            border: 1px solid #d2d6dc;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            padding: 0.75rem;
            font-size: 0.875rem;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        input[type="radio"] {
            height: 16px;
            width: 16px;
            border: 1px solid #d2d6dc;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 50%;
            background-color: #fff;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        input[type="radio"]:checked {
            background-color: #6366f1;
            border-color: #6366f1;
        }

        input[type="radio"]:checked::before {
            content: '';
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #fff;
        }

        .radio-group {
            margin-top: 4px;
            display: flex;
            align-items: center;
        }

        .radio-group label {
            margin-left: 8px;
        }

        .birthday-group {
            display: flex;
            gap: 8px;
            margin-top: 4px;
        }

        .birthday-group select {
            width: 33%;
        }

        .bmi-input {
            background-color: #edf2f7;
            cursor: not-allowed;
        }

        .bmi-note {
            font-size: 0.75rem;
            color: #718096;
            margin-top: 4px;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
            grid-column: 1 / -1;
        }

        .button {
            display: inline-flex;
            align-items: center;
            border-radius: 0.375rem;
            border: 1px solid transparent;
            background-color: #6366f1;
            color: white;
            font-size: 0.875rem;
            font-weight: 500;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            padding: 0.75rem 1rem;
            text-decoration: none;
            transition: background-color 0.15s ease-in-out;
        }

        .button:hover {
            background-color: #4f46e5;
        }

        .error-message {
            font-size: 0.75rem;
            color: #e53e3e;
            margin-top: 4px;
        }
    </style>
</head>
<body>
    <aside>
        <div class="logo-container">
            <img src="/images/Logo.png" alt="FitRadar AI Logo" class="logo">
            <span class="logo-text">FITRADAR<br>AI</span>
        </div>
        <nav>
            <a href="/halaman-dashboard">
                <svg viewBox="0 0 24 24">
                    <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3" />
                </svg>
                <span>Tinjauan</span>
            </a>
            <a href="/halaman-profile">
                <svg viewBox="0 0 24 24">
                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span>Profil</span>
            </a>
            <a href="/deteksi">
                <svg viewBox="0 0 24 24">
                    <path d="M12 5v.01M12 12v.01M12 19v.01" />
                </svg>
                <span>Deteksi</span>
            </a>
            <a href="/halaman-makanan">
                <svg viewBox="0 0 24 24">
                    <path d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5" />
                </svg>
                <span>Makanan</span>
            </a>
        </nav>
    </aside>
    <main>
        <h1>Profile</h1>
        <div class="form-container">
            <!-- Ganti bagian <form> ini saja -->
<form action="/profile" method="POST" class="form-container">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="Nama Pengguna">
    </div>

    <div>
        <label for="gender">Gender</label>
        <div class="radio-group" style="gap: 16px;">
            <label><input type="radio" name="gender" value="male" checked> Male</label>
            <label><input type="radio" name="gender" value="female"> Female</label>
        </div>
    </div>

    <div>
        <label for="birthday">Birthday</label>
        <div class="birthday-group">
            <select name="birthday_day" id="birthday_day">
                <option value="">Day</option>
                <option value="01" selected>01</option>
                <option value="02">02</option>
            </select>
            <select name="birthday_month" id="birthday_month">
                <option value="">Month</option>
                <option value="01">01</option>
                <option value="02" selected>02</option>
            </select>
            <select name="birthday_year" id="birthday_year">
                <option value="">Year</option>
                <option value="2000">2000</option>
                <option value="1999" selected>1999</option>
            </select>
        </div>
    </div>

    <div>
        <label for="height">Height (cm)</label>
        <div style="display: flex; align-items: center;">
            <input type="number" name="height" id="height" value="175" style="width: 100%;">
            <span style="margin-left: 8px; font-size: 0.875rem; color: #4a5568;">CM</span>
        </div>
    </div>

    <div>
        <label for="current_weight">Current Weight (kg)</label>
        <div style="display: flex; align-items: center;">
            <input type="number" name="current_weight" id="current_weight" value="70" style="width: 100%;">
            <span style="margin-left: 8px; font-size: 0.875rem; color: #4a5568;">KG</span>
        </div>
    </div>

    <div style="grid-column: 1 / -1;">
        <label for="bmi">BMI</label>
        <input type="text" id="bmi" class="bmi-input" value="22.86" readonly>
        <p class="bmi-note">Your BMI can't be edited as it is a function of your weight & height.</p>
    </div>

    <div class="button-container">
        <button type="submit" class="button">
            Selanjutnya
        </button>
    </div>
</form>

        </div>
    </main>
</body>
</html>