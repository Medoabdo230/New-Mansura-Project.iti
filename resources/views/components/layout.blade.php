<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Posts</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
    @if (session('success'))
        <div id="flash" class="flash-message">
            {{ session('success') }}
        </div>
    @endif
    
    <header class="header">
        <nav class="nav-container">
            <div class="nav-left">
                
            </div>

            <div class="nav-right">
                @guest
                    <div class="auth-buttons">
                        <a href="{{ route('show.login') }}" class="nav-button">Login</a>
                        <a href="{{ route('show.register') }}" class="nav-button nav-button-primary">Register</a>
                    </div>
                @endguest

                @auth
                    <div class="auth-user">
                        <span class="user-greeting">
                            Hi there, {{ Auth::user()->name }}
                        </span>
                        <a href="{{ route('posts.create') }}" class="nav-button nav-button-primary">Create New Post</a>
                        <form action="{{ route('logout') }}" method="POST" class="logout-form">
                            @csrf
                            <button type="submit" class="nav-button">Logout</button>
                        </form>
                    </div>
                @endauth
            </div>
        </nav>
    </header>

    <main class="main-container">
        {{ $slot }}
    </main>

    <style>
        /* Base styles */
        body {
            margin: 0;
            font-family: system-ui, -apple-system, sans-serif;
            line-height: 1.5;
        }

        /* Flash message */
        .flash-message {
            padding: 1rem;
            text-align: center;
            background-color: #ecfdf5;
            color: #059669;
            font-weight: 600;
            animation: slideDown 0.3s ease-out;
        }

        @keyframes slideDown {
            from { transform: translateY(-100%); }
            to { transform: translateY(0); }
        }

        /* Header and Navigation */
        .header {
            background-color: white;
            border-bottom: 1px solid #e5e7eb;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-left {
            flex-shrink: 0;
        }

        .site-title {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .site-title-link {
            color: #1f2937;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .site-title-link:hover {
            color: #4b5563;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        /* Auth sections */
        .auth-buttons, .auth-user {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-greeting {
            padding-right: 1.25rem;
            border-right: 2px solid #e5e7eb;
            color: #4b5563;
            font-weight: 500;
        }

        /* Navigation buttons */
        .nav-button {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            font-size: 0.875rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.2s ease;
            border: 1px solid transparent;
            background-color: transparent;
            color: #4b5563;
            cursor: pointer;
        }

        .nav-button:hover {
            background-color: #f3f4f6;
            color: #1f2937;
        }

        .nav-button-primary {
            background-color: #3b82f6;
            color: white;
        }

        .nav-button-primary:hover {
            background-color: #2563eb;
            color: white;
        }

        /* Logout form */
        .logout-form {
            margin: 0;
        }

        /* Main content */
        .main-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .nav-container {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }

            .nav-right {
                flex-direction: column;
                width: 100%;
            }

            .auth-buttons, .auth-user {
                flex-direction: column;
                width: 100%;
            }

            .user-greeting {
                padding: 0;
                border: none;
                margin-bottom: 0.5rem;
            }

            .nav-button {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</body>
</html>