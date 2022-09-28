

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<h4 class="card-title mb-4">Ajouter contact</h4>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @forelse ($Data as $value)
                <form method="POST" action="{{route("index.update",$value->id)}}" enctype='multipart/form-data'>
                @method("put")
                @csrf
                
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">
                         
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Nom</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="Nom_Tach" type="text" value="{{$value->Nom_Tach}}"   class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Description</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="Description" type="text" value="{{$value->Description}}"   class="form-control" placeholder="">
                                </div>
                            </div>
                            
                                                    
                            
                            
                         
                            
                        
                    </div>
                </div>
                
                @empty
                                
                @endforelse                         
                                                           
                <div class="row justify-content-end">
                    <div class="col-lg-10">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- end row -->
