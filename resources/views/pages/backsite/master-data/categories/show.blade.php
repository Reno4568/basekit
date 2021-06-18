<table class="table table-bordered">
    <tr>
        <th>Date</th>
        <td>{{ date("d/m/Y H:i:s",strtotime($category->created_at)) ?? 'N/A' }}</td>
    </tr>
    <tr>
        <th>Name</th>
        <td>{{ isset($category->name) ? $category->name : 'N/A' }}</td>
    </tr>
</table>