{{ Form::open(['url' => 'complaint', 'method' => 'post', 'class' => 'needs-validation', 'novalidate']) }}
<div class="modal-body">
    <div class="text-end">
        @if (module_is_active('AIAssistant'))
            @include('aiassistant::ai.generate_ai_btn',['template_module' => 'complaint','module'=>'Hrm'])
        @endif
    </div>
    <div class="row">
        @if (in_array(Auth::user()->type, Auth::user()->not_emp_type))
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('complaint_from', __('Complaint From'), ['class' => 'form-label']) }}<x-required></x-required>
                    {{ Form::select('complaint_from', $employees, null, ['class' => 'form-control ', 'placeholder' => __('Select Employee'), 'required' => 'required']) }}
                </div>
            </div>
        @endif
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('complaint_against', __('Complaint Against'), ['class' => 'form-label']) }}<x-required></x-required>
                {{ Form::select('complaint_against', $employees, null, ['class' => 'form-control ', 'placeholder' => __('Select Employee'), 'required' => 'required']) }}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('title', __('Title'), ['class' => 'form-label']) }}<x-required></x-required>
                {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => __('Enter Complaint Title'), 'required' => 'required']) }}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('complaint_date', __('Complaint Date'), ['class' => 'form-label']) }}<x-required></x-required>
                {{ Form::date('complaint_date', date('Y-m-d'), ['class' => 'form-control ', 'required' => 'required', 'placeholder' => __('Select Date'), 'min' => date('Y-m-d')]) }}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('description', __('Description'), ['class' => 'form-label']) }}<x-required></x-required>
                {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => __('Enter Description'), 'rows' => '3', 'required' => 'required']) }}
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn  btn-light" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
    {{ Form::submit(__('Create'), ['class' => 'btn  btn-primary']) }}
</div>
{{ Form::close() }}