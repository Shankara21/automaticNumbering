@extends('layouts.main')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row ">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
            </div>
            <div class="card-body">
                <form method="POST" action="/qs-store">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Project Name</label>
                        <textarea id="basic-default-message" class="form-control" data-gramm="false"
                            wt-ignore-input="true" data-quillbot-element="hjmwqztesDJ_JJyVBhz74"
                            data-dl-input-translation="true" name="project"></textarea>
                            <input type="hidden" name="category_id" value="11">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Line</label>
                                <input type="text" class="form-control" id="basic-default-company" name="line">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">PIC</label>
                                <input type="text" class="form-control" id="basic-default-company" name="PIC">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3" style="">
                                <label for="defaultSelect" class="form-label">Section</label>
                                <select id="defaultSelect" class="form-select" style="" name="section">
                                    @foreach ($section as $section)
                                    <option value="{{ $section->name }}">{{ $section->name }}
                                        ({{ $section -> description }})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Status</label>
                                <select id="defaultSelect" class="form-select" style="" name="status">
                                    <option value="On Progress">On Progress</option>
                                    <option value="On Going">On Going</option>
                                    <option value="Done">Done</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
