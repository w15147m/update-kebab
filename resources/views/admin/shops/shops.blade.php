@extends('admin.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

            <h2>Restaurant Information</h2>
            <div class="container">
            <h3>Restaurant</h3>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>S:NO</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Phone</th>
                        <th>Actions</th> <!-- New column for actions -->
                    </tr>
                </thead>
                <tbody>
                    <!-- Dummy Data Rows -->
                    <tr>
                        <td>1</td>
                        <td>Restaurant A</td>
                        <td>123 Main St</td>
                        <td>(555) 123-4567</td>
                        <td>
                            <!-- Add your action buttons here -->
                            <a href="#" class="btn btn-danger">Delete</a>
                            <a href="#" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Restaurant B</td>
                        <td>456 Oak St</td>
                        <td>(555) 987-6543</td>
                        <td>
                            <a href="#" class="btn btn-danger">Delete</a>
                            <a href="#" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                    <!-- ... up to 20 rows ... -->
                    <tr>
                        <td>3</td>
                        <td>Restaurant T</td>
                        <td>909 Oak St</td>
                        <td>(555) 999-8888</td>
                        <td>
                            <a href="#" class="btn btn-danger">Delete</a>
                            <a href="#" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
