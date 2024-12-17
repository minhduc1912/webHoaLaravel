<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .center{
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 40px;
    }
    table{
        width: 100%;
    }
    table,th,td{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px 30px;
    }
    .img_size{
        height: 120px;
        width: 70px;
    }
    .title_deg{
        text-align: center;
        font-size: 35px;
        font-family: Arial, Helvetica, sans-serif;
        padding-top: 10px;
        letter-spacing: 2px;
       
        font-weight: bold;
     
    }

   
    .th_color{
        background-color: #C0C0C0;
        color: black;
    }
    .td_color{
        color: black;
    }
    .document{
        padding: 0 0 2px 38px;
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;
    }

    </style>
</head>
<body>
  
    <h1 class="title_deg">Order Details</h1>

    <p class="document"><b>Customer Name: </b> {{$order->name}}</p>
    <p class="document"><b>Email: </b> {{$order->email}}</p>
    <p class="document"><b>Phone: </b> {{$order->phone}}</p>
    <p class="document"><b>Address: </b> {{$order->address}}</p>
    
    <table class="center">
        <tr class="th_color">
            <th>Product ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Status</th>
            <th>Image</th>
        </tr>

        <tr class="td_color">
            <td>{{$order->product_id}}</td>
            <td>{{$order->product_title}}</td>
            <td>{{$order->price}}</td>
            <td>{{$order->quantity}}</td>
            <td>{{$order->payment_status}}</td>
            <td>
                <img class="img_size" src="product/{{$order->image}}" >
            </td>
            
        </tr>
    </table>
    
</body>
</html>