
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

        <form action = "{{ url('/update', $data->id) }}" method = "post" enctype = "multipart/form-data">

            @csrf

            <div style="padding: 10px">
                <label>Title</label>
                <input style = "color: blue;" type = "text" name = "title" value = "{{ $data->title }}" required >
            </div>

            <div style="padding: 10px">
                <label>Price</label>
                <input style = "color: blue;" type = "num" name = "price" value = "{{ $data->price }}" required >
            </div>

            <div style="padding: 10px">
                <label>Description</label>
                <input style = "color: blue;" type = "text" name = "description" value = "{{ $data->description }}" required >
            </div>

            <div style="padding: 10px">
                
                <input style = "color: blue;" type = "submit" value = "Save" >

            </div>

            <div style="padding: 10px">
                <label>Old Image</label>
                <img height = "200" width = "200" src = "/foodimage/{{ $data->image }}" >
            </div>

            
            <div style="padding: 10px">
                <label>New Image</label>
                <input type = "file" name = "image" required >
            </div>


        
        </form>

            <div>


</div>

   @include("admin.adminscript")
  </body>
</html>
   