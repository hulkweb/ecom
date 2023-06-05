@extends('layouts.user')



@section('content')
    <div class="page-contain login-page">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container">
<h1>Forget Password</h1>
                <div class="row">

                    <!--Form Sign In-->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="margin: auto">
                        <div class="signin-container">
                            <form action="{{route("forget_password_link")}}" name="frm-login" method="post">
                                @csrf
                                <p class="form-row">
                                    <label for="fid-name">Email Address:<span class="requite">*</span></label>
                                    <input type="email" id="fid-name" name="email" value="" class="txt-input">
                                </p>
                                
                                <p class="form-row wrap-btn">
                                    <button class="btn btn-submit btn-bold" type="submit">Send Verification Link</button>
                                    
                                </p>
                            </form>
                        </div>
                    </div>

                    <!--Go to Register form-->
                

                </div>

            </div>

        </div>

    </div>
@endsection
