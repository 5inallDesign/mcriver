	</div> <!--.page-->
	<footer class="footer">
		<p>Copyright &copy; {{date("Y")}} McRiver Raid. All Rights Reserved.</p>
		<p>Designated trademarks and brands are the property of their respective owners.</p>
		<p>Website and graphics are created by Cap'n Matt Crandell. Check out his other great work at <a href="http://www.crandelldesign.com" target="_blank">Crandell Design</a>.</p>
	</footer>
</div> <!--.site-container-->

<div class="modal fade" tabindex="-1" role="dialog" id="loginModal">
  	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title">Login</h4>
      		</div>
      		<div class="modal-body">
        		<form class="form-horizontal" method="POST" action="{{url('/signin')}}">
					<div class="form-group">
						<label class="col-md-4 control-label">Email</label>
                        <div class="col-md-6">
			            	<input type="email" class="form-control" name="email" placeholder="Email">
			            </div>
			        </div>
			        <div class="form-group">
			        	<label class="col-md-4 control-label">Password</label>
                        <div class="col-md-6">
			            	<input type="password" class="form-control" name="password" placeholder="Password">
			            </div>
			        </div>
			        <div class="form-group">
			        	{!! csrf_field() !!}
			        	<div class="col-md-6 col-md-offset-4">
				        	<button type="submit" class="btn btn-primary btn-block">
				                Continue
				            </button>
				        </div>
			        </div>
	    		</form>
      		</div>
    	</div><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="registerModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Register</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ url('/register') }}">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">E-Mail Address</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Confirm Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary btn-block">
                                <i class="fa fa-btn fa-user"></i> Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="forgot-password-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Reset Password</h4>
            </div>
            <div class="modal-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="alert alert-danger" style="display: none">
                </div>
                <div class="alert alert-success" style="display: none">
                </div>
                <form id="forgot-password-modal-form" class="form" role="form" method="POST" action="{{ url('/api/reset-password') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="control-label">E-Mail Address</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        <input type="hidden" name="url" value="{{ url()->current() }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-envelope"></i> Send Password Reset Link
                        </button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
