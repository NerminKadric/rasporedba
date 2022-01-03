<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles\login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>Registracija</title>
</head>

<body>
    <div class="wrap">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ime</label>
                <input type="text" class="form-control" id="fname" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prezime</label>
                <input type="text" class="form-control" id="lname" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email adresa</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Lozinka</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Potvrdi lozinku</label>
                <input type="password" class="form-control" id="confirm-password">
            </div>
            <button type="submit" class="btn btn-primary">Registracija</button>
        </form>
    </div>
</body>

</html>