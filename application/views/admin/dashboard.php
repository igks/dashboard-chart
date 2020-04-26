<div class="container">
  <h5 class="mt-2 mb-3 ml-1">
    <strong>Dashboard </strong><small><i class="fas fa-angle-double-right "></i> overview</small>
  </h5>
  <div class ="row">
    <div class="col-md-6 mt-2">
      <div class="card">
        <div class="card-header">
          <i class="fas fa-users text-primary"></i>
          <strong>Data Portion</strong>
        </div>
        <div class="card-body">
          <canvas id="pie" width="100" height="100"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-6 mt-2">
      <div class="card">
        <div class="card-header">
          <i class="fas fa-signal text-primary"></i>
          <strong>Data Trend</strong>
        </div>
        <div class="card-body">
          <canvas id="bar" width="100" height="100"></canvas>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <i class="fas fa-sitemap text-primary"></i>
          <strong>Org Chart</strong>
        </div>
        <div class="card-body">
          <ol class="org-chart">
            <li class="">
              <div class="lvl-1">
                <a href="" ><span class="nama">Level 1</span></a><br>
                <a href="" ><span class="jabatan">Level 1</span></a>
              </div>
              <ol class="">
                <li class="">
                  <div class="lvl-2">
                    <a href=""><span class="nama">Level 2</span></a><br>
                    <a href=""><span class="jabatan">Level 2</span></a>
                  </div>
                </li>
                <li class="">
                  <div class="lvl-2">
                    <a href=""><span class="nama">Level 2</span></a><br>
                    <a href=""><span class="jabatan">Level 2</span></a>
                  </div>
                </li>
                <li class="">
                  <div class="lvl-2">
                    <a href=""><span class="nama">Level 2</span></a><br>
                    <a href=""><span class="jabatan">Level 2</span></a>
                  </div>
                </li>
                <li class="">
                  <div class="lvl-2">
                    <a href=""><span class="nama">Level 2</span></a><br>
                    <a href=""><span class="jabatan">Level 2</span></a>
                  </div>
                  <ol class="lvl-3">
                    <li class="">
                      <div class="lvl-3">
                        <a href=""><span class="nama">Level 3</span></a><br>
                        <a href=""><span class="jabatan">Level 3</span></a>
                      </div>
                    </li>
                  </ol>
                </li>
              </ol>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</div>

<script src="<?php echo base_url().'assets/js/Chart.js' ?>"></script>
<script src="<?php echo base_url().'assets/js/drawChart.js' ?>"></script>