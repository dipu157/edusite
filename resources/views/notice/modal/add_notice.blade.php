<div class="modal fade" id="addNoticeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Notice</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" class="row g-3" enctype="multipart/form-data" id="noticeForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mt-2 p-2">

                            <div class="form-group row required">
                                <label for="title" class="col-sm-4 col-form-label text-md-right">Title</label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <input type="text" name="title" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row required">
                                <label for="notice_date" class="col-sm-4 col-form-label text-md-right">Notice Date</label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <input type="text" name="notice_date" class="form-control datepicker" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="expiry_date" class="col-sm-4 col-form-label text-md-right">Expiry Date</label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <input type="text" name="expiry_date" value="" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="action" class="col-sm-4 col-form-label">Type</label>
                                <div class="col-sm-8">

                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" id="action-y" name="type" value="{!! 'D' !!}" checked>
                                                <span style="color: #0a0a0a">Display</span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" id="action-n" name="type" value="{!! 'E' !!}">
                                                <span style="color: #0a0a0a">Email</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="confidential" class="col-sm-4 col-form-label">Confidential</label>
                                <div class="col-sm-8">

                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" id="confidential-y" name="confidentiality" value="{!! 'C' !!}">
                                                <span style="color: #0a0a0a">Yes</span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" id="confidential-n" name="confidentiality" value="{!! 'P' !!}" checked>
                                                <span style="color: #0a0a0a">No</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="receiver" class="col-sm-4 col-form-label">Receiver</label>
                                <div class="col-sm-8">

                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" id="receiver-a" name="receiver" value="{!! 'A' !!}" checked>
                                                <span style="color: #0a0a0a">All</span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" id="receiver-d" name="receiver" value="{!! 'D' !!}">
                                                <span style="color: #0a0a0a">Department</span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" id="receiver-p" name="receiver" value="{!! 'P' !!}">
                                                <span style="color: #0a0a0a">Person</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="description" class="col-sm-4 col-form-label text-md-right">Description</label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <textarea class="form-control" name="description" cols="50" rows="4" id="description"></textarea>
                                    </div>
                                </div>
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


