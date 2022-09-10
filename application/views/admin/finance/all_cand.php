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
                    <div class="row">
                        <div class="col-sm-4">
                            <h3 class="card-title">Payment details for candidates</h3>
                        </div>
                        <div class="col-sm-8">
                            <form method="post" action="<?php echo base_url().'admin/finance/searchCandByDate'?>" >
                                <div class="row">
                                    <div class="col-sm-2">
                                        <input required class="form-control" type="date" value="<?php echo date('Y-m-d');?>" id="example-date-input" name="start_date">
                                    </div>
                                    <div class="col-sm-2">
                                        <input required class="form-control" type="date" value="<?php echo date('Y-m-d');?>" id="example-date-input" name="end_date">
                                    </div>
                                    <div class="col-sm-1">
                                        <input type="submit" value="Search" class="btn btn-primary btn-sm mt-1"/>
                                    </div>
                            </form>
                            <div class="col-sm-6">
                                <?php
                                $total=0;
                                foreach($payments as $cand)
                                { 
                                    $total=$total+$cand->payment;
                                }?>
                                <h3>Total Price: <?php echo $total; ?></h3>
                            </div>
                            <div class="card-tools col-sm-1">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                    <i class="fas fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 10%">
                                User name
                            </th>
                            <th style="width: 10%">
                                Email
                            </th>
                            <th style="width: 10%">
                                Phone
                            </th>
                            <th style="width: 10%">
                                Date
                            </th>
                            <th style="width: 10%">
                                Payment
                            </th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i=1;
                        foreach($payments as $cand)
                        {

                            ?>
                            <tr>
                                <td>
                                    <?php echo $i; ?>
                                </td>
                                <td>
                                    <?php echo $cand->fname." ".$cand->lname; ?>
                                </td>
                                <td>
                                    <?php echo $cand->email; ?>
                                </td>
                                <td>
                                    <?php echo $cand->phone_number; ?>
                                </td>
                                <td>
                                    <?php 
                                        $date= $cand->date;
                                        echo date('d-F-Y', strtotime($date)); //June, 2017
                                    ?>
                                </td>
                                <td class="project_progress">
                                    <?php echo $cand->payment; ?>
                                </td>
                            </tr>
                            <?php
                            $i++;
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
<!-- For Date picker  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $("#datepicker").datepicker({
    format: "mm-yyyy",
    startView: "months", 
    minViewMode: "months"
    });
    $("#datepicker1").datepicker({
    format: "mm-yyyy",
    startView: "months", 
    minViewMode: "months"
    });
</script>
<?php
$this->load->view('admin/includes/footer.php');
?>