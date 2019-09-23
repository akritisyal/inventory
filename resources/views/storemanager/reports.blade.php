@extends('storemanager.layout')

@section('top-items')
<nav class="d-flex justify-content-center">
    <a class="btn btn-outline-light btn-sm" href="#">Inventory</a> &nbsp;
    <a class="btn btn-outline-light btn-sm" href="#productmoves">Product Moves</a>&nbsp;
  </nav>
@endsection
@section('matter')
<script>
    window.addEventListener("hashchange", function () {
    window.scrollTo(window.scrollX, window.scrollY - 120);
});
    </script>
<div id="#">
<h2>Inventory</h2>
          <div class="table-responsive">
            <table class="table table-sm table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Type</th>
                  <th>Asset Name</th>
                  <th>Asset Type</th>
                  <th>Date Received</th>
                </tr>
              </thead>
              <tbody>
                            <tr>
                              <td>Entry First Line 1</td>
                              <td>Entry First Line 2</td>
                              <td>Entry First Line 3</td>
                              <td>Entry First Line 4</td>
                              <td>Entry First Line 4</td>

                            </tr>
                            <tr>
                              <td>Entry Line 1</td>
                              <td>Entry Line 2</td>
                              <td>Entry Line 3</td>
                              <td>Entry Line 4</td>
                              <td>Entry First Line 4</td>

                            </tr>
                            <tr>
                              <td>Entry Last Line 1</td>
                              <td>Entry Last Line 2</td>
                              <td>Entry Last Line 3</td>
                              <td>Entry Last Line 4</td>
                              <td>Entry First Line 4</td>

                            </tr>
                          
              </tbody>
            </table>
          </div>
        </div>
        <div id="productmoves">
            <h2>Product Moves</h2>
            <div class="table-responsive">
                    <table class="table table-sm table-hover">
                            <thead>
                              <tr>
                                <th>Date</th>
                                <th>Asset Name</th>
                                <th>From</th>
                                <th>To</th>
                              </tr>
                            </thead>
                            <tbody>
                                          <tr>
                                            <td>Entry First Line 1</td>
                                            <td>Entry First Line 2</td>
                                            <td>Entry First Line 3</td>
                                            <td>Entry First Line 4</td>
              
                                          </tr>
                                          <tr>
                                            <td>Entry Line 1</td>
                                            <td>Entry Line 2</td>
                                            <td>Entry Line 3</td>
                                            <td>Entry Line 4</td>
              
                                          </tr>
                                          <tr>
                                            <td>Entry Last Line 1</td>
                                            <td>Entry Last Line 2</td>
                                            <td>Entry Last Line 3</td>
                                            <td>Entry Last Line 4</td>
              
                                          </tr>
                                        
                            </tbody>
                          </table>
                  </div>
        </div>
@endsection