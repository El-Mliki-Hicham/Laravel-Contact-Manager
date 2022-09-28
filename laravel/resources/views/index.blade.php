
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-12 col-xl-10">
  
          <div class="card">
            <div class="card-header p-3">
              <h5 class="mb-0"><i class="fas fa-tasks me-2"></i>Gestion des taches</h5>
            </div>
            <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">
  
              <table class="table mb-0">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom de tache</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                @forelse ($Data as $value)
                <tbody>
                  <tr class="fw-normal">
                    <td>
                     
                      <span class="ms-2">{{$value->id}}</span>
                    </td>
                    <td class="">
                      <span class="ms-2">{{$value->Nom_Tach}}</span>
                    </td>
                    <td>
                     
                      <span class="ms-2">{{$value->Description}}</span>
                    </td>
                  
                    <td>
                        <ul style="list-style-type: none;" class="list-group list-group-horizontal">
                            <li> 
                                <a href="{{route('index.edit',$value->id)}} " data-mdb-toggle="tooltip" title="edit">
                                    <i class="fas fa-edit text-success me-3"></i></a></li>
                                
                            <li>
                                <form action="{{route('index.destroy',$value->id)}}" method="POST">
                                @csrf
                                @method("DELETE")
                            <button  type="submit"  data-mdb-toggle="tooltip"  title="Delete">
                                <i class="fas fa-trash-alt text-danger"></i></button>
                        </form></li>
                          
                          </ul>
                                          
                  </td>
                  </tr>
                  
               
             
                 
               
                    
                
                </tbody>
                @empty
            @endforelse

              </table>
  
            </div>
            <div class="card-footer text-end p-3">
         
               <a href="{{route('index.create')}}"><button class="btn btn-primary">Insere</button></a>
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </section>