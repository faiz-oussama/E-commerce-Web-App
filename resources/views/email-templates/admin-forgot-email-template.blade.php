<p>Dear {{$admin->name}}</p>

<p>
    We have received a request to reset your password for BokiShop account associated with {{$admin->email}}.
    You can reset your password by clicking the button below:

    <br>
    <a href="{{$actionLink}}" target="_blank" style="color:white;border-color:green;border-style:solid;border-width:5px 10px;background-color:green;display:inline-block;text-decoration:none;border-radius:3px;box-shadow:0 2px 3px black;-webkit-text-size-adjust:none;box-sizing:border-box;">Reset password</a>
    <br>
    <b>NB:</b> This link will valid within 15 minutes
    <br>
    If you did not request a password reset, please ignore this email.
</p>