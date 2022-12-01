
<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

   <base href = "/public">

    @include("admin.admincss")

  </head>
  <body>
    
<div class = "container-scroller">

    @include("admin.navbar")

<div style = "position: relative; top: 60px; right: -150px;">

    <form action = "{{ url('/updatefoodchef', $data->id) }}" method = "post" enctype = "multipart/form-data">

        @csrf

        <div style = "padding: 10px;">
            <label>Chef Name</label>
            <input style = "color: blue;" type = "text" name = "name" value = "{{ $data->name }}">
        </div>

        <div style = "padding: 10px;">
            <label>Speciality</label>
            <input style = "color: blue;" type = "text" name = "speciality" value = "{{ $data->speciality }}">
        </div>

        <div style = "padding: 10px;">
            <label>Old Image</label>
            <img height = "200" width = "200" src = "/chefimage/{{ $data->image }}">
        </div>

        <div style = "padding: 10px;">
            <label>New Image</label>
            <input type = "file" name = "image" required = "">
        </div>

        <div style = "padding: 10px;">
           
            <input style = "color: blue;" class = "btn btn-primary" type = "submit" value = "Update Chef">
        
        </div>
        
    </form>

</div>

</div>

   @include("admin.adminscript")
  </body>
</html>