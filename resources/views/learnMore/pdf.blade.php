<!DOCTYPE html>
<html>
<head>
    <title>Learn More List</title>
    <meta charset="UTF-8">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        body {
            font-family: DejaVu Sans, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Learn More List</h1>
    <table cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th style="width:150px">Name</th>
            <th>Meaning</th>
            <th style="width:300px">Example</th>
            <th>Meaning of Example</th>
            <th>Start Date</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($learn_more as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->vocabulary }}</td>
            <td>{{ $item->meaning_of_vocabulary }}</td>
            <td>{{ $item->example }}</td>
            <td>{{ $item->meaning_of_example }}</td>
            <td>{{ $item->created_at->format('d/m/Y') }}</td>
            <td>{{ $item->status == 1 ? 'Completed' : 'Pending' }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>
