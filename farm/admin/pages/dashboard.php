<?php
  
  include_once 'header.php';
  


?>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
              <a href="read_catogary.php"><i class="material-icons opacity-10">dashboard</i></a>
              </div>
              <div class="text-end pt-1">
                <p style="font-weight: bold;" class="text-sm mb-0 text-capitalize">CATOGARY</p>
                <?php  
                $fetch_ct = "SELECT * FROM `tbl_catogary`";
                $run_ct = mysqli_query($conn,$fetch_ct);
                $count_ct = mysqli_num_rows($run_ct);

                
                ?>
                <h4 class="mb-0"><?php echo $count_ct;  ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
              <a href="showproduct.php"><i class="fa fa-product-hunt" aria-hidden="true"></i></a>
              </div>
              <div class="text-end pt-1">
                <p style="font-weight: bold;" class="text-sm mb-0 text-capitalize">PRODUCTS</p>
              
                <?php  
                $fetch_pro = "SELECT * FROM `table_products`";
                $run_pro = mysqli_query($conn,$fetch_pro);
                $count_pro = mysqli_num_rows($run_pro);

                
                ?>



                <h4 class="mb-0"><?php echo $count_pro;?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <a href="showcontact.php"><i class="material-icons opacity-10">person</i></a>
              </div>
              <div class="text-end pt-1">
                <p style="font-weight: bold;" class="text-sm mb-0 text-capitalize">CONTACTS</p>
                <?php  
                $fetch_con = "SELECT * FROM `tbl_commerce`";
                $run_con = mysqli_query($conn,$fetch_con);
                $count_con = mysqli_num_rows($run_con);

                
                ?>



                <h4 class="mb-0"><?php echo $count_con;?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
              <a href="showemployee.php"><i class="fa fa-users" aria-hidden="true"></i></a>
              </div>
              <div class="text-end pt-1">
                <p style="font-weight: bold;" class="text-sm mb-0 text-capitalize">EMPLOYEE</p>
                <?php  
                $fetch_emp = "SELECT * FROM `tbl_employee`";
                $run_emp = mysqli_query($conn,$fetch_emp);
                $count_emp = mysqli_num_rows($run_emp);

                
                ?>



                <h4 class="mb-0"><?php echo $count_emp; ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>
      </div>
    <br><br>
      <div class="row mb-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Projects</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">30 done</span> this month
                  </p>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Companies</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Members</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Budget</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Completion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Material XD Version</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                            <img src="../assets/img/team-1.jpg" alt="team1">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                            <img src="../assets/img/team-2.jpg" alt="team2">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                            <img src="../assets/img/team-3.jpg" alt="team3">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                            <img src="../assets/img/team-4.jpg" alt="team4">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> $14,000 </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">60%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/small-logos/logo-atlassian.svg" class="avatar avatar-sm me-3" alt="atlassian">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Add Progress Track</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                            <img src="../assets/img/team-2.jpg" alt="team5">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                            <img src="../assets/img/team-4.jpg" alt="team6">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> $3,000 </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">10%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm me-3" alt="team7">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Fix Platform Errors</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                            <img src="../assets/img/team-3.jpg" alt="team8">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                            <img src="../assets/img/team-1.jpg" alt="team9">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Not set </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">100%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm me-3" alt="spotify">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Launch our Mobile App</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                            <img src="../assets/img/team-4.jpg" alt="user1">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                            <img src="../assets/img/team-3.jpg" alt="user2">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                            <img src="../assets/img/team-4.jpg" alt="user3">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                            <img src="../assets/img/team-1.jpg" alt="user4">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> $20,500 </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">100%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/small-logos/logo-jira.svg" class="avatar avatar-sm me-3" alt="jira">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Add the New Pricing Page</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                            <img src="../assets/img/team-4.jpg" alt="user5">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> $500 </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">25%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/small-logos/logo-invision.svg" class="avatar avatar-sm me-3" alt="invision">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Redesign New Online Shop</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                            <img src="../assets/img/team-1.jpg" alt="user6">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                            <img src="../assets/img/team-4.jpg" alt="user7">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> $2,000 </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">40%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info w-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>MESSAGES</h6>
              <p class="text-sm">
               
              </p>
            </div>
            <div class="card-body p-3">
              <div class="timeline timeline-one-side">
                <?php
                $fetch_cn = "SELECT * FROM `tbl_commerce`";
                $run_cn =mysqli_query($conn,$fetch_cn);
                $check_cn = mysqli_num_rows($run_cn);
                if($check_cn > 0){
                  while($a = mysqli_fetch_array($run_cn)){ ?>

                    <div class="timeline-block mb-3">
                    <span class="timeline-step">
                    <i class="fa fa-comment-o" aria-hidden="true"></i>

                    </span>
                    <div class="timeline-content">
                      <h6 class="text-dark text-sm font-weight-bold mb-0"><?php echo $a[1]?></h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?php echo $a[4]?></p>
                    </div>
                  </div>
          <?php        }
                } else{
                  echo "";


                }


                ?>


              
              </div>
            </div>
          </div>
        </div>
      </div>
     <?php
     include_once 'footer.php';
     ?>