<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <td>{{ isset($spackages->name) ? $spackages->name : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Price</th>
        <td>{{ isset($spackages->price) ? number_format($spackages->price) : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Month Length</th>
        <td>{{ isset($spackages->month_length) ? $spackages->month_length : 'N/A' }}</td>
    </tr>
</table>