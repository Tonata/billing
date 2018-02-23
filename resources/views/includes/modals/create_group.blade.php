<!-- Modal -->
<div data-backdrop="false" id="createGroup" class="modal fade" role="dialog">
    <div class="modal-dialog">

        {!! Form::open(array('route'=>'groups.store', 'method'=>'POST')) !!}
        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="margin-top: 10px"> <i class="fa fa-plus"></i> Create Group</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="form-group">
                        {!! Form::label('name','Group Name') !!}
                        {!! Form::text('name', null, array('class'=>'form-control addtogroup', 'required')) !!}
                    </div>
                    {!! Form::textarea('add-group-modal', null, array('hidden', 'value'=>'add-group-modal')) !!}
                    <div class="form-group">
                        {!! Form::label('description','Group Description') !!}
                        {!! Form::textarea('description', null, array('class'=>'form-control addtogroup', 'required')) !!}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-remove"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary" > <i class="fa fa-plus"></i> Save</button>
                </div>
            </div>
        {!! Form::close() !!}

    </div>
</div>