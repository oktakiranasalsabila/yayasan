<!-- resources/views/auth/forgot-password.blade.php -->
<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div>
        <label>Email:</label>
        <input type="email" name="email" required>
    </div>
    <button type="submit">Kirim Link Reset Password</button>
</form>
