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
                    <h1>Academies</h1>
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
        <h3 class="card-title">Pricing plans</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <br><br>
    <div class="card-body p-0">
        <form method="post" action="<?php echo base_url();?>admin/settings/update_pricing/<?php echo $pricing->id;?>/emp">
            <div class="row">
                <br><br><div class="col">
                    <label class="" for="">Title</label>
                    <input type="text" class="form-control" placeholder="Title" value="<?php echo $pricing->name;?>" name="name">
                </div>
                <div class="col">
                    <label class="" for="">Desc</label>
                    <input type="text" class="form-control" placeholder="Desc" value="<?php echo $pricing->desc;?>" name="desc">
                </div>
            </div><br><br>
            <div class="row">
<!--                <div class="col">-->
<!--                    <label class="" for="">Apply limit</label>-->
<!--                    <input type="number" class="form-control" placeholder="Job Apply limit" value="--><?php //echo $pricing->apply_limit;?><!--" name="apply_limit">-->
<!--                </div>-->
                <div class="col">
                    <label class="" for="">Post limit</label>
                    <input type="number" class="form-control" placeholder="Job Post limit" value="<?php echo $pricing->post_limit;?>" name="post_limit">
                </div>
                <div class="col">
                    <label class="" for="">Price</label>
                    <input type="text" class="form-control" placeholder="price" value="<?php echo $pricing->price;?>" name="price">
                </div>
            </div><br><br>
            <div class="row">

                <div class="col">
                    <button type="submit" class="btn btn-success" name="submit">Save changes</button>
                </div>

            </div>
        </form>
    </div>
<?php
$this->load->view('admin/includes/footer.php');
?>