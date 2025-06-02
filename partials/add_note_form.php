<div class="container my-4">
  <h2>Add a Note to iNotes</h2>
  <form action="process.php" method="POST">
    <div class="form-group">
      <label for="title">Note Title</label>
      <input type="text" class="form-control" name="title" Required>
    </div>
    <div class="form-group">
      <label for="desc">Note Description</label>
      <textarea class="form-control" name="description" rows="3" Required></textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-1" id="add_note">Add Note</button>
  </form>
</div>
