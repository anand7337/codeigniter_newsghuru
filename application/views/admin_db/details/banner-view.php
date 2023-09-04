<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="bi bi-table"></i> Banner's Details</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Category</th>
                      <th>Banner image</th>
                      <th>Edit Banner</th>
                      <th>Delete Banner</th>
                    </tr>
                  </thead>
                  <?php
                  if(isset($data1)) {
                    foreach($data1 as $row){
                  ?>
                  <tbody>
                    <tr>
                      <td><?=$row->category ?></td>
                      <td><img src="<?=base_url('./upload/banners/').$row->image1?>" width="500"></td>
                      <td><a href="<?=base_url('admin/edit_banner/').$row->id ?>">Edit</a></td>
                      <td><a href="<?=base_url('admin/delete_banner/').$row->id ?>">Delete</a></td>
                    </tr>
                  </tbody>
                  <?php
                  }
                }
                  ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>