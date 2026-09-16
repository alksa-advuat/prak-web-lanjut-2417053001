<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fafafa;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            width: 320px;
            background: #fff;
            border: 1px solid #e5e5e5;
            border-radius: 6px;
            padding: 32px;
            text-align: center;
        }

        .avatar {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            border: 1px solid #ccc;
            overflow: hidden;
            margin: 0 auto 20px;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .name {
            font-size: 20px;
            font-weight: 600;
            color: #222;
            margin: 0 0 24px;
        }

        .info {
            text-align: left;
            border-top: 1px solid #eee;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 4px;
            border-bottom: 1px solid #eee;
            font-size: 14px;
        }

        .info-label {
            color: #888;
        }

        .info-value {
            color: #222;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="avatar">
            <img src="{{ asset('images/CI.png') }}" alt="Foto profil">
        </div>

        <p class="name">{{ $nama }}</p>

        <div class="info">
            <div class="info-row">
                <span class="info-label">Kelas</span>
                <span class="info-value">{{ $kelas }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">NPM</span>
                <span class="info-value">{{ $NPM }}</span>
            </div>
        </div>
    </div>
</body>
</html>