'use strict';

document.addEventListener("DOMContentLoaded", function() {

	// ----------------------SLIDER-hero----------------------
		var mySwiper = new Swiper('.heroSlider', {
			slidesPerView: 1,
			// spaceBetween: 30,
			loop: true,
			// effect: 'fade',
			autoplay: {
				delay: 5000,
			},
			// pagination: {
			// 	el: '.hero__pagination',
			// 	clickable: 'true',
			// },
			// navigation: {
			// 	nextEl: '.hero__next',
			// 	prevEl: '.hero__prev',
			// },
			// breakpoints: {
			// 	320: {
			// 		slidesPerView: 2,
			// 		spaceBetween: 20
			// 	},
			// }
		});


	//-------------------------Celeb-Slider---------------------
	var mySwiper = new Swiper('.celebSlider', {
		slidesPerView: 2,
		spaceBetween: 30,
		loop: true,
		navigation: {
			nextEl: '.celebBtnNext',
			prevEl: '.celebBtnPrev',
		},
		breakpoints: {
			576: {
				slidesPerView: 3,
			},
			767: {
				slidesPerView: 4,
			},
			992: {
				slidesPerView: 5,
			},
			1200: {
				slidesPerView: 7,
			},
		}
	});


	//----------------------SCROLL-----------------------
		const scrollTo = (scrollTo) => {
			let list = document.querySelector(scrollTo);
			list = '.' + list.classList[0]  + ' li a[href^="#"';
	
			document.querySelectorAll(list).forEach(link => {
	
				link.addEventListener('click', function(e) {
						e.preventDefault();
						const scrollMenu = document.querySelector(scrollTo);
	
						let href = this.getAttribute('href').substring(1);
	
						const scrollTarget = document.getElementById(href);
	
						// const topOffset = scrollMenu.offsetHeight;
						const topOffset = 70;
						const elementPosition = scrollTarget.getBoundingClientRect().top;
						const offsetPosition = elementPosition - topOffset;
	
						window.scrollBy({
								top: offsetPosition,
								behavior: 'smooth'
						});
	
						
						let button = document.querySelector('.hamburger'),
								nav = document.querySelector('.header__nav'),
								header = document.querySelector('.header');
	
						button.classList.remove('hamburger--active');
						nav.classList.remove('header__nav--active');
						header.classList.remove('header--menu');
				});
			});
		};
		// scrollTo('.header__nav');
	
	//----------------------FIXED-HEADER-----------------------
		const headerFixed = (headerFixed, headerActive) => {
			const header =  document.querySelector(headerFixed),
						active = headerActive.replace(/\./, '');
	
			window.addEventListener('scroll', function() {
				const top = pageYOffset;
				
				if (top >= 90) {
					header.classList.add(active);
				} else {
					header.classList.remove(active);
				}
	
			});
	
		};
		// headerFixed('.header', '.header--active');
	
	//----------------------HAMBURGER-----------------------
		const hamburger = (hamburgerButton, hamburgerNav, hamburgerHeader) => {
			const button = document.querySelector(hamburgerButton),
						nav = document.querySelector(hamburgerNav),
						header = document.querySelector(hamburgerHeader);
	
			button.addEventListener('click', (e) => {
				button.classList.toggle('hamburger--active');
				nav.classList.toggle('header__nav--active');
				header.classList.toggle('header--menu');
			});
	
		};
		// hamburger('.hamburger', '.header__nav', '.header');
		
	//----------------------MODAL-----------------------
		const modals = (modalSelector) => {
			const	modal = document.querySelectorAll(modalSelector);

			if (modal) {
				let i = 1;

				modal.forEach(item => {
					const wrap = item.id;
					const link = document.querySelectorAll('.' + wrap);

					link.forEach(linkItem => {
						let close = item.querySelector('.close');
							if (linkItem) {
								linkItem.addEventListener('click', (e) => {
									if (e.target) {
										e.preventDefault();
									}
									item.classList.add('active');
								});
							}

							if (close) {
								close.addEventListener('click', () => {
									item.classList.remove('active');
								});
							}

						item.addEventListener('click', (e) => {
							if (e.target === item) {
								item.classList.remove('active');
							}
						});
					});
				});
			}

		};
		modals('.modal');

	//----------------------FORM-----------------------
		const forms = (formsSelector) => {
		const form = document.querySelectorAll(formsSelector);
		let i = 1;
		let img = 1;
		let lebel = 1;
		let prev = 1;

		form.forEach(item => {
			const elem = 'form--' + i++;
			item.classList.add(elem);

			let formId = item.id = (elem);
			let formParent = document.querySelector('#' + formId);

			formParent.addEventListener('submit', formSend);

			async function formSend(e) {
				e.preventDefault();

				let error = formValidate(item);

				let formData = new FormData(item);

				if (error === 0) {
					item.classList.add('_sending');
					let response = await fetch('sendmail.php', {
						method: 'POST',
						body: formData
					});

					if (response.ok) {
						let modalThanks = document.querySelector('#modal__thanks');
						formParent.parentNode.style.display = 'none';

						modalThanks.classList.add('active');
						item.reset();
						item.classList.remove('_sending');
					} else {
						alert('???????????? ?????? ????????????????');
						item.classList.remove('_sending');
					}

				}
			}

			function formValidate(item) {
				let error = 0;
				let formReq = formParent.querySelectorAll('._req');

				for (let index = 0; index < formReq.length; index++) {
					const input = formReq[index];
					// formRemoveError(input);

					if (input.classList.contains('_email')) {
						if(emailTest(input)) {
							formAddErrorEmail(input);
							error++;
						}
					} else if (input.getAttribute('type') === 'checkbox' && input.checked === false) {
						formAddErrorCheck(input);
						error++;
					} else {
						if (input.value === '') {
							formAddError(input);
							error++;
						}
					}
				}
				return error;
			}

			const formImgFile = formParent.querySelectorAll('.formImgFile');

			formImgFile.forEach(item => { 
				const elem = 'formImgFile--' + i++;

				let formId = item.id = (elem);
				let formParent = document.querySelector('#' + formId);

				const formImage = formParent.querySelector('.formImage');
				const formLebel = formParent.querySelector('.formLebel');
				const formPreview = formParent.querySelector('.formPreview');

				//???????????????? ?? ??????????
				let formImageNumber = 'formImage--' + img++;
				let formPreviewNumber = 'formPreview--' + prev++;
				
				formImage.id = (formImageNumber);
				formLebel.htmlFor = ('formImage--' + lebel++);
				formPreview.id = (formPreviewNumber);
				const formImageAdd = document.querySelector('#' + formImageNumber);

				// ?????????????????? ?? ???????????? ????????
				formImageAdd.addEventListener('change', () =>  {
					uploadFile(formImage.files[0]);
				});

				function uploadFile(file) {
			
					if (!['image/jpeg', 'image/png', 'image/gif', 'image/ico', 'application/pdf'].includes(file.type)) {
						alert('???????????? ??????????????????????');
						formImage.value = '';
						return;
					}
			
					if (file.size > 2 * 1024 * 1024) {
						alert('???????????? ?????????? 2 ????.');
						return;
					}
			
					var reader = new FileReader();
					reader.onload = function (e) {
						if(['application/pdf'].includes(file.type)) {
							formPreview.innerHTML = `???????? ????????????`;
						}else{
							formPreview.innerHTML = `<img src="${e.target.result}" alt="????????">`;
						}
						
					};
					reader.onerror = function (e) {
						alert('????????????');
					};
					reader.readAsDataURL(file);
				}
			})

			function formAddError(input) {
				let div = document.createElement('div');
				div.classList.add("form__error");
				div.innerHTML = "?????????????? ???????????? ?? ????????";

				input.parentElement.append(div);
				input.parentElement.classList.add('_error');
				input.classList.add('_error');
			}

			function formAddErrorEmail(input) {
				let div = document.createElement('div');
				div.classList.add("form__error");
				div.innerHTML = "?????????????? ???????? ??????????";

				input.parentElement.append(div);
				input.parentElement.classList.add('_error');
				input.classList.add('_error');
			}

			function formAddErrorCheck(input) {
				let div = document.createElement('div');
				div.classList.add("form__error");
				div.innerHTML = "???????????????? ???? ?????????????????? ???????????????????????? ????????????";

				input.parentElement.append(div);
				input.parentElement.classList.add('_error');
				input.classList.add('_error');
			}

			function emailTest(input) {
				return !/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/. test(input.value);
			}

		});
		};
		forms('.form');
	
	//--------------------Accordion-----------------------
	const accordions = (accordionSelector) => {
		const	accordion = document.querySelectorAll(accordionSelector);
	
		accordion.forEach(item => {
			const accordionClick = item.querySelector('.accordion__header'),
						accordionContent = item.querySelector('.accordion__content');
	
			accordionClick.addEventListener('click', (e) => {
				if(!item.classList.contains('accordion--active')) {
	
					item.classList.add('accordion--active')
					accordionContent.style.height = "auto"
					var height = accordionContent.clientHeight + "px"
					accordionContent.style.height = "0px"
	
					setTimeout(() => {
						accordionContent.style.height = height
					}, 0)
	
					} else {
						accordionContent.style.height = "0px"
							item.classList.remove('accordion--active')
				}
	
			});
		});
	
	};
	accordions('.accordion');


	const checkPageUrl = () => {
		const pageUrl = window.location.href;
		if(pageUrl.includes('login')) {
			// document.querySelector('.policy').classList.add('policy--accent');
			
			document.querySelector('.footer').classList.add('hidden');
			document.querySelector('body').classList.add('body--auth');
		}
		if(pageUrl.includes('registracija')) {
			document.querySelector('.footer').classList.add('hidden');
			document.querySelector('body').classList.add('body--auth');
		}
		// if(pageUrl.includes('my-account')) {
		// 	document.querySelector('.h1').classList.add('hidden');
		// 	document.querySelector('.footer').classList.add('hidden');
		// 	document.querySelector('body').classList.add('body--auth');
		// }
	}

	checkPageUrl();


	const userAuthCheck = () => {
		if(document.querySelector('.header__auth_submenu')) {
			document.querySelector('.header__btn--auth').classList.add('hidden');
			document.querySelector('.header__btn--profile').classList.remove('hidden');
		}
	}

	userAuthCheck();



//--------------Checkout form radio check------------
	const radioLabelsReason = document.querySelectorAll('#billing_reason_field fieldset label');
	const radioLabelsDest = document.querySelectorAll('#billing_destination_field fieldset label');
	const radioLabelsLang = document.querySelectorAll('#billing_language_field label');
	
	const checkRadioBtnsReason = () => {

		radioLabelsReason.forEach( e => e.classList.remove('radio-active'));

		if(event.target.checked) {
			event.target.parentElement.classList.add('radio-active');
		}

	}
	radioLabelsReason.forEach( e => e.addEventListener('click', checkRadioBtnsReason ));

	const checkRadioBtnsDest = () => {

		radioLabelsDest.forEach( e => e.classList.remove('radio-active'));

		if(event.target.checked) {
			event.target.parentElement.classList.add('radio-active');
		}

	}
	radioLabelsDest.forEach( e => e.addEventListener('click', checkRadioBtnsDest ));

	const checkRadioBtnsLang = () => {

		radioLabelsLang.forEach( e => e.classList.remove('radio-active'));

		if(event.target.checked) {
			event.target.parentElement.classList.add('radio-active');
		}

	}
	radioLabelsLang.forEach( e => e.addEventListener('click', checkRadioBtnsLang ));


	
	const showNecessaryField = () => {
		const formMeInput = document.querySelector('#billing_destination_me');

		if(formMeInput.checked) {
			document.querySelector('#billing_yourname_field').classList.add('visible');
			document.querySelector('#billing_from_field').classList.add('hidden');
			document.querySelector('#billing_for_field').classList.add('hidden');
		} else {
			document.querySelector('#billing_yourname_field').classList.remove('visible');
			document.querySelector('#billing_from_field').classList.remove('hidden');
			document.querySelector('#billing_for_field').classList.remove('hidden');
		}
	}

	document.querySelectorAll('#billing_destination_other, #billing_destination_me')
		.forEach(e => e.addEventListener('click', showNecessaryField));

	showNecessaryField();


});
