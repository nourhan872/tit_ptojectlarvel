@extends(layouts.app)
@section("title","Edit Users")
@section("content")



<form action="" method="POST">
    @csrf


    <div class="form-group p-2">
      <label class="p-2" for="exampleInputEmail1">Name</label>
      <input type="name" name="name" class="form-control" id="exampleInputEmail1" value="{{$users[$id]['name']}}" aria-describedby="emailHelp" placeholder="Name">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>


    <div class="form-group p-2">
      <label  class="p-2" for="exampleInputPassword1" class="p-2">Email</label>
      <input type="email" name="email" class="form-control " value="{{$users[$id]['email']}}"  id="exampleInputPassword1" placeholder="Email">
    </div>
    
    <button type="submit" class="btn  btn-primary">Submit</button>
  </form>
  
@endsection