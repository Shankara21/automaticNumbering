@extends('layouts.main')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row h-100">
        <div class="card h-100">
            <div class="py-3">
                <a href="" class="btn btn-primary">Create new</a>
            </div>
            <div class="table-responsive text-nowrap h-100">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Project</th>
                            <th>Line</th>
                            <th>Format Code</th>
                            <th>PIC</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td>Project</td>
                            <td>Line</td>
                            <td>Format Code</td>
                            <td>PIC</td>
                            <td>Status</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-2"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-trash me-2"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
