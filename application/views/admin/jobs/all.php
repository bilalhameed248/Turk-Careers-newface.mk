<?php
$this->load->view('admin/includes/header.php');

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Jobs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Jobs</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Jobs</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          Job title
                      </th>
                      <th style="width: 20%">
                          Posted on
                      </th>
                      <th style="width: 15%">
                         Salary range
                      </th>
                      <th style="width: 15%">
                         owner_name
                      </th>
                      <th style="width: 15%">
                         Company name
                      </th>
                      <th  class="text-center">
                          status
                      </th>
                      <th style="width: 20%" class="text-center">
                        Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                        foreach($jobs as $cand)
                        {
                  ?>
                  <tr>
                      <td>
                          #
                      </td>
                      <td>
                            <?php echo $cand->title; ?>
                      </td>
                      <td>
                      
                            <?php 
                            $date = $cand->posted_on;
                            echo date('F d Y', strtotime($date)); ?>
                      </td>
                      <td class="project_progress">
                            <?php echo $cand->salary_offered_min.'-'.$cand->salary_offered_max;?>
                      </td>
                      <td class="project_progress">
                        <?php echo $cand->owner_name; ?>
                      </td>
                      <td class="project_progress">
                        <?php echo $cand->company_name; ?>
                      </td>
                      <td class="project-state">
                          <?php if($cand->jstatus==1){ ?>
                          <span class="badge badge-success">Active</span> <?php }else{ ?>
                            <span class="badge badge-danger">Inactive</span> <?php } ?>
                      </td>
                      <td class="project-actions text-right">
                          <?php if($cand->jstatus==1){ ?>
                          <a class="btn btn-danger" onClick="return confirm('Are you sure you are going to make this record Inactive')" href="<?php echo base_url();?>admin/job/makeinactive/<?php echo $cand->jid;?>">
                              
                              Make Inactive
                          </a><?php }else{  ?>
                          <a class="btn btn-success" onClick="return confirm('Are you sure you are going to make this record active')" href="<?php echo base_url();?>admin/job/makeactive/<?php echo $cand->jid;?>">
                              <i class="fa fa-pencil">
                              </i>
                              Make Active
                          </a> <?php  } ?>  
                      </td>
                  </tr>
                  <?php 
                        }
                  
                  ?>
                  
                  
                  
             
            
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
$this->load->view('admin/includes/footer.php');
?>