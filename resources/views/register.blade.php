<form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="gender" placeholder="Gender" required>
    <input type="number" name="age" placeholder="Age" required>
    <input type="date" name="dob" placeholder="Date of Birth" required>
    <input type="text" name="address" placeholder="Address" required>
    <select name="role" required>
        <option value="user">User</option>
        <option value="superadmin">Superadmin</option>
    </select>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
    <button type="submit">Register</button>
</form>