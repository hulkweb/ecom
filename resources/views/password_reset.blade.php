@extends('layouts.user')



@section('content')
    <div class="page-contain login-page">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container">
             
                <div class="row">

                    <!--Form Sign In-->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="margin: auto">

                        <div class="signin-container">
                            <h1>Reset Password</h1>
                            @if ($user)
                                <form action="{{ route('reset_password') }}" name="frm-login" method="post">
                                    @csrf
                                    <p class="form-row">
                                        <label for="fid-name">New Password:<span class="requite">*</span></label>
                                        <input type="password" id="fid-name" name="new_password" value=""
                                            class="txt-input">
                                    </p>
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                    <p class="form-row">
                                        <label for="fid-name">Confirm Password:<span class="requite">*</span></label>
                                        <input type="password" id="fid-name" name="confirm_password" value=""
                                            class="txt-input">
                                    </p>
                                    <p class="form-row wrap-btn">
                                        <button class="btn btn-submit btn-bold" type="submit">Reset Password</button>

                                    </p>
                                </form>
                            @else
                                <p class="text-danger">Password Reset Link expired </p>
                            @endif

                        </div>
                    </div>

                    <!--Go to Register form-->


                </div>

            </div>

        </div>

    </div>
@endsection
