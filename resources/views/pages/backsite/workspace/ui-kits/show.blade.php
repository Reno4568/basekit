<table class="table table-bordered">
    <tr>
        <th>Id Category</th>
        <td>{{ isset($ui_kit->id_category) ? $ui_kit->id_category : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Name</th>
        <td>{{ isset($ui_kit->name) ? $ui_kit->name : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Thumbnail</th>
        <td>
            <img src="
                @if ($ui_kit->thumbnail != "") 
                    @if(File::exists('storage/'.$ui_kit->thumbnail))
                        {{ url(Storage::url($ui_kit->thumbnail)) }}
                    @else
                        {{-- {{ url(Storage::url('app/public/'.$ui_kit->image)) }} --}}
                        {{ asset('/back-design/clients/default/image-not-found.svg') }}
                    @endif
                @else
                    {{ asset('/back-design/clients/default/image-not-found.svg') }}
                @endif "
                alt="tenant logo" class="users-avatar-shadow" height="100" width="100">
        </td>
    </tr>
    <tr>
        <th>Name</th>
        <td><a href="{{ $ui_kit->url_file ?? '#' }}" target="_blank" rel="noopener noreferrer">URL File</a></td>
    </tr>
</table>