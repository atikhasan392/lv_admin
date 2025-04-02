{{-- @props([
    'id' => 'modal',
    'title' => 'Modal Title',
    'actionUrl' => 'javascript:;',
    'actionText' => 'Save changes'
]) --}}

{{-- <x-dashboard-modal id="modal" title="Modal Title" actionUrl="javascript:;" actionText="Save changes">
    <p>Modify your dashboard settings here.</p>
</x-dashboard-modal> --}}

<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $id }}Label" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0">
            <div class="modal-header d-flex align-items-center">
                <h5 class="modal-title" id="{{ $id }}Label">{{ $title }}</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="h6 fa-regular fa-circle-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm border-0 btn-secondary px-3" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-sm border-0 btn-primary px-4" href="{{ $actionUrl }}">{{ $actionText }}</a>
            </div>
        </div>
    </div>
</div>
