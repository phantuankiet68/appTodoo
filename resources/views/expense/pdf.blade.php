<!DOCTYPE html>
<html>
<head>
    <title>Expenses Report</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Expenses Report</h1>
    <table>
        <thead>
            <tr>
                <th>Ngày</th>
                <th>Breakfast</th>
                <th>Lunch</th>
                <th>Afternoon Meal</th>
                <th>Dinner</th>
                <th>Coffee</th>
                <th>Fuel</th>
                <th>Sports</th>
                <th>Other Expenses</th>
                <th>E-Wallet</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($expenses as $expense)
                <tr>
                    <td>{{ $expense->current_date->format('d/m/Y') }}</td>
                    <td>{{ number_format($expense->breakfast, 0, ',', '.') }} VND</td>
                    <td>{{ number_format($expense->lunch, 0, ',', '.') }} VND</td>
                    <td>{{ number_format($expense->afternoon_meal, 0, ',', '.') }} VND</td>
                    <td>{{ number_format($expense->dinner, 0, ',', '.') }} VND</td>
                    <td>{{ number_format($expense->coffee, 0, ',', '.') }} VND</td>
                    <td>{{ number_format($expense->fuel, 0, ',', '.') }} VND</td>
                    <td>{{ number_format($expense->sports, 0, ',', '.') }} VND</td>
                    <td>{{ number_format($expense->other_expenses, 0, ',', '.') }} VND</td>
                    <td>{{ number_format($expense->e_wallet, 0, ',', '.') }} VND</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
