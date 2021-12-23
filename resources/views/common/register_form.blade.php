<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-transparent text-white"><i class="ti-user"></i></span>
        </div>
        <input type="text" name="name" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="{{ __('Username') }}">
    </div>
</div>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-transparent text-white"><i class="ti-email"></i></span>
        </div>
        <input type="email" name="email" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="{{ __('Email Address') }}">
    </div>
</div>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-transparent text-white"><i class="ti-lock"></i></span>
        </div>
        <input type="password" name="password" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="{{ __('Password') }}">
    </div>
</div>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-transparent text-white"><i class="ti-lock"></i></span>
        </div>
        <input type="password" name="confirm_password" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="{{ __('Confirm Password') }}">
    </div>
</div>
    <div class="row">
    <div class="col-12">
        <div class="checkbox text-white">
        <input type="checkbox" name="terms" id="basic_checkbox_1" >
        <label for="basic_checkbox_1">{{ __('I agree to the') }} <a href="#" class="text-warning"><b>{{ __('Terms') }}</b></a></label>
        </div>
    </div>
    <!-- /.col -->
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-info btn-rounded margin-top-10">{{ __('SIGN UP') }}</button>
    </div>
    <!-- /.col -->
</div>