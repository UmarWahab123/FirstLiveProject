@extends('common.main')

@section('sub_header')
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">Dashboard</h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    ADD Blog </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Navy Aside </a>

                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
        </div>

    </div>
</div>
@endsection
@section('content')



<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">Basic Example</h3>
        </div>
    </div>

    <!--begin::Form-->
    <form class="kt-form kt-form--label-right">
        <div class="kt-portlet__body">
            <div class="form-group form-group-last">
                <div class="alert alert-secondary" role="alert">
                    <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                    <div class="alert-text">
                        Use any icon in input group from <a class="kt-link"
                            href="?page=components/icons/flaticon">Flaticon</a>, <a class="kt-link"
                            href="?page=components/icons/fontawesome5">Fontawesome 5</a>, <a class="kt-link"
                            href="?page=components/icons/lineawesome">Lineawesome</a> or <a class="kt-link"
                            href="?page=components/icons/socicons">Socicons</a> icons.
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <label>Left Addon</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                    <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
                </div>
                <span class="form-text text-muted">Some help content goes here</span>
            </div>
            <div class="form-group form-group-marginless">
                <label>Right Addon</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon2">
                    <div class="input-group-append"><span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>
                </div>
            </div>
            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
            <div class="form-group ">
                <label>Joint Addons</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                </div>
            </div>
            <div class="form-group ">
                <label>Left & Right Addons</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">#</span></div>
                    <input type="text" class="form-control" placeholder="Units" aria-describedby="basic-addon1">
                    <div class="input-group-append"><span class="input-group-text" id="basic-addon1">px</span></div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__foot">
            <div class="kt-form__actions">
                <button type="reset" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
    </form>

    <!--end::Form-->
</div>
@endsection