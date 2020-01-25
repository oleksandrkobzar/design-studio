<section class="admin-header">
    <div class="container">
        <h1>Admin Panel</h1>
        <button class="btn btn-primary" id="show-data" type="submit">Watch data</button>
        <button class="btn btn-danger" type="submit" id="delete-all" onclick="daleteAll()">Delete all</button>
        <table class="table table-dark table-data">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Title</th>
                    <th scope="col">Text</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody id="data">
            </tbody>
        </table>
    </div>
</section>