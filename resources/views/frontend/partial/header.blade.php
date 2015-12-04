<header id="header" class="">
            <div class="topnav hidden-xs">
                <div class="container">

                    <ul class="quick-menu pull-right">
                    </ul>
                </div>
            </div>

            <div class="main-header">

                <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
                    Mobile Menu Toggle
                </a>

                <div class="container">
                    <h1 class="logo-turez navbar-brand">
                        <a href="{{ URL::to('/') }}" title="">
                            <img src="{{ URL::to('/') }}/images/logo.png" alt="">
                        </a>
                    </h1>

                    <nav id="main-menu" role="navigation">
                        <ul class="menu">
                            <li class="menu-item-has-children active">
                                <a href="{{ URL::to('/') }}">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ URL::to('/#') }}">Charter</a>
                                <ul>
                                    <li><a href="{{ URL::to('/') }}/charters/luxury-yatch">Luxury Yachts</a></li>
                                    <li><a href="{{ URL::to('/') }}/charters/wood-motor-sail">Motor Wood/Sail</a></li>
                                    <li><a href="{{ URL::to('/') }}/charters/phinisi-schooner">Phinisi Schooner</a></li>
                                    <li><a href="{{ URL::to('/') }}/charters/motor-yacth">Motor Yachts</a></li>
                                    <li><a href="{{ URL::to('/') }}/charters/wooden-schooner">Wooden Schooner</a></li>
                                    <li><a href="{{ URL::to('/') }}/charters/commercial">Commercial</a></li>

                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ URL::to('/destination') }}">Destinations</a>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="{{ URL::to('/news') }}">News</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ URL::to('/contact') }}">Contact</a>
                            </li>
                         </ul>
                    </nav>
                </div>

                <nav id="mobile-menu-01" class="mobile-menu collapse">
                        <ul class="menu">
                            <li class="menu-item-has-children active">
                                <a href="{{ URL::to('/') }}">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ URL::to('/#') }}">Charter</a>
                                <ul>
                                    <li><a href="{{ URL::to('/') }}/charters/luxury-yatch">Luxury Yachts</a></li>
                                    <li><a href="{{ URL::to('/') }}/charters/wood-motor-sail">Motor Wood/Sail</a></li>
                                    <li><a href="{{ URL::to('/') }}/charters/phinisi-schooner">Phinisi Schooner</a></li>
                                    <li><a href="{{ URL::to('/') }}/charters/motor-yacth">Motor Yachts</a></li>
                                    <li><a href="{{ URL::to('/') }}/charters/wooden-schooner">Wooden Schooner</a></li>
                                    <li><a href="{{ URL::to('/') }}/charters/commercial">Commercial</a></li>

                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ URL::to('/destination') }}">Destinations</a>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="{{ URL::to('/news') }}">News</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ URL::to('/contact') }}">Contact</a>
                            </li>
                         </ul>

                </nav>
            </div>
            <div id="travelo-signup" class="travelo-signup-box travelo-box">
                <div class="login-social">
                    <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
                    <a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
                </div>
                <div class="seperator"><label>OR</label></div>
                <div class="simple-signup">
                    <div class="text-center signup-email-section">
                        <a href="#" class="signup-email"><i class="soap-icon-letter"></i>Sign up with Email</a>
                    </div>
                    <p class="description">By signing up, I agree to SIC Terms of Service, Privacy Policy, Guest Refund olicy, and Host Guarantee Terms.</p>
                </div>
                <div class="email-signup">
                    <form>
                        <div class="form-group">
                            <input type="text" class="input-text full-width" placeholder="first name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="input-text full-width" placeholder="last name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="input-text full-width" placeholder="email address">
                        </div>
                        <div class="form-group">
                            <input type="password" class="input-text full-width" placeholder="password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="input-text full-width" placeholder="confirm password">
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Tell me about Travelo news
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <p class="description">By signing up, I agree to Travelo's Terms of Service, Privacy Policy, Guest Refund Policy, and Host Guarantee Terms.</p>
                        </div>
                        <button type="submit" class="full-width btn-medium">SIGNUP</button>
                    </form>
                </div>
                <div class="seperator"></div>
                <p>Already a SIC member? <a href="#travelo-login" class="goto-login soap-popupbox">Login</a></p>
            </div>
            <div id="travelo-login" class="travelo-login-box travelo-box">
                <div class="login-social">
                    <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
                    <a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
                </div>
                <div class="seperator"><label>OR</label></div>
                <form>
                    <div class="form-group">
                        <input type="text" class="input-text full-width" placeholder="email address">
                    </div>
                    <div class="form-group">
                        <input type="password" class="input-text full-width" placeholder="password">
                    </div>
                    <div class="form-group">
                        <a href="#" class="forgot-password pull-right">Forgot password?</a>
                        <div class="checkbox checkbox-inline">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                </form>
                <div class="seperator"></div>
                <p>Don't have an account? <a href="#travelo-signup" class="goto-signup soap-popupbox">Sign up</a></p>
            </div>
        </header>