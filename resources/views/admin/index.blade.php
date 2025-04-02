<x-layouts.admin>
    @section('breadcrumb')
        <x-dashboard-breadcrumb
            :title="'Dashboard'"
            :icon="'fa-solid fa-download'"
            :route="route('admin.index')"
            :buttonText="'Dashboard'"
         />
    @endsection
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1"> Earnings (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-layouts.admin>
