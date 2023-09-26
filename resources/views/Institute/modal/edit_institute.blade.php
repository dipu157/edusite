<div class="modal fade" id="editInstituteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Institute</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" class="row g-3" enctype="multipart/form-data" id="edit_instituteForm">
                    @csrf
                    <div class="row">

                        <input type="text" name="id" id="ins_id">
                        <input type="text" name="emp_photo" id="ins_logo">

                        <div class="col-md-6">
                            <div class="form-group">
                              <label>Name</label>
                              <input type="text" id="name" class="form-control" name="name" placeholder="Enter Name">
                            </div>

                            <div class="form-group">
                                <label>Website</label>
                                <input type="text" id="website" class="form-control" name="website" placeholder="Enter website">
                              </div>

                            <div class="form-group">
                                <label>Principle Message</label>
                                <textarea class="form-control" id="principle_msg" cols="50" rows="2" name="principle_msg"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" id="address" cols="50" rows="2" name="address"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" id="email" class="form-control" name="email" placeholder="Enter Email">
                              </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" id="city" class="form-control" name="city" placeholder="Enter City">
                            </div>

                            <div class="form-group">
                            <label>State</label>
                            <input type="text" id="state" class="form-control" name="state" placeholder="Enter state">
                            </div>

                            <div class="form-group">
                                <label>President Message</label>
                                <textarea class="form-control" id="president_msg" cols="50" rows="2" name="president_msg"></textarea>
                            </div>

                            <div class="form-group">
                            <label>Post Code</label>
                            <input type="text" id="post_code" class="form-control" name="post_code" placeholder="Enter post_code">
                            </div>

                            <div class="form-group">
                            <label>Country</label>
                            <input type="text" id="country" class="form-control" name="country" placeholder="Enter Country">
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" id="phone_no" class="form-control" name="phone_no" placeholder="Enter Phone">
                              </div>
                        </div>

                        <div class="col-md-12 mt-2">
                            <div class="form-group">
                                <label>About Institute</label>
                                <textarea class="form-control" id="about" cols="50" rows="3" name="about"></textarea>
                            </div>
                         </div>

                         <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Logo</label>
                                  <input type="file" class="form-control" id="logo" name="logo" onchange="loadFile(event)">
                                </div>
                              </div>
                              <div class="col-md-6" id="logo_img">
                                <span id="logo">
                                  <img id="output" height="120px" width="100px" />
                                </span>
                              </div>
                            </div>
                         </div>

                      </div>
                    <input type="submit" class="btn btn-primary" id="btnupdate" value="Update">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
        var output = document.getElementById('output');
        output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
    </script>
