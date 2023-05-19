<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content ="width=device-width , initial-scale=1">
        <title> Todo List </title>

        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </head>

    <body>
        <!-- Looping through multiple todos and Displaying
        items in them with action buttons  -->
        @foreach( $todos as $todo)
            <table class="table">
                <thead>
                    <tr> 
                        <td> Todo # </td>
                        <td> Items </td>    
                    <tr>
                </thead>

                <tbody>
                    <tr>
                        <td> Will have the todo num </td>
                        <!-- Each list has multiple items -->
                        <td> 
                            <table>
                                @foreach ($todo->todoItems as $item)
                                    <tr>
                                        <td> {{$item->item_name}} </td>
                                        <td> 
                                            <a href ="{{ URL::to('/') }}/update_item?id={{$item->id}}" class="btn btn-outline-secondary" >Update</a>
                                        </td>
                                        <td> <a href ="{{ URL::to('/') }}/delete_item?id={{$item->id}}" class="btn btn-danger">Delete</a>  </td>
                                    </tr>
                                @endforeach
                            </table>
                        </td>

                    </tr>
                </tbody>

            </table>
        @endforeach
    </body>

</html>