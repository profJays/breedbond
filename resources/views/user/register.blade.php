                    <div class="links" align="center">
                        <a href="{{ url('/') }}">Home Home</a>
                    </div>

                <div class="panel-body">

                    {!!Form::open(array('route' => 'newUser', 'role' => 'form', 'class' => 'form-horizontal', 'files' => 'true', 'method' => 'POST')) !!}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <!-- <label for="first_name" class="col-md-4 control-label">first_name</label> -->

                            <div class="col-md-8 col-md-offset-2">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="Add first_name"  autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <!-- <label for="last_name" class="col-md-4 control-label">last_name</label> -->

                            <div class="col-md-8 col-md-offset-2">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Add last_name"  autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!-- <label for="email" class="col-md-4 control-label">email</label> -->

                            <div class="col-md-8 col-md-offset-2">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Add email"  autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('user_name') ? ' has-error' : '' }}">
                            <!-- <label for="user_name" class="col-md-4 control-label">user_name</label> -->

                            <div class="col-md-8 col-md-offset-2">
                                <input id="user_name" type="text" class="form-control" name="user_name" value="{{ old('user_name') }}" placeholder="Add user_name"  autofocus>

                                @if ($errors->has('user_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>           


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <!-- <label for="password" class="col-md-4 control-label">password</label> -->

                            <div class="col-md-8 col-md-offset-2">
                                <input id="password" type="text" class="form-control" name="password" value="{{ old('password') }}" placeholder="Add password"  autofocus>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                  

                        <div class="form-group{{ $errors->has('user_bio') ? ' has-error' : '' }}">
                            <!-- <label for="first_name" class="col-md-4 control-label">first_name</label> -->

                            <div class="col-md-8 col-md-offset-2">
                                <textarea id="user_bio" type="text" class="form-control" name="user_bio" value="{{ old('user_bio') }}" placeholder="Add user_bio" rows="10"  autofocus></textarea>


                                @if ($errors->has('user_bio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_bio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('profile_image') ? ' has-error' : '' }}">
                            <!-- <label for="first_name" class="col-md-4 control-label">first_name</label> -->

                            <div class="col-md-8 col-md-offset-2">
                                <input id="profile_image" accept="profile_image/*" type="file" class="form-control" name="profile_image" value="{{ old('profile_image') }}" placeholder="Add profile_image"  autofocus>


                                @if ($errors->has('profile_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profile_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group" align="center">
                            <button type="submit"  class="btn btn-primary">
                                Creat New Account
                            </button>
                        </div>
                    </form>
                </div>