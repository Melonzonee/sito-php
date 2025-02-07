<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melins Company</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="webApplication.css">
</head>
<body>

    <video autoplay muted loop id="background-video" class="w-100">
        <source src="viaggio.mp4" type="video/mp4">
    </video>
    
    <div class="container mt-4">
        <div class="text-center">
            <h3>Melins Company!</h3>
            <p class="lead">
                Siamo un'agenzia di viaggi dedicata a rendere i tuoi sogni di viaggio realtà. 
                Esplora con noi le destinazioni più affascinanti, prenota facilmente il tuo viaggio 
                e vivi esperienze indimenticabili.
            </p>
        </div>
    </div>

    <div class="container mt-5">
        <h2>Modulo di Registrazione</h2>
        
        <form id="registrationForm">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="name" required>
                <small id="nameError" class="form-text text-danger" style="display: none;">
                    Il campo nome è obbligatorio.
                </small>
            </div>
            
            <div class="form-group">
                <label for="surname">Cognome:</label>
                <input type="text" class="form-control" id="surname" required>
                <small id="surnameError" class="form-text text-danger" style="display: none;">
                    Il campo cognome è obbligatorio.
                </small>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" required>
                <small id="emailError" class="form-text text-danger" style="display: none;">
                    Il campo email è obbligatorio.
                </small>
            </div>
            
            <button type="submit" class="btn btn-primary">SCOPRI LE DESTINAZIONI</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="webApplication.js"></script>

</body>
</html>
