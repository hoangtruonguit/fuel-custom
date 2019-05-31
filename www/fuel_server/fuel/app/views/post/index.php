<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CRUD BackboneJS PHP MySQL</title>

    <!-- Bootstrap -->
    <?php echo Asset::css('vendor.css'); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <div class="page-header">
        <h1>CRUD BackboneJS PHP MySQL</h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body" id="primary-content">
            <!-- this is content -->
        </div>
    </div>
    <button style="margin:10px 0;" class="btn btn-warning" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-desktop"></i> Show Output JSON</button>
    <div class="collapse" id="collapseExample">
        <code id="output" style="display:block;white-space:pre-wrap;"></code>
    </div>
</div>

<script type="text/jst" id="formTemplate">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="alert alert-danger fade in" style="display:none;"></div>
                <form>
                    <h2><%= name %></h2>
                    <% if(_.isEmpty(id)==false){ %>
                    <div class="form-group">
                        <label>ID:</label>
                        <input type="text" class="form-control" name="id" value="<%= id %>" readonly />
                    </div>
                    <% } else{ %>
                    <div class="form-group">
                        <label>ID:</label>
                        <input type="text" class="form-control myid" name="id"/>
                    </div>
                    <% } %>
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="name" value="<%= name %>" />
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" class="form-control" name="email" value="<%= email %>" />
                    </div>
                    <div class="form-group">
                        <label>Phone:</label>
                        <input type="text" class="form-control" name="phone" value="<%= phone %>" />
                    </div>
                    <div class="form-group">
                        <label>Address:</label>
                        <textarea class="form-control" rows="5" name="address"><%= address %></textarea>
                    </div>
                    <button class="save btn btn-large btn-info" type="submit">Save</button>
                    <a href="#crud/index" class="btn btn-large btn-default">Cancel</a>
                </form>
            </div>
        </div>
    </script>

<!-- the index container -->
<script type="text/template" id="indexTemplate">

    <a style="margin:10px 0px;" class="btn btn-large btn-info" href="#crud/new"><i class="fa fa-plus"></i> Create New Data</a>
    <a data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2" style="margin:10px 0px;" class="btn btn-large btn-success" href="#crud/index"><i class="fa fa-list"></i> View Data (Double Click)</a>

    <div class="collapse" id="collapseExample2">
        <% if (_.isEmpty(cruds)){ %>
        <div class="alert alert-warning">
            <p>There are currently no cruds. Try creating some.</p>
        </div>
        <% } %>

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th width="140">Action</th>
            </tr>
            </thead>
            <tbody>
            <% _.each(cruds, function (crud) { %>
            <tr>
                <td><%= crud.id %></td>
                <td><%= crud.name %></td>
                <td><%= crud.email %></td>
                <td><%= crud.phone %></td>
                <td><%= crud.address %></td>
                <td class="text-center">
                    <a class="btn btn-xs btn-info" href="#crud/<%= crud.id %>/edit"><i class="fa fa-pencil"></i> Edit</a>
                    <a class="btn btn-xs btn-danger" href="#crud/<%= crud.id %>/delete"><i class="fa fa-trash"></i> Delete</a>
                </td>
            </tr>
            <% }); %>
            </tbody>
        </table>
    </div>

</script>

<?php echo Asset::js('jquery.min.js') ?>
<?php echo Asset::js('underscore-min.js') ?>
<?php echo Asset::js('backbone-min.js') ?>
<?php //echo Asset::js('unity.js'); ?>
<?php echo Asset::js('helpers.js'); ?>
<?php echo Asset::js('router.js'); ?>
<?php echo Asset::js('post/collections/post.js'); ?>
<?php echo Asset::js('post/models/post.js'); ?>
<?php echo Asset::js('post/views/edit.js'); ?>
<?php echo Asset::js('post/views/add.js'); ?>
<?php echo Asset::js('post/views/view.js'); ?>

<script>
    new app.Router();
</script>
</body>
</html>