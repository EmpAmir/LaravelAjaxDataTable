<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.datatables.min.css') }}"/>

    {{-- js --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.datatables.min.js') }}"></script>
  </head>
  <body>

    <div class="container my-3">
        <div class="alert alert-primary" role="alert">
            <strong>Ajax Data Table</strong>
        </div>
<div class="card">
    <div class="card-header">
        <h1>Data List</h1>
      </div>
    <div class="card-body">
        <table class="display" id="datatable" >
            <thead class="thead-inverse">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>STATE</th>
                    <th>COUNTRY</th>
                </tr>
                </thead>
                <tbody></tbody>
        </table>
    </div>
</div>
    </div>


    <!-- Bootstrap JavaScript Libraries -->

    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script> --}}

    <script>

$(document).ready(function(){
    $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        order: [[ 0, "asc" ]],
        ajax: "{{ url('getdata') }}",
        columns: [
        { data: 'id' },
        { data: 'name' },
        { data: 'email' },
        { data: 'phone_number' },
        { data: 'state' },
        { data: 'country' }
        ]
    });
});
    </script>
  </body>
</html>
