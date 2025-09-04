<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <link rel="icon" href="images/iconpuriva.png" type="image/x-icon" />

    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AOS (Animate On Scroll) -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'puriva-blue': '#2563eb',
                        'puriva-light': '#dbeafe',
                        'puriva-dark': '#1e40af'
                    },
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>



    <!-- Set Inter sebagai default font untuk seluruh website -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f3f4f6; /* mirip bg-gray-100 */
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 768px;
            margin: 2rem auto;
            padding: 1.5rem;
        }
        .card {
            background-color: #ffffff;
            border: 1px solid #e5e7eb; /* gray-200 */
            border-radius: 1rem; /* rounded-xl */
            box-shadow: 0 10px 15px rgba(0,0,0,0.05);
            padding: 1.5rem;
        }
        h2 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #111827; /* gray-900 */
            margin-bottom: 1.5rem;
        }
        label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: #374151; /* gray-700 */
            margin-bottom: 0.25rem;
        }
        .field {
            margin-bottom: 1rem;
        }
        .value {
            color: #111827; /* gray-900 */
        }
        .actions {
            display: flex;
            justify-content: flex-end;
            gap: 0.75rem;
            margin-top: 1rem;
        }
        .btn {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            font-weight: 500;
            font-size: 0.875rem;
            cursor: pointer;
            border: 1px solid transparent;
            text-decoration: none;
            transition: background-color 0.2s;
        }
        .btn-gray {
            background-color: #ffffff;
            color: #374151;
            border-color: #d1d5db; /* gray-300 */
        }
        .btn-gray:hover {
            background-color: #f9fafb; /* gray-50 */
        }
        .btn-primary {
            background-color: #3b82f6; /* blue-600 */
            color: #ffffff;
            border-color: transparent;
        }
        .btn-primary:hover {
            background-color: #2563eb; /* blue-700 */
        }
        .btn:focus {
            outline: 2px solid #2563eb;
            outline-offset: 2px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="card">
            <h2>Profil Saya</h2>

            <!-- Info User -->
            <div class="fields">
                <div class="field">
                    <label>Nama</label>
                    <span class="value">{{ Auth::user()->name }}</span>
                </div>

                <div class="field">
                    <label>Email</label>
                    <span class="value">{{ Auth::user()->email }}</span>
                </div>

                <!-- Tambahkan field lain jika perlu -->
            </div>

            <!-- Aksi -->
            <div class="actions">
                <a href="{{ url('/') }}" class="btn btn-gray">Kembali</a>

                <form method="POST" action="{{ url('/logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>
