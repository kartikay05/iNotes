<div class="container my-4">
  <table id="myTable" class="table table-striped table-bordered table-hover align-middle responsive nowrap">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Title</th>
        <th>Description</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include 'config/conn.php';
      $sql = "SELECT * FROM `notes`";
      $result = mysqli_query($conn, $sql);
      $sno = 0;
      while ($row = mysqli_fetch_assoc($result)) {
        $sno++;
        echo "<tr>
          <th scope='row'>{$sno}</th>
          <td>{$row['title']}</td>
          <td>{$row['desp']}</td>
          <td>
            <button class='edit btn btn-sm btn-outline-primary me-1' id='{$row['s_no']}'>Edit</button>
            <form method='POST' action='process.php' style='display:inline-block'>
              <input type='hidden' name='delete' value='{$row['s_no']}'>
              <button type='submit' class='delete btn btn-sm btn-outline-danger'>Delete</button>
            </form>
          </td>
        </tr>";
      }
      ?>
    </tbody>
  </table>


  <script src="./assets/js/main.js"></script>
</div>