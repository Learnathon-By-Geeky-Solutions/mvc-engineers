@section('header')
    <div class="row g-2 align-items-center">
        <div class="col">
            <!-- Page pre-title -->
            <div class="page-pretitle">
                Overview
            </div>
            <h2 class="page-title">
                Food Category
            </h2>
        </div>
        <!-- Page title actions -->
        <div class="col-auto ms-auto d-print-none">
            <div class="btn-list">
                <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#addCategory">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 5l0 14"></path>
                        <path d="M5 12l14 0"></path>
                    </svg>
                    Create new Category
                </a>
            </div>
        </div>

    </div>
@endsection
<div>
    <div class="card">
        <div class="card-body">
            <div id="table-default" class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>
                            <button class="table-sort" data-sort="sort-name">Name</button>
                        </th>
                        <th>
                            <button class="table-sort" data-sort="sort-city">Status</button>
                        </th>
                        <th>
                            <button class="table-sort" data-sort="sort-type">Action</button>
                        </th>

                    </tr>
                    </thead>
                    <tbody class="table-tbody">

                    @foreach($categories as $index=> $category)
                        <tr wire:key="cat_{{$index}}">
                            <td class="sort-name">{{$category->name}}</td>
                            <td class="sort-city">{{$category->active ? 'Active': 'Inactive'}}</td>
                            <td class="sort-type">
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a wire:click.debounce="deleteCategory({{$category->id}})" href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal" id="addCategory" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="category" class="form-label">Category Name</label>
                            <input wire:model.debounce="category_name" type="text" class="form-control" id="category"
                                   placeholder="Enter Category Name">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select wire:model="status" class="form-select" id="status">
                                <option value="active" selected>Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                    <button wire:click.debounce="saveCategory" type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
