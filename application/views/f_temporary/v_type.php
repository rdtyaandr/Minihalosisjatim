<section class="forms mt-2">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card custom-border-radius">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <!-- Add Data Form -->
                <form id="addDataForm">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-12 text-center">
                        <label for="nup">Select NUP</label>
                        <select id="nup" class="form-control">
                          <option value="">Select</option>
                          <option value="ipds">NUP 123456</option>
                          <option value="keuangan">NUP 789012</option>
                          <option value="perpustakaan">NUP 345678</option>
                          <option value="perpustakaan">NUP 901234</option>
                        </select>
                      </div>
                      <div class="col-sm-12 text-center mt-2">
                        <button type="button" class="btn btn-success" onclick="addData()">Add Item</button>
                      </div>
                    </div>
                  </div>
                </form>
                <!-- End Add Data Form -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>