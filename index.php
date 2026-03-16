<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NeilLink | LuminaNode</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #0a0a0c;
            --accent: #00f2ff;
            --text: #e0e0e0;
            --card-bg: #16161a;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: var(--bg);
            color: var(--text);
            line-height: 1.6;
        }

        /* Header & Hero */
        header {
            padding: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #333;
        }

        .logo {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--accent);
            letter-spacing: -1px;
        }

        .hero {
            text-align: center;
            padding: 100px 20px;
            background: radial-gradient(circle at center, #1a1a2e 0%, #0a0a0c 100%);
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 10px;
            background: linear-gradient(to right, #fff, var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .cta-button {
            background-color: var(--accent);
            color: #000;
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .cta-button:hover {
            box-shadow: 0 0 20px var(--accent);
        }

        /* Features */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 50px;
            max-width: 1200px;
            margin: auto;
        }

        .card {
            background: var(--card-bg);
            padding: 30px;
            border-radius: 12px;
            border: 1px solid #222;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            border-color: var(--accent);
        }

        .card img {
            width: 50px;
            margin-bottom: 15px;
        }

        /* Testimonials */
        .testimonials {
            padding: 50px;
            text-align: center;
            background: #0f0f12;
        }

        footer {
            text-align: center;
            padding: 40px;
            font-size: 0.9rem;
            color: #666;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">NeilLink</div>
        <nav>Developed by Neil Marc M. Arcuna</nav>
    </header>

    <section class="hero">
        <h1>LuminaNode</h1>
        <p>Next-gen Edge Computing for the modern Computer Engineer.</p><br>
        <a href="#" class="cta-button">Initialize System</a>
    </section>

    <section class="features">
        <div class="card">
            <img src="https://img.icons8.com/neon/96/processor.png" alt="CPU">
            <h3>Neural Processing</h3>
            <p>Optimized for real-time data handling and embedded systems integration.</p>
        </div>
        <div class="card">
            <img src="https://img.icons8.com/neon/96/cloud.png" alt="Cloud">
            <h3>Seamless Sync</h3>
            <p>Hybrid cloud architecture designed specifically for 4th-year Capstone projects.</p>
        </div>
        <div class="card">
            <img src="https://img.icons8.com/neon/96/shield.png" alt="Shield">
            <h3>Encrypted Link</h3>
            <p>End-to-end hardware encryption to keep your firmware deployments secure.</p>
        </div>
    </section>

    <section class="testimonials">
        <h2>What Developers Say</h2>
        <p><i>"LuminaNode revolutionized how I approach my hardware-software interfacing."</i></p>
        <p><strong>- Lead Engineer, Arcuna Tech</strong></p>
    </section>

    <footer>
        <p>&copy; 2026 NeilLink. Created by Neil Marc M. Arcuna | 4th Year BS Computer Engineering</p>
    </footer>

</body>
</html>