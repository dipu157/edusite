<div class="modal fade" id="addMenuPageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Menu Page</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" class="row g-3" id="menuPageForm">
                    @csrf
                    <div class="row">

                        <div class="col-md-12 mt-2 p-2">
                            <div class="form-group">
                                <label>Menu Name</label>
                                {!! Form::select('menu_id',$menus,null,array('id'=>'menu_id','class'=>'form-control')) !!}
                              </div>

                            <div class="form-group">
                              <label>Title</label>
                              <input type="text" class="form-control" name="title" placeholder="Enter title">
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" rows="5" cols="5" ></textarea>
                              </div>
                        </div>

                      </div>
                    <input type="submit" class="btn btn-primary" id="btnsave" value="Save">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


