<?php require_once('header.php'); ?>
<head>
    <style>
    /* This is a single-line comment */
    .content{
        background-color: #f6faff;
    }
    .title {
    width: 90%;
    margin: 0 auto;
    text-align: center;
    color: #800000;
    padding:30px 0 20px 0;
    }
    .title h3{
        font-weight: bold;
        line-height:10px;
    }
    .box-body  {
        padding: 30px 0; /* Adjust the value to your desired spacing */
    }
    .box.box-info {
        border-top-color: #800000;
    }
    .btn-success {
    background-color: #800000;
    border-color: #800000
    }

    .btn-success:hover,
    .btn-success:active,
    .btn-success.hover {
        background-color: #800000
    }
    </style>
</head>
<body>

    <section class="content">
        <div class="row">
            <div class="title mx-auto">
                <h3>Request for Medicines and Supplies</h3>
            </div>
            <div class="col-md-9 mx-auto">
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <div class="box box-info">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Date: </label>
                                <div class="col-sm-9">
                                    <input type="date" autocomplete="off" class="form-control" name="date" value="<?php if(isset($_POST['date'])){echo $_POST['date'];} ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Clinic: </label>
                                <div class="col-sm-9">
                                    <input type="text" autocomplete="off" class="form-control" name="clinic" value="<?php if(isset($_POST['clinic'])){echo $_POST['clinic'];} ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Campus: </label>
                                <div class="col-sm-9">
                                    <input type="text" autocomplete="off" class="form-control" name="campus" value="<?php if(isset($_POST['campus'])){echo $_POST['campus'];} ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Medicines: </label>
                                <div class="col-sm-9">
                                    <input type="text" autocomplete="off" class="form-control" name="medicines" value="<?php if(isset($_POST['medicines'])){echo $_POST['medicines'];} ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Quantity: </label>
                                <div class="col-sm-9">
                                    <input type="text" autocomplete="off" class="form-control" name="quantity" value="<?php if(isset($_POST['quantity'])){echo $_POST['quantity'];} ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Date Received: </label>
                                <div class="col-sm-9">
                                    <input type="date" autocomplete="off" class="form-control" name="date_received" value="<?php if(isset($_POST['date_received'])){echo $_POST['date_received'];} ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Remarks: </label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="remarks" style="height:140px;"><?php if(isset($_POST['remarks'])){echo $_POST['remarks'];} ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Supplies: </label>
                                <div class="col-sm-9">
                                    <input type="text" autocomplete="off" class="form-control" name="supplies" value="<?php if(isset($_POST['supplies'])){echo $_POST['supplies'];} ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Quantity: </label>
                                <div class="col-sm-9">
                                    <input type="text" autocomplete="off" class="form-control" name="quantity" value="<?php if(isset($_POST['quantity'])){echo $_POST['quantity'];} ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Date Received: </label>
                                <div class="col-sm-9">
                                    <input type="date" autocomplete="off" class="form-control" name="date_received" value="<?php if(isset($_POST['date_received'])){echo $_POST['date_received'];} ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Remarks: </label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="remarks" style="height:140px;"><?php if(isset($_POST['remarks'])){echo $_POST['remarks'];} ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Prepared by: </label>
                                <div class="col-sm-9">
                                    <input type="text" autocomplete="off" class="prepared_by" name="button_text" value="<?php if(isset($_POST['prepared_by'])){echo $_POST['prepared_by'];} ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Noted by: </label>
                                <div class="col-sm-9">
                                    <input type="text" autocomplete="off" class="form-control" name="noted_by" value="<?php if(isset($_POST['noted_by'])){echo $_POST['noted_by'];} ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-success pull-left" name="form1" style="width: 300px; height:40px;">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>

<?php require_once('footer.php'); ?>
