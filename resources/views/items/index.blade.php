
@extends('layouts.app')

@section('title')
    index
@endsection

@section ('content') 
    <div class="text-center">
        <a type="button" href="{{route('items.create')}}" class="mt-4 btn btn-success">Create Item</a>
    </div>
    <table  class="table mt-4">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">price</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            

            
            @foreach($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>

                    <form action="{{route('orders.store',['itemID'=> $item->id])}}" method="POST">
                        @csrf

                    <button type="submit" href="" class="btn btn-success" onclick="orderPopup()">Add</button>
                    </form>

                   
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@if(isset($order))
    <script>
    function orderPopup() {
      // Create a new window and store a reference to it
      var popup = window.open("", "myPopup", "width=500,height=500");
    
      // Write the HTML for the popup's content
      popup.document.write(`
        <html>
        
          <body>
            <h2>Enter your email and name:</h2>
            <form id="myForm" method="POST" action="{{route('orders.update',['order' => $order])}}">
              @csrf
              @method('PUT')
              <label for="email">Email:</label>
              <input type="email" id="email" name="user_email"><br><br>
    
              <button type="submit" onclick="return alert('Your order is successful')">order</button>
            </form>
          </body>
        </html>
      `);
    
      // Submit the form when the window loads
      popup.onload = function() {
        popup.document.getElementById("myForm").submit();
    
      };
    }
    </script>
@endif  
@endsection

