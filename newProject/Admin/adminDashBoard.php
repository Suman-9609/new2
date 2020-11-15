<!-- Admin header include -->
<?php
include("adminInclude/header.php");
?>
<div class="col-sm-9 mt-5">
    <div class="row mx-5 text-center">
        <div class="col-sm-4 mt-1">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header">Course</div>
                <div class="card-body">
                    <h4 class="card-title">5</h4>
                    <a href="" class="btn text-white">View</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-1">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">Students</div>
                <div class="card-body">
                    <h4 class="card-title">25</h4>
                    <a href="" class="btn text-white">View</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-1">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header">Sold</div>
                <div class="card-body">
                    <h4 class="card-title">
                        3
                    </h4>
                    <a href="" class="btn text-white">View</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-5 mt-3 text-center">
        <!-- Table -->
        <p class="bg-dark text-white p-2">Course Ordered</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Order Id</th>
                    <th scope="col">Course Id</th>
                    <th scope="col">Student Email</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">22</th>
                    <td>100</td>
                    <td>sdsp32391@gmail.com</td>
                    <td>13/11/2020</td>
                    <td>2000</td>
                    <td><button type="submit" class="btn btn-secondary" name="delete" value="Delete">
                            <i class="far fa-trash-alt"></i>
                        </button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div> <!-- div Row close from header -->
</div> <!-- div container-fluid close from header -->

<!-- Admin footer include -->
<?php
include("adminInclude/footer.php");
?>