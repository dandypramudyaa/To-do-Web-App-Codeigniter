<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Add my new To-do List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>Dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>Todo">My To-do List</a></li>
                    <li class="breadcrumb-item active">Add new</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- /.content-header -->

<section class="content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-list-ul" style="margin-top: 10px;"></i> Add new Task List
            </div>
            <div class="card-body">

                <form action="<?= base_url() ?>Todo/new" method="POST">
                    <div class="form-group row">
                        <label for="mytask" class="col-sm-2 col-form-label">My Task</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="task" id="mytask" placeholder="Your new task">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="datepicker" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input id="datepicker" width="276" name="date" />
                            <script>
                                $('#datepicker').datepicker({
                                    uiLibrary: 'bootstrap4'
                                });
                            </script>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2 mt-2">
                            <button type="submit" class="btn btn-primary btn-block">Add</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
    </div>
</section>