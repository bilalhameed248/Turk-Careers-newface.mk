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
                        <h1>Pricing</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Settings</a></li>
                            <li class="breadcrumb-item active">Pricing plans</li>
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
                    <h3 class="card-title">Pricing plans for employers</h3>

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
                                Plan name
                            </th>
<!--                            <th style="width: 20%">-->
<!--                                Apply limit-->
<!--                            </th>-->
                            <th style="width: 20%">
                                Post limit
                            </th>
                            <th style="width: 20%">
                                Price
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
                        foreach($pricings as $cand)
                        {
                            ?>
                            <tr>
                                <td>
                                    #
                                </td>
                                <td>
                                    <?php echo $cand->name; ?>
                                </td>
<!--                                <td>-->
<!--                                    --><?php //echo $cand->apply_limit; ?>
<!--                                </td>-->
                                <td class="project_progress">
                                    <?php echo $cand->post_limit; ?>
                                </td>
                                <td class="project_progress">
                                    <?php echo $cand->price; ?>
                                </td>
                                <td class="project-state">
                                    <?php if($cand->status==1){ ?>
                                        <span class="badge badge-success">Active</span> <?php }else{ ?>
                                        <span class="badge badge-danger">Inactive</span> <?php } ?>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary" href="<?php echo base_url();?>admin/settings/update_pricing/<?php echo $cand->id;?>/emp">Edit</a>
                                    <?php if($cand->status==1){ ?>
                                    <a class="btn btn-danger" onClick="return confirm('Are you sure you are going to make this record Inactive')" href="<?php echo base_url();?>admin/settings/makeinactive/<?php echo $cand->id;?>">

                                            Make Inactive
                                        </a><?php }else{  ?>
                                        <a class="btn btn-success" onClick="return confirm('Are you sure you are going to make this record active')" href="<?php echo base_url();?>admin/settings/makeactive/<?php echo $cand->id;?>">
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