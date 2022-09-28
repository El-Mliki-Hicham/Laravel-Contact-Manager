

<h1>Contact Manager</h1>
{{-- {{print_r($Contacts)}} --}}

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


<a href="{{route('index.create')}}">  <button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Ajouter">Ajouter</button>
</a>    

<table className="table" >
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Tele</th>
            <th>Action</th>
        </tr>
        </thead>
        @forelse ($Contacts as $value)


        <tbody >
            <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->Nom}}</td>
            <td>{{$value->Prenom}}</td>
            <td>{{$value->Email}}</td>
            <td>{{$value->Tele}}</td>
            <td>
                <a href={}  > <button  className="btn btn-info"  >Edit</button></a>
                <button className="btn btn-danger">Delete</button>
                
                
                
            </td>
            
            
        </tr>
    </tbody>
    @empty
            @endforelse

       </table>
 