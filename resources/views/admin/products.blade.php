<x-layouts.admin>
    @section('breadcrumb')
    <x-dashboard-breadcrumb
        :title="'Products'"
        :icon="'fa-solid fa-plus'"
        :route="route('admin.index')"
        :buttonText="'Add New'"
    />
    @endsection

    <small>
        <a href="#">All - 0</a>
        । <a href="#">Published - 0</a>
        । <a href="#">Draft - 0</a>
        । <a href="#">Trash - 0</a>
    </small>


    <div class="row">

        <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-2">
            <div class="card border-0 shadow">
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="media align-items-center">
                                    <a href="#"><img class="rounded" style="height: 80px;" src="https://d23b5yck4idk5n.cloudfront.net/wp-content/uploads/2025/03/3893fe79-8ccd-475f-bb4e-c0f10ece210f.jpg"></a>
                                    <div class="mx-2">
                                        <a class="text-decoration-none" href="#"><h6 class="font-weight-bold mb-0 text-secondary">Women's Dress</h6></a>
                                        <small class="text-secondary text-uppercase mb-0">SKU: 65871</small>
                                    </div>
                                </div>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle p-2" href="javascript:void(0)" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical text-gray-400"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right border-0 shadow" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href=""><i class="fa-solid fa-pen-to-square mr-2 text-gray-400"></i> Edit</a>
                                        <a class="dropdown-item" href=""><i class="fa-solid fa-trash mr-2 text-gray-400"></i> Trash</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</x-layouts.admin>
