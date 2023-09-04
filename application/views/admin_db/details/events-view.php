<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="bi bi-table"></i> Events Table Data</h1>
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
                      <th>Title</th>
                      <th>Sub Title-1</th>
                      <th>Sub Desc-1</th>
                      <th>Date On Uploaded</th>
                      <th>View Details</th>
                    </tr>
                  </thead>
                  <?php
                  if(isset($data1)) {
                    foreach($data1 as $row){
                  ?>
                  <tbody>
                    <tr>
                      <td><?=$row->title ?></td>
                      <td><?=$row->sub_title1 ?></td>
                      <td><?=$row->sub_desc1 ?></td>
                      <td><?=$row->date?></td>
                      <td><a href="<?=base_url('admin/events_desc/') .$row->id ?>">View</a></td>
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