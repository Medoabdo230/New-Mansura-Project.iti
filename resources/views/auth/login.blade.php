<x-layout>
  <div class="form-container">
    <form action="{{ route('login') }}" method="POST" class="login-form">
      @csrf

      <h2 class="form-title">Log In to Your Account</h2>

      <div class="form-group">
        <label for="email" class="form-label">Email:</label>
        <input 
          type="email"
          name="email"
          id="email"
          value="{{ old('email') }}"
          class="form-input"
          required
        >
      </div>

      <div class="form-group">
        <label for="password" class="form-label">Password:</label>
        <input 
          type="password"
          name="password"
          id="password"
          class="form-input"
          required
        >
      </div>

      <button type="submit" class="submit-button">Log In</button>

      @if ($errors->any())
        <div class="error-container">
          <ul class="error-list">
            @foreach ($errors->all() as $error)
              <li class="error-item">{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      
    </form>
  </div>

  <style>
    .form-container {
      max-width: 400px;
      margin: 3rem auto;
      padding: 2rem;
      background: white;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .login-form {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }

    .form-title {
      font-size: 1.75rem;
      font-weight: 600;
      color: #333;
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .form-group {
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }

    .form-label {
      font-size: 0.95rem;
      font-weight: 500;
      color: #4a5568;
    }

    .form-input {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #e2e8f0;
      border-radius: 6px;
      font-size: 1rem;
      transition: all 0.2s ease;
    }

    .form-input:focus {
      outline: none;
      border-color: #4a90e2;
      box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.1);
    }

    .submit-button {
      background-color: #4a90e2;
      color: white;
      padding: 0.875rem 1.5rem;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      font-weight: 500;
      cursor: pointer;
      transition: background-color 0.2s ease;
      margin-top: 0.5rem;
    }

    .submit-button:hover {
      background-color: #357abd;
    }

    .submit-button:active {
      transform: translateY(1px);
    }

    .error-container {
      margin-top: 1rem;
      padding: 1rem;
      background-color: #fff5f5;
      border-radius: 6px;
      border: 1px solid #feb2b2;
    }

    .error-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .error-item {
      color: #e53e3e;
      font-size: 0.9rem;
      margin: 0.5rem 0;
    }

    @media (max-width: 640px) {
      .form-container {
        margin: 1rem;
        padding: 1.5rem;
      }
    }
  </style>
</x-layout>