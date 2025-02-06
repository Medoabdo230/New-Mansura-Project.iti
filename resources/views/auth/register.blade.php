<x-layout>
  <div class="form-container">
    <form action="" method="POST" class="registration-form">
      @csrf

      <h2 class="form-title">Register for an Account</h2>

      <div class="form-group">
        <label for="name" class="form-label">Name:</label>
        <input 
          type="text"
          name="name"
          id="name"
          value="{{ old('name') }}"
          class="form-input"
          required
        >
      </div>

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

      <div class="form-group">
        <label for="password_confirmation" class="form-label">Confirm Password:</label>
        <input 
          type="password"
          name="password_confirmation"
          id="password_confirmation"
          class="form-input"
          required
        >
      </div>

      <button type="submit" class="submit-button">Register</button>

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
      max-width: 500px;
      margin: 2rem auto;
      padding: 2rem;
      background: white;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .registration-form {
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
      transition: border-color 0.2s ease;
    }

    .form-input:focus {
      outline: none;
      border-color: #4a90e2;
      box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.1);
    }

    .submit-button {
      background-color: #4a90e2;
      color: white;
      padding: 0.75rem 1.5rem;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      font-weight: 500;
      cursor: pointer;
      transition: background-color 0.2s ease;
    }

    .submit-button:hover {
      background-color: #357abd;
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