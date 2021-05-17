@if(count($errors))
	<script type="text/javascript">
		$(document).ready(function () {
			//showNotification();
		});
	</script>
	<div class="alert-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="alert-inner mg-b-30">
                        <div class="alert-hd">
                            <h2>Hello System User!</h2>
                            <p>I Need Your Attention Please.</p>
                        </div>
                        <div class="alert-list">
                            <div class="alert alert-danger alert-mg-b-0" role="alert">
                            	<ol>

									@foreach($errors->all() as $error)

										<li>{{ $error }}</li>

									@endforeach

								</ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
