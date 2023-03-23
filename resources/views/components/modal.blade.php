<div class="modal fade" id="exampleModal{{ $id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                test123
                @php
                    $user = DB::table('users')
                        ->where('id', $id)
                        ->first();
                @endphp
                <form action="{{ route('datupdate') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $id }}">
                    <input type="text" name="name" value="{{ $user->name }}">
                    <input type="text" name="email" value="{{ $user->email }}">
                    <button type="submit">Submit</button>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
