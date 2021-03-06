 <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Marriage</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">

<div class="panel panel-default">
    
    <div class="panel-heading">
        
        <i class="fa fa-lock fa-fw"></i> Marriage
        <div class="pull-right">
            <?php if(has_permission('Marriage.Add')) : ?>
            <a title="Ajouter un nouveau marriage" id="createMarriage" class="btn btn-primary panel-header-btn" href="<?php echo site_url('sacrement/createMarriage');?>"><i title="Ajouter un marriage" class="fa fa-plus-circle"></i> Ajouter un marriage</a>
            <?php endif; ?>
        </div>
        
    </div>
    <div class="panel-body">
    
    <?php if($this->session->flashdata('action_message')) : $message = $this->session->flashdata('action_message'); ?>
        <div class="alert alert-<?php echo $message['type']; ?> alert-dismissable">
            <button type="button" class="close" data-dimiss="alert">&times;</button>
        <?php echo $message['text']; ?>
        </div>
    <?php endif; ?>

    <?php if($this->session->flashdata('notification_message')) : 
            $message = $this->session->flashdata('notification_message');?>
        <div class="alert alert-<?php echo $message['type']; ?> alert-dismissable">
            <button type="button" class="close" data-dimiss="alert" aria-hidden="true">&times;</button>
            <?php echo $message['text']; ?>
        </div>
    <?php endif; ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th><?php echo form_checkbox('select_all','select_all[]',FALSE,'id="select_all"'); ?></th>
                    <?php foreach($marriage_columns as $column) : ?>
                        <th><?php echo $column; ?></th>
                    <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($marriages as $marriage) : ?>
                        <tr>
                            <td><?php echo form_checkbox('select_all','select_all[]'); ?></td>
                            <td><?php echo $marriage['num_marriage']; ?></td>
                            <td><?php echo $marriage['husband']; ?></td>
                            <td><?php echo $marriage['wife']; ?></td>
                            <td><?php echo $marriage['parrain']; ?></td>
                            <td><?php echo $marriage['marraine'] ?></td>
                            <td><?php echo $marriage['date_marriage'] ?></td>
                            <?php if(has_permission('Marriage.Edit') || has_permission('Marriage.Delete')) : ?>    
                            <td>
                                <?php if(has_permission('Marriage.Edit')) : ?>
                                <a class="btn btn-info edit" href="<?php echo site_url('sacrement/editMarriage/'.$marriage['marriage_id']);?>">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <?php endif; ?>
                                
                                <?php if(has_permission('Marriage.Delete')) : ?>
                                <a class="btn btn-danger delete" href="<?php echo site_url('sacrement/deleteMarriage/'.$marriage['marriage_id']);?>">
                                    <i class="fa fa-trash-o"></i> Delete
                                </a>
                                <?php endif; ?>
                            </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12 col-sm-12">
                <?php echo form_checkbox('select_all','select_all[]',FALSE,'id="select_all_table"'); ?>
                <?php echo form_label('Check All','select_all_table'); ?>
                
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> With Selected <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#"><i class="fa fa-check"></i> Activate</a></li>					  
                      <li><a href="#"><i class="fa fa-minus-circle"></i> Deactivate</a></li>
                      <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
                      <li class="divider"></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                </div><!-- /btn-group -->

            </div>
        </div>
    </div>
    <div id="createUserModal"class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">	
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Create New User</h4>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-primary" id="saveUser"><i class="fa fa-save"></i> Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>

</div>
