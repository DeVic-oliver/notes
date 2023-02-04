    <form action="/admin/users/delete/{{$user->id}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete this user</button>
    </form>
