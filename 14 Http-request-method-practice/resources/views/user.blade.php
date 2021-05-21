<h1>Get Method User Login</h1>


<form action="users" method="get">
    <input type="text" name="email" placeholder="Enter Your Email" id=""><br><br>
    <input type="text" name="password" placeholder="Enter Your Password" id=""><br><br>
    <button type="submit">Login</button>
</form>


<h1>POST Method User Login</h1>


<form action="users" method="post">
    @csrf
    <input type="text" name="email" placeholder="Enter Your Email" id=""><br><br>
    <input type="text" name="password" placeholder="Enter Your Password" id=""><br><br>
    <button type="submit">Login</button>
</form>



<h1>PUT Method User Login</h1>


<form action="users" method="post">
    {{method_field('PUT')}}
    @csrf
    <input type="text" name="email" placeholder="Enter Your Email" id=""><br><br>
    <input type="text" name="password" placeholder="Enter Your Password" id=""><br><br>
    <button type="submit">Login</button>
</form>



<h1>Delete Method User Login</h1>


<form action="users" method="post">
    {{method_field('DELETE')}}
    @csrf
    <input type="text" name="email" placeholder="Enter Your Email" id=""><br><br>
    <input type="text" name="password" placeholder="Enter Your Password" id=""><br><br>
    <button type="submit">Login</button>
</form>