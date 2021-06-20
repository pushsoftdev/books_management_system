<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>

<h2>Add a book</h2>

<form method="post" action="/books/create">
    <div class="form-group">
        <label for="txtName">Name</label>
        <input type="text" class="form-control" id="txtName" name="txtName">
    </div>

    <div class="form-group">
        <label for="txtRating">Rating</label>
        <input type="number" class="form-control" id="txtRating" name="txtRating">
    </div>

    <div class="form-group">
        <label for="txtPublishedOn">Published On</label>
        <input type="date" class="form-control" id="txtPublishedOn" name="txtPublishedOn">
    </div>
    
    <button type="submit" class="btn btn-primary">Save</button>
</form>

<?= $this->endSection(); ?>