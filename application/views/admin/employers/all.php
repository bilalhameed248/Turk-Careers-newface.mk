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
            <h1>Employers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employer</li>
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
          <h3 class="card-title">Employers</h3>

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
                      <th style="width: 15%">
                          Email
                      </th>
                      <th style="width: 15%">
                          Full Name
                      </th>
                      <th style="width: 15%">
                         Phone Number
                      </th>
                      <th style="width: 15%">
                         #Jobs posted
                      </th>
                      <th style="width: 20%">
                        Last action
                      </th>
                      <th style="width: 8%" class="text-center">
                          status
                      </th>
                      <th style="width: 10%" class="text-center">
                        Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                        foreach($owners as $cand)
                        {

                  ?>
                  <tr>
                      <td>
                          #
                      </td>
                      <td>
                          <?php echo $cand->owner_email; ?>
                      </td>
                      <td>
                            <?php echo $cand->owner_name; ?>
                      </td>
                      <td class="project_progress">
                            <?php echo $cand->phone_number;?>
                      </td>
                      <td class="project_progress">
                            <?php echo $cand->phone_number;?>
                      </td>
                      <td class="project_progress">
                            <?php echo $cand->activity_desc;?>
                      </td>
                      <td class="project-state">
                          <?php if($cand->emp_status==1){ ?>
                          <span class="badge badge-success">Active</span> <?php }else{ ?>
                            <span class="badge badge-danger">Inactive</span> <?php } ?>
                      </td>
                      <td class="project-actions text-right">
                          <?php if($cand->emp_status==1){ ?>
                          <a class="btn btn-danger" onClick="return confirm('Are you sure you are going to make this record Inactive')" href="<?php echo base_url();?>admin/employer/makeinactive/<?php echo $cand->emp_id;?>">
                              
                              Make Inactive
                          </a><?php }else{  ?>
                          <a class="btn btn-success" onClick="return confirm('Are you sure you are going to make this record active')" href="<?php echo base_url();?>admin/employer/makeactive/<?php echo $cand->emp_id;?>">
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