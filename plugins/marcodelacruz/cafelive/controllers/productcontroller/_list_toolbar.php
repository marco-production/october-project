<div data-control="toolbar">
    <a
        href="<?= Backend::url('marcodelacruz/cafelive/productcontroller/create') ?>"
        class="btn btn-primary oc-icon-plus">
        <?= e(trans('backend::lang.form.create')) ?>
    </a>
    <a
        href="<?= Backend::url('marcodelacruz/cafelive/productcontroller/import') ?>"
        class="btn btn-default oc-icon-plus">
        Import Records
    </a>
    <a
        href="<?= Backend::url('marcodelacruz/cafelive/productcontroller/export') ?>"
        class="btn btn-default oc-icon-download">
        Export Records
    </a>
    <button
        class="btn btn-default oc-icon-trash-o"
        data-request="onDelete"
        data-request-confirm="<?= e(trans('backend::lang.list.delete_selected_confirm')) ?>"
        data-list-checked-trigger
        data-list-checked-request
        data-stripe-load-indicator>
        <?= e(trans('backend::lang.list.delete_selected')) ?>
    </button>
</div>
