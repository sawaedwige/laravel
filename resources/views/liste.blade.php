<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <title>liste des etudiant</title>
</head>
<body>
    <div class="container mt-3 text-white">
<h2> la liste</h2>

<table class="table table-striped text-white mt-5">
<thead>
    <tr>
       <th>nom</th> 
       <th>prenom</th> 
       <th>email</th> 
       <th>date_de_naissance</th> 
       <th>telephone</th>
    </tr>
</thead>
<tbody>
    @foreach($etudiant as $etudiant)
    <tr>
        <td>{{$etudiant->id}}</td>
        <td>{{$etudiant->nom}}</td>
        <td>{{$etudiant->prenom}}</td>
        <td>{{$etudiant->date_de_naissance}}</td>
        <td>{{$etudiant->telephone}}</td>
    </tr>
    endforeach
</tbody>
</table>

    </div>
</body>
</html>