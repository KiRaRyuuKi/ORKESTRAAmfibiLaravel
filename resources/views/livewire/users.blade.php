<div class="container my-5">
    <h5 class="text-center display-2 fw-bold py-3">Users</h5>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
        @foreach ($users as $key => $user)
            <div class="col">
                <div class="card border rounded shadow">
                    <img src="https://source.unsplash.com/500x500?face-{{ $key }}" alt="image"
                        class="card-img-top w-50 mx-auto mt-4 rounded-circle">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $user->name }}</h5>
                        <p class="card-text text-center">{{ $user->email }}</p>
                        <div class="d-grid gap-2">
                            <button class="btn btn-secondary" type="button">Add Friend</button>
                            <button class="btn btn-primary" type="button"
                                wire:click="message({{ $user->id }})">Message</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
