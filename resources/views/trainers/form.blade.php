<form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data"> 
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control " name="name" >
      </div>
      <div class="form-group">
        <label for="nombre">slug</label>
        <input type="text" class="form-control " name="slug" >
      </div>
      <div class="form-group">
        <label for="avatar">Avatar</label>
        <input type="file" class=" form-control" name="avatar" >
      </div>
      <button type="submit" class="btn btn-primary mt-5">Submit</button>
      
</form>