<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package youbor
 */

?>

	<?php get_template_part( 'parts/footer' ); ?>

	<?php wp_footer();?>

	<!-- MODAL -->

	<?php if( have_rows('modals') ): ?>
		<?php while( have_rows('modals') ): the_row(); 
		$modal = get_sub_field('modal');
		$modal_id = get_sub_field('modal_id');
		?>
		<div class="modal" id="<?php echo $modal_id; ?>">
			<div class="modal__wrap">
				<button class="close modal__close" type="button">
					<span></span>
					<span></span>
				</button>

				<div class="modal__text">
					<?php echo $modal; ?>
				</div>


				
			</div>
		</div>

		<?php endwhile; ?>
	<?php endif; ?>



			<!-- <h3 class="h3 modal__title">Что такое <span>youbor?</span></h3>

			<div class="modal__text">
				<p class="modal__subtitle">
					Youbor – это сайт для заказа персональных видео от звёзд шоу-бизнеса, 
					ТВ и кино, спорта, блогеров, ведущих и комиков.
				</p>
	
				<span class="modal__quest">Как работает сервис? </span>
				<p class="modal__answer">
					Чтобы заказать видео от звезды, больше не нужно писать ей в direct, ждать и 
					надеяться, что Ваше сообщение увидят. На платформе достаточно пройти 4 простых шага:
				</p>
	
				<span class="modal__quest">• Выберите знаменитость</span>
				<p class="modal__answer">
					Воспользуйтесь поиском, если знаете, кто тебе нужен, или воспользуйтесь 
					категориями, если еще не определились.
				</p>
	
				<span class="modal__quest">• Опишите, что хотели бы услышать</span>
				<p class="modal__answer">
					Заполните заявку, укажите, для кого видео, с чем поздравить или что нужно сказать. 
					Рекомендуем детально рассказать об адресате видео, его хобби. 
					Так звезда сможет еще больше персонализировать поздравление!
				</p>
				
				<span class="modal__quest">• Проверьте и оплатите заказ.</span>
				<p class="modal__answer">
					Внимательно проверьте всю информацию перед отправкой. 
					Если все верно – нажмите кнопку “Оплатить”. 
				</p>
				
				<span class="modal__quest">• Получите видео и сделайте подарок.</span>
				<p class="modal__answer">
					В течении недели знаменитость запишет видео и Вы получите его на свой телеграм. 
					Как подарить – дело фантазии. Можете отправить по, Telegram или Whatsapp, 
					а можете в разгар праздника включить на большом
				</p>
				<span class="modal__quest">Как работает сервис? </span>
				<p class="modal__answer">
					Чтобы заказать видео от звезды, больше не нужно писать ей в direct, ждать и 
					надеяться, что Ваше сообщение увидят. На платформе достаточно пройти 4 простых шага:
				</p>
	
				<span class="modal__quest">• Выберите знаменитость</span>
				<p class="modal__answer">
					Воспользуйтесь поиском, если знаете, кто тебе нужен, или воспользуйтесь 
					категориями, если еще не определились.
				</p>
	
				<span class="modal__quest">• Опишите, что хотели бы услышать</span>
				<p class="modal__answer">
					Заполните заявку, укажите, для кого видео, с чем поздравить или что нужно сказать. 
					Рекомендуем детально рассказать об адресате видео, его хобби. 
					Так звезда сможет еще больше персонализировать поздравление!
				</p>
				
				<span class="modal__quest">• Проверьте и оплатите заказ.</span>
				<p class="modal__answer">
					Внимательно проверьте всю информацию перед отправкой. 
					Если все верно – нажмите кнопку “Оплатить”. 
				</p>
				
				<span class="modal__quest">• Получите видео и сделайте подарок.</span>
				<p class="modal__answer">
					В течении недели знаменитость запишет видео и Вы получите его на свой телеграм. 
					Как подарить – дело фантазии. Можете отправить по, Telegram или Whatsapp, 
					а можете в разгар праздника включить на большом
				</p>
			</div> -->


</body>
</html>
