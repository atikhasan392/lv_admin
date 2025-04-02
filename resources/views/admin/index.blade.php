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

        <x-dashboard-sm-card link="{{ route('admin.products') }}" title="products" value="500" icon="fa-solid fa-boxes-stacked"/>
        <x-dashboard-sm-card link="#" title="warehouse stock" value="400" icon="fa-solid fa-warehouse"/>
        <x-dashboard-sm-card link="#" title="category" value="50" icon="fa-solid fa-list"/>
        <x-dashboard-sm-card link="#" title="customers" value="600" icon="fa-solid fa-users-line"/>
        <x-dashboard-sm-card link="#" title="new orders" value="100" icon="fa-solid fa-cart-shopping"/>
        <x-dashboard-sm-card link="#" title="processing orders" value="50" icon="fa-solid fa-truck-fast"/>
        <x-dashboard-sm-card link="#" title="complete orders" value="800" icon="fa-solid fa-calendar-check"/>
        <x-dashboard-sm-card link="#" title="contact us" value="500" icon="fa-solid fa-phone-volume"/>





    </div>
</x-layouts.admin>
