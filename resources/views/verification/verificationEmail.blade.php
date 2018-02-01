
<body style="border-radius:10px; max-width: 500px; text-align: center; border: 1px solid #92BCE0; margin:auto">
    <h1 style="background: #3C8DBC; color: white; border-top: 2px solid #3071A9; border-bottom: 2px solid #3071A9">Bienvenido a Lock<span style="color: #F96F00">Box</span></h1>
    <h3 style="color: black">Estás a 1 paso de completar el registro</h3>
    <p style="color: black">Verifica el email con el boton que tienes a continuación</p>
    <a style="color: white;line-height: 50px;width: 300px; height: 50px; background: #F96F00; border: 1px solid #bc5600; text-decoration: none;display: inline-block;" href="{{ url('/verifyemail/'.$email_token) }}">Verifica tu cuenta</a>
    <p style="color: black">En caso de que el boton no funcione, utiliza el siguiente link:</p>
    <p>{{ url('/verifyemail/'.$email_token) }}</p>
</body>
<br/>
