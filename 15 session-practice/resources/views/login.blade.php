

<h1> Login User With Session</h1>


<form action="login" method="POST">
    @csrf
    <input type="text" name="email" placeholder="Enter Your Email" id=""><br><br>
    <input type="text" name="password" placeholder="Enter Your Password" id=""><br><br>
    <button type="submit">Login</button>
</form>
