<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" />

    <link rel="stylesheet" href="css/style.css">

</head>

<body id="contact">

    <header >
        <h1>contact me</h1>
    </header>

    <?php include("menu.php"); ?> 

    <main>


        <section>

        

            <p>Si estas aquí es porque tienes alguna duda o algo que aportar. Formula aquí cual es tu duda o aportación.</p>


            <form action="mailto:andrei3456@msn.com?Subject=Consulta-japon" method="POST">

                <fieldset>
                    <legend> deja tu consulta</legend>

                    <label for="#nombre-apellidos">nombre y apellidos</label>
                    <input class="nombre" id="nombre-apellidos" type="text" name="nombre-apellidos" required placeholder="Introduce nombre y apellidos" maxlength="25">


                    <label for="#mail">e-mail</label>
                    <input class="mail" id="mail" type="email" name="mail" required placeholder="ejemplo@mail.es" maxlength="25">

                    <label for="#consulta">consulta</label>
                    <textarea name="consulta" id="consulta" cols="30" rows="10" required
                        placeholder="introduce tu consulta"></textarea>

                    <input class="boton" type="submit">
                </fieldset>
            </form>
        </section>

    </main>

       
    <?php include("footer.php"); ?> 
</body>



</html>