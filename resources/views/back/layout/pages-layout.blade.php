
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>@yield('pageTitle')</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="/back/vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="/back/vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="/back/vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/back/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="/back/vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="/back/vendors/styles/style.css" />
        @stack('stylesheets')
	</head>
	<body>
		{{-- <div class="pre-loader">
			<div class="pre-loader-box">
				<div class="loader-logo">
					<img src="/back/vendors/images/deskapp-logo.svg" alt="" />
				</div>
				<div class="loader-progress" id="progress_div">
					<div class="bar" id="bar1"></div>
				</div>
				<div class="percent" id="percent1">0%</div>
				<div class="loading-text">Loading...</div>
			</div>
		</div> --}}

		<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
				<div
					class="search-toggle-icon bi bi-search"
					data-toggle="header_search"
				></div>
			</div>
                @if (Auth::guard('admin')->check())
                    <div class="user-info-dropdown">
                        <div class="dropdown">
                            <a
                                class="dropdown-toggle"
                                href="#"
                                role="button"
                                data-toggle="dropdown"
                            >
                                <span class="user-icon">
                                    <img src="/back/vendors/images/photo1.jpg" alt="" />
                                </span>
                                <span class="user-name">Ross C. Lopez</span>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                            >
                                <a class="dropdown-item" href="profile.html"
                                    ><i class="dw dw-user1"></i> Profile</a
                                >
                                <a class="dropdown-item" href="profile.html"
                                    ><i class="dw dw-settings2"></i> Setting</a
                                >
                                <a class="dropdown-item" href="faq.html"
                                    ><i class="dw dw-help"></i> Help</a
                                >
                                <a class="dropdown-item" href="{{ route('admin.logout_handler') }}" onclick="event.preventDefault();document.getElementById('adminLogoutForm').submit();"><i class="dw dw-logout"></i> Log Out</a>

                                <form action="{{ route('admin.logout_handler') }}" id="adminLogoutForm" method="POST">@csrf</form>
                            </div>
                        </div>
                    </div>

                    @elseif (Auth::guard('servidor')->check())
                        <div class="user-info-dropdown">
                            <div class="dropdown">
                                <a
                                    class="dropdown-toggle"
                                    href="#"
                                    role="button"
                                    data-toggle="dropdown"
                                >
                                    <span class="user-icon">
                                        <img src="/back/vendors/images/photo1.jpg" alt="" />
                                    </span>
                                    <span class="user-name">Ross C. Lopez</span>
                                </a>
                                <div
                                    class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                >
                                    <a class="dropdown-item" href="profile.html"
                                        ><i class="dw dw-user1"></i> Profile</a
                                    >
                                    <a class="dropdown-item" href="profile.html"
                                        ><i class="dw dw-settings2"></i> Setting</a
                                    >
                                    <a class="dropdown-item" href="faq.html"
                                        ><i class="dw dw-help"></i> Help</a
                                    >
                                    <a class="dropdown-item" href="login.html"
                                        ><i class="dw dw-logout"></i> Log Out</a
                                    >
                                </div>
                            </div>
                        </div>

                @endif


				<div class="github-link">
					<a href="https://github.com/dropways/deskapp" target="_blank"
						><img src="/back/vendors/images/github.svg" alt=""
					/></a>
				</div>
			</div>
		</div>




		<div class="left-side-bar">
			<div class="brand-logo">
				<a href="index.html">
					<img
						src="/back/vendors/images/deskapp-logo-white.svg"
						alt=""
						class="light-logo"
					/>
					<img src="/back/vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">

                            @if (Route::is('admin.*'))
                                <li>
                                    <a href= {{ route('admin.home') }} class="dropdown-toggle no-arrow">
                                        <span class="micon fa fa-home"></span
                                        ><span class="mtext">Início</span>
                                    </a>
                                </li>
                                <li>
                                    <a href={{ route('editals.create')}} class="dropdown-toggle no-arrow">
                                        <span class="micon bi bi-receipt-cutoff"></span
                                        ><span class="mtext">Criar edital</span>
                                    </a>
                                </li>
                                <li>
                                    <a href={{ route('admin.manage-editais')}} class="dropdown-toggle no-arrow">
                                        <span class="micon bi bi-receipt-cutoff"></span
                                        ><span class="mtext">Gerenciar editais</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <div class="sidebar-small-cap">Configurações</div>
                                </li>
                                <li>
                                    <a
                                        href=""
                                        target="_blank"
                                        class="dropdown-toggle no-arrow"
                                    >
                                        <span class="micon fa fa-user"></span>
                                        <span class="mtext"
                                            >Perfil
                                        </span>
                                    </a>
                                </li>
                            @elseif(Route::is('editals.*') )
                                <li>
                                    <a href={{ route('admin.home') }} class="dropdown-toggle no-arrow">
                                        <span class="micon fa fa-home"></span
                                        ><span class="mtext">Início</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <div class="sidebar-small-cap">Configurações</div>
                                </li>
                                <li>
                                    <a
                                        href=""
                                        target="_blank"
                                        class="dropdown-toggle no-arrow"
                                    >
                                        <span class="micon fa fa-user"></span>
                                        <span class="mtext"
                                            >Perfil
                                        </span>
                                    </a>
                                </li>
                            @elseif (Route::is('candidatos.*'))

                                <li>
                                    <a href= {{ route('candidatos.home') }} class="dropdown-toggle no-arrow">
                                        <span class="micon fa fa-home"></span
                                        ><span class="mtext">Início</span>
                                    </a>
                                </li>
                                <li>
                                    <a href={{ route('candidatos.show', 'candidato->id')}} class="dropdown-toggle no-arrow">
                                        <span class="micon bi bi-receipt-cutoff"></span
                                        ><span class="mtext">Dados Pessoais</span>
                                    </a>
                                </li>
                                <li>
                                    <a href={{ route('candidatos.show', 'candidato->id')}} class="dropdown-toggle no-arrow">
                                        <span class="micon bi bi-receipt-cutoff"></span
                                        ><span class="mtext">Inscrições</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <div class="sidebar-small-cap">Configurações</div>
                                </li>
                                <li>
                                    <a
                                        href=""
                                        target="_blank"
                                        class="dropdown-toggle no-arrow"
                                    >
                                        <span class="micon fa fa-user"></span>
                                        <span class="mtext"
                                            >Perfil
                                        </span>
                                    </a>
                                </li>
                            @endif

					</ul>
				</div>
			</div>
		</div>
		<div class="mobile-menu-overlay"></div>
        <!-- Cebeçado da pagina -->
		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
                                    @if( Route::is('admin.*') )
                                        <h5>Adminstração</h5>
                                        @yield('sub-title')
                                    @elseif (Route::is('editals.*'))
                                        <h5>Servidor</h5>
                                    @else
                                        <h5>Candidato</h5>
                                    @endif
								</div>
							</div>
						</div>
					</div>
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                        @yield('content')
                    </div>

				</div>
				<div class="footer-wrap pd-20 mb-20 card-box">
					DeskApp - Bootstrap 4 Admin Template By
					<a href="https://github.com/dropways" target="_blank"
						>Ankit Hingarajiya</a
					>
				</div>
			</div>
		</div>

		<!-- js -->
		<script src="/back/vendors/scripts/core.js"></script>
		<script src="/back/vendors/scripts/script.min.js"></script>
		<script src="/back/vendors/scripts/process.js"></script>
		<script src="/back/vendors/scripts/layout-settings.js"></script>
		<script>
            if( navigator.userAgent.indexOf("Firefox") != -1 ){
                history.pushState(null, null, document.URL);
                window.addEventListener('popstate', function(){
                    history.pushState(null, null, document.URL);
                });
            }
        </script>
        @stack('scripts')
        @stack('tables-scripts')
        @stack('show-scripts')
        @stack('create-edital-scripts')
	</body>
</html>
