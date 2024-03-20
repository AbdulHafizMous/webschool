
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification de gestion des notes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #00cc66; /* vert */
            color: #ffffff;
            padding: 10px;
            margin-top: 5%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
        }

        .note-info {
            background-color: #f9f9f9;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 15px;
        }

        .note-info h3 {
            margin-top: 0;
            color: #333;
        }

        .note-info p {
            margin-bottom: 5px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .logo {
            display: flex;
            align-items: center;
            background-color: #ffffff;
            padding: 10px 20px;
            margin-bottom: 5%;
            border-radius: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            margin: 0 auto;
        }

        .circle {
            background-color: green;
            border-radius: 50%;
            width: 50px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 5px;
        }

        .note {
            font-size: 24px;
            color: green;
        }
        .all{
            text-align: center;
        }

        .pro {
            font-size: 24px;
            color: black;
        }
        .footer {
            background-color: #f2f2f2;
            padding: 15px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
          }
          .footer p {
            margin: 5px 0;
          }
          .footer a {
            color: #00cc66; /* vert */
            text-decoration: none;
            font-weight: bold;
          }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
           
            <span class="note"><strong>WebS</strong></span><span class="pro"><strong>chool</strong></span>
        </div>
        <div class="header">
            <h2>Notification de WebSchool</h2>
        </div>
        <div class="note-info">
            <p>Bonjour,</p>
            <p>Vous avez reçu une nouvelle notification concernant la gestion des notes de votre enfant.</p>
            <h3>Note pour {{$n}} {{$p}}</h3>

            @if ($nt == 99)
                <p>Votre enfant en classe de {{$c}} {{$s}} {{$g}} n'a pas reçu de notes pour :</p>
                <p><strong>Matière:</strong> {{$nom_matiere}} </p>
                <p><strong>TypeNote:</strong> {{$nom_type}}</p>
            @else
                <p>Une nouvelle note a été ajoutée ou modifiée pour votre enfant. en classe de {{$c}} {{$s}} {{$g}}</p>
                <p><strong>Matière:</strong> {{$nom_matiere}} </p>
                <p><strong>TypeNote:</strong> {{$nom_type}}</p>
                <p><strong>Note:</strong>  {{$nt}} </p>
            @endif
            
            
            {{-- <p><strong>Date:</strong> [Date de la note]</p> --}}
            <p>Cordialement,<br>Votre École</p>
        </div>
        <p>Pour plus de détails, veuillez vous connecter à notre système de gestion des notes.</p>
        <!-- <a href="[URL_du_système_de_gestion_des_notes]" class="btn">Accéder au système</a> -->
        <div class="footer">
            <p>Vous recevez cette notification car vous êtes inscrit sur NotePro.</p>
            <br>
            <p class="all"><strong>@webSchool - ©Tous droits réservés.</strong></p>
        </div>
    </div>
</body>
</html>







