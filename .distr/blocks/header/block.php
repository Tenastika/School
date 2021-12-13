<section class="header" id="header">
	<div class="container header__container">
		<button class="hamburger hamburger--squeeze" type="button">
  			<span class="hamburger-box">
    			<span class="hamburger-inner"></span>
  			</span>
		</button>
		<a class="header__logo" href="#" target="_blank">Learn. Love</a>
		
		<nav class="header__nav">
			<ul class="header__list">
				<li class="header__item">
					<a href="#" class="header__link">Home</a>
				</li>
				<li class="header__item">
					<a href="#courses" class="header__link">Course</a>
				</li>
				<li class="header__item">
					<a href="#" class="header__link">Features</a>
				</li>
				<li class="header__item">
					<a href="#" class="header__link">Blog</a>
				</li>
				<li class="header__item" data-fancybox="contacts" href="#contacts">
					<a class="header__link" >Contact</a>
				</li>
			</ul>
		</nav>
		<ul class="header__login login">
			<li class="login__item">
				<a  class="login__link" data-fancybox="login" href="#login-modals">Login</a>
			</li>
			<li class="login__item">
				<a href="#" class="login__link">Signup</a>
			</li>
		</ul>

	</div>

 <!-- Модальные окна вход/регистрация -->
	<article class="header__modals modals" id="login-modals">
		<div class="modals__btn">
			<button class="modals__btn-login">Login</button>
			<button class="modals__btn-reg">Signup</button>
		</div>
		<form action="" class="modals__form-login">
			<input type="email" class="modals__form-login-email">
			<label for="#password">View</label>
			<input type="password" class="modals__form-login-pas" id="password">
			<input type="checkbox" class="modals__form-login-rem">Remember me
			<button class="modals__form-login-btn">login</button>
		</form>
		<form action="" class="modals__form-reg">
			<input type="email" class="modals__form-reg-email">
			<label for="#password">View</label>
			<input type="password" class="modals__form-reg-pas" id="password">
			<input type="checkbox" class="modals__form-reg-rem">I accept the user agreement
			<button class="modals__form-reg-btn">Signup</button>
		</form>
	</article>
</section>