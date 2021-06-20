<?= $this->extend('layouts/app'); ?>

<?= $this->section('content') ?>

<div class="row mb-4">
    <a href="/books/new"><button type="button" class="btn btn-primary">Add a book</button></a>
</div>

<div class="row">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Rating</th>
                <th scope="col">Published On</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($books as $book) : ?>
            <tr>
                <th scope="row"><?= $book->id ?></th>
                <td><?= $book->name ?></td>
                <td><?= $book->rating ?></td>
                <td><?= $book->publishedOn ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>

</div>
<?= $this->endSection() ?>