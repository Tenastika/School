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
					<a href="header" class="header__link">Home</a>
				</li>
				<li class="header__item">
					<a href="#course" class="header__link">Course</a>
				</li>
				<li class="header__item">
					<a href="#sorry-thanks" class=" header__link header__link3">Features</a>
				</li>
				<li class="header__item">
					<a href="#sorry-thanks" class=" header__link header__link2">Blog</a>
				</li>
				<li class="header__item" >
					<a class="header__link header__link1" href="#contact">Contact</a>
				</li>
			</ul>
		</nav>
		<ul class="header__login login">
			<li class="login__item btn-login" >
				<a  class="login__link"  href="#login-modals">Login</a>
			</li>
			<li class="login__item  signup">
				<a class="login__link" href="#login-modals">Signup</a>
			</li>
		</ul>

	</div>

 <!-- Модальные окна вход/регистрация -->
	
</section>
<article class="modals" id="login-modals">
		<div class="modals__btn">
			<button class="modals__btn-login btn-tab">Login</button>
			<button class="modals__btn-reg btn-tab">Signup</button>
		</div>
		
			<form action="" class="modals__form-login form-tab" >
				<input type="email" class="modals__form-login-email " placeholder="Email">
				<label for="#password" class="pass-view-log">View</label>
				<input type="password" class="modals__form-login-pas" id="password" placeholder="Password">
				<label class="check-login"><input type="checkbox" class="modals__form-login-rem"><span class="checkstyle"></span><span>Remember me</span></label>
				<button class="modals__form-login-btn" type="submit">login</button>
			</form>
			<form action="" class="modals__form-reg form-tab" >
				<input type="email" class="modals__form-reg-email" placeholder="Email">
				<label for="#password2" class="pass-view-reg">View</label>
				<input type="password" class="modals__form-reg-pas" id="password2" placeholder="Password">
				<label class="check-reg"><input type="checkbox" class="modals__form-reg-rem"><span class="checkstyle"></span><span>I accept the user agreement</span></label>
				<button class="modals__form-reg-btn" type="submit" >Signup</button>
			</form>	
</article>